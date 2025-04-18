
    <form method="POST" action="{{ route('password.otp.send') }}">
        @csrf
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-primary-button>
                {{ __('Send OTP') }}
            </x-primary-button>
        </div>
    </form>

    @include('toastr')