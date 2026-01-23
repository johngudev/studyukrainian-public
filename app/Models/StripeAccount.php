<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StripeAccount extends Model
{
    protected $fillable = [
        'user_id',
        'stripe_customer_id',
        'stripe_subscription_id',
        'current_period_end',
    ];
}
