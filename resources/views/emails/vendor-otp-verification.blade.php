<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
</head>
<body>
    <h1>Your OTP Verification Code</h1>
    {{-- <p>Hello {{ $vendor->name }},</p> --}}
    <p>To verify your email address, please use the following OTP code:</p>
    <h2>{{ $otp }}</h2>
    <p>The OTP will expire in 10 minutes.</p>
    <p>If you did not request this, please ignore this email.</p>
</body>
</html>
