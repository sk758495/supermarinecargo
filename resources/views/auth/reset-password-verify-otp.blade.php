<form method="POST" action="{{ route('password.otp.verify') }}">
    @csrf

    <input type="hidden" name="email" value="{{ session('password_reset_email') }}">

    <div>
        <x-input-label for="otp" :value="__('Enter OTP')" />
        <x-text-input id="otp" class="block mt-1 w-full" type="text" name="otp" required />
        <x-input-error :messages="$errors->get('otp')" class="mt-2" />
    </div>

    <div class="mt-4">
        <x-primary-button>
            {{ __('Verify OTP') }}
        </x-primary-button>
    </div>
</form>

@include('toastr')