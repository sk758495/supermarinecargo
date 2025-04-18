
@include('toastr')

@section('content')
    <form method="POST" action="{{ route('auth.otp.verify') }}">
        @csrf
        <div>
            <label for="otp">Enter OTP</label>
            <input type="text" id="otp" name="otp" required>
        </div>

        @error('otp')
            <div>{{ $message }}</div>
        @enderror

        <button type="submit">Verify OTP</button>
    </form>

    <!-- Resend OTP Button -->
    <form method="POST" action="{{ route('auth.otp.resend') }}">
        @csrf
        <button type="submit">Resend OTP</button>
    </form>


     <!-- Authentication -->
     <form method="POST" action="{{ route('logout') }}">
        @csrf

        <x-responsive-nav-link :href="route('logout')"
                onclick="event.preventDefault();
                            this.closest('form').submit();">
            {{ __('Log Out') }}
        </x-responsive-nav-link>
    </form>
