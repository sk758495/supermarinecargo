<!DOCTYPE html>
<html>
<head>
    <title>Verify Email</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h3>Email Verification Required</h3>
        <p>We've sent a verification code (OTP) to your email address. Please check your inbox.</p>

        <form method="POST" action="{{ route('admin.verification.resend') }}">
            @csrf
            <button type="submit" class="btn btn-warning">Resend OTP</button>
        </form>
    </div>
    @include('toastr')
</body>
</html>
