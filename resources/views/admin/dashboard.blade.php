<div>
    <h1>Welcome Admin {{ auth()->guard('admin')->user()->name }}</h1>
</div>
<form action="{{ route('admin.logout') }}" method="POST">
    @csrf
    <button type="submit" class="btn btn-danger">Logout</button>
</form>
@include('toastr')