<!DOCTYPE html>
<html>
<head>
    <title>OTP Verification</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2>Verify OTP</h2>
    <form method="POST" action="{{ route('admin.otp.verify') }}">
        @csrf

        @if($errors->any())
            <div class="alert alert-danger">{{ $errors->first() }}</div>
        @endif

        <input type="hidden" name="email" value="{{ old('email', $email) }}">

        <div class="mb-3">
            <label>Enter OTP sent to {{ $email }}</label>
            <input type="text" name="otp" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Verify OTP</button>
    </form>
    @include('toastr')
</div>
</body>
</html>
