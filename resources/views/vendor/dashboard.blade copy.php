<h2>Welcome, {{ auth('vendor')->user()->name }}</h2>

<form method="POST" action="{{ route('vendor.logout') }}">
    @csrf
    <button type="submit">Sign Out</button>
</form>
