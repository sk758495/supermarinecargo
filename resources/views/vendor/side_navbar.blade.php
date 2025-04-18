<nav class="col-md-2 sidebar p-3">
    <div class="sidebar-header">
        <img src="{{ asset('asset/images/cleanshiplogo.jpg') }}" class="profile-img" alt="Profile">
    </div>
    
    <!-- Dashboard Link -->
    <a href="{{ route('vendor.dashboard') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>

    <!-- Quote Request Section -->
    <a class="nav-item" data-bs-toggle="collapse" href="#contractsOptions" role="button" aria-expanded="false" aria-controls="contractsOptions">
        <i class="fas fa-file-contract"></i> Quote
    </a>
    <div class="collapse" id="contractsOptions">
        <ul class="nav flex-column ms-3">
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('vendor.vendor.receive_quote') }}">
                    <i class="fas fa-list"></i> Quote Request
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('vendor.vendor.vendor.pending_quote') }}">
                    <i class="fas fa-clock"></i> Pending Quote 
                    <span class="badge bg-warning rounded-pill custom-badge" style="font-size: 6px; color: red;">New</span> <!-- Custom Badge -->
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('vendor.vendor.accepted_quote') }}">
                    <i class="fas fa-check-circle"></i> Accepted Quote
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('vendor.vendor.cancelled_quote') }}">
                    <i class="fas fa-times-circle"></i> Canceled Quote
                </a>
            </li>
        </ul>
    </div>
    <!-- Chat Link -->
    {{-- <a href="{{ route('chat.vendor') }}l"><i class="fas fa-comments"></i> Chat</a> --}}

    <a href="{{ route('vendor.account_page') }}"><i class="fas fa-user"></i> Account</a>
    
    <form method="POST" action="{{ route('vendor.logout') }}" style="display: inline;" class="sidebar-logout-form">
        @csrf
        <button type="submit" style="background: none; border: none; color: inherit; padding: 0; font: inherit; cursor: pointer;">
            <i class="fas fa-sign-out-alt"></i> Sign Out
        </button>
    </form>
{{--     
    <a href="login.html"><i class="fas fa-sign-in-alt"></i> Sign In</a> 
    <a href="register.html"><i class="fas fa-user-plus"></i> Register</a>
     --}}

</nav>