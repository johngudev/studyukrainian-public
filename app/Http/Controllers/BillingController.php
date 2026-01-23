<?php

namespace App\Http\Controllers;

use App\Models\StripeAccount;
use App\Models\PremiumStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Stripe\StripeClient;

class BillingController extends Controller
{
    /**
     * Create a Stripe client using the secret key in config/services.php
     */
    protected function stripe(): StripeClient
    {
        return new StripeClient(config('services.stripe.secret'));
    }

    /**
     * Start a Stripe Checkout subscription session and redirect user to Stripe.
     */
    public function start(Request $request)
    {
        $user = $request->user();

        // Create local rows if missing
        $stripeAccount = StripeAccount::firstOrCreate(['user_id' => $user->id]);
        PremiumStatus::firstOrCreate(['user_id' => $user->id]);

        $stripe = $this->stripe();

        // Create Stripe customer if missing
        if (!$stripeAccount->stripe_customer_id) {
            $customer = $stripe->customers->create([
                'email' => $user->email,
                'metadata' => [
                    'user_id' => (string) $user->id,
                ],
            ]);

            $stripeAccount->stripe_customer_id = $customer->id;
            $stripeAccount->save();
        }

        // Create Checkout Session (mode=subscription)
        $session = $stripe->checkout->sessions->create([
            'mode' => 'subscription',
            'customer' => $stripeAccount->stripe_customer_id,
            'line_items' => [[
                'price' => config('services.stripe.price_pro_monthly'),
                'quantity' => 1,
            ]],
            'success_url' => route('billing.success') . '?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url'  => route('billing.cancel'),
        ]);

        return redirect($session->url);
    }

    /**
     * Stripe redirects here after successful Checkout.
     * We verify the session server-side and then mark the user premium.
     */
    public function success(Request $request)
    {
        $user = $request->user();
        $sessionId = $request->query('session_id');
        abort_unless($sessionId, 400);

        $stripeAccount = StripeAccount::where('user_id', $user->id)->firstOrFail();

        $stripe = $this->stripe();

        $session = $stripe->checkout->sessions->retrieve($sessionId, []);

        // Basic verification
        abort_unless($session->status === 'complete', 403);
        abort_unless($session->customer === $stripeAccount->stripe_customer_id, 403);

        $subscriptionId = $session->subscription;
        abort_unless($subscriptionId, 400);

        $subscription = $stripe->subscriptions->retrieve($subscriptionId, []);

        // Update stripe_accounts table (no premium flag here)
        $stripeAccount->stripe_subscription_id = $subscription->id;

        if (isset($subscription->current_period_end)) {
            $stripeAccount->current_period_end =
                Carbon::createFromTimestamp($subscription->current_period_end);
        }

        $stripeAccount->save();

        // Update premium_status (this is our entitlement table)
        $isPremium = in_array($subscription->status, ['active', 'trialing'], true);

        PremiumStatus::updateOrCreate(
            ['user_id' => $user->id],
            ['is_premium' => $isPremium]
        );

        return view('billing.success');
    }

    /**
     * Stripe redirects here if the customer cancels checkout.
     */
    public function cancel()
    {
        return view('billing.cancel');
    }

    /**
     * Send the user to Stripe’s hosted Customer Portal to cancel/manage billing.
     */
    public function portal(Request $request)
    {
        $user = $request->user();

        $stripeAccount = StripeAccount::where('user_id', $user->id)->firstOrFail();
        abort_unless($stripeAccount->stripe_customer_id, 400);

        $stripe = $this->stripe();

        $portal = $stripe->billingPortal->sessions->create([
            'customer' => $stripeAccount->stripe_customer_id,
            'return_url' => route('dashboard'), // change if needed
        ]);

        return redirect($portal->url);
    }

    /**
     * Optional safety net: manually refresh premium status from Stripe.
     * Useful if user paid but never returned to success page.
     */
    public function refresh(Request $request)
    {
        $user = $request->user();

        $stripeAccount = StripeAccount::where('user_id', $user->id)->firstOrFail();
        abort_unless($stripeAccount->stripe_customer_id, 400);

        $stripe = $this->stripe();

        $subs = $stripe->subscriptions->all([
            'customer' => $stripeAccount->stripe_customer_id,
            'status' => 'all',
            'limit' => 10,
        ]);

        $active = collect($subs->data)->first(fn ($s) =>
            in_array($s->status, ['active', 'trialing'], true)
        );

        PremiumStatus::updateOrCreate(
            ['user_id' => $user->id],
            ['is_premium' => (bool) $active]
        );

        if ($active && isset($active->current_period_end)) {
            $stripeAccount->stripe_subscription_id = $active->id;
            $stripeAccount->current_period_end =
                Carbon::createFromTimestamp($active->current_period_end);
            $stripeAccount->save();
        }

        return back()->with('status', 'Billing refreshed.');
    }
}
