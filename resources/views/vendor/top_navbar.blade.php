<div class="dashboard-header">
    <h2 class="ms-5">Dashboard</h2>
    <div class="profile-container">
        <img src="https://static.vecteezy.com/system/resources/previews/043/900/708/non_2x/user-profile-icon-illustration-vector.jpg" class="profile-img" alt="Profile">
        <h5>{{ auth('vendor')->user()->name }}</h5>
    </div>
</div>

@include('toastr')


