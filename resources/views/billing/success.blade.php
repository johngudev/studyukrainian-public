<h1>Subscription active</h1>

<p>You now have premium access.</p>

<p>
    <a href="{{ route('dashboard') }}">Go to dashboard</a>
</p>

<p>
    <a href="{{ route('billing.portal') }}">Manage / cancel subscription</a>
</p>

<form method="POST" action="{{ route('billing.refresh') }}">
    @csrf
    <button type="submit">Refresh access</button>
</form>
