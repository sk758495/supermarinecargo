<div class="container">
    <h2>Verify Your Email</h2>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="container">
        <h2>OTP Verification</h2>
        <form method="POST" action="{{ route('vendor.send-otp.verify', ['id' => $vendor->id, 'token' => $vendor->verification_token]) }}">
            @csrf
            <input type="hidden" name="vendor_id" value="{{ $vendor->id }}">
            <input type="hidden" name="token" value="{{ $vendor->verification_token }}">
            
            <div class="form-group">
                <label for="otp">Enter OTP</label>
                <input type="text" name="otp" class="form-control" id="otp" required>
            </div>
            <button type="submit" class="btn btn-primary">Verify OTP</button>
        </form>
        
        <form method="POST" action="{{ route('otp.resend') }}">
            @csrf
            <input type="hidden" name="vendor_id" value="{{ $vendor->id }}">
            <button type="submit" class="btn btn-secondary">Resend OTP</button>
        </form>
    </div>
</div>

@include('toastr')
    