<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Vendor Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
    body {
      background-color: #e9ecef;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .login-wrapper {
      max-width: 960px;
      margin: 60px auto;
      background-color: white;
      display: flex;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    .login-form {
      flex: 1;
      padding: 40px;
    }

    .login-form h2 {
      font-weight: 700;
    }

    .login-form p {
      color: #6c757d;
      margin-top: 8px;
      font-size: 15px;
    }

    .login-form input[type="email"],
    .login-form input[type="password"] {
      height: 48px;
    }

    .form-check-label {
      margin-left: 5px;
    }

    .image-side {
      background-color: #2b47f3;
      flex: 1;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
    }

    .image-side img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .circle-icon {
      position: absolute;
      left: -540px;
      top: 5%;
      transform: translateY(-50%);
      color: #2b47f3;
      width: 50px;
      height: 50px;
      border-radius: 50%;
      font-weight: bold;
      font-size: 24px;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body>
  
  @include('toastr')
    
  @include('toastr')
  
<div class="login-wrapper">
  <!-- Login Form Section -->
  <div class="login-form">
    <h2>Vendor Login</h2>
    <p><strong>Login to your account</strong></p>
    <p>Thank you for coming back to the Nelel web applications, let's access the best recommendations for you.</p>

    <!-- Vendor Login Form -->
    <form method="POST" action="{{ route('vendor.login') }}">
      @csrf
      <div class="mb-3">
        <input type="email" name="email" class="form-control" placeholder="Email" required>
      </div>
      <div class="mb-3">
        <input type="password" name="password" class="form-control" placeholder="Password" required>
      </div>

      <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="rememberMe">
          <label class="form-check-label" for="rememberMe">Remember Me</label>
        </div>
        <a href="#" class="text-decoration-none">Forgot password?</a>
      </div>

      <button type="submit" class="btn btn-primary w-100">Login</button>

      <div class="text-center my-3 text-muted">OR</div>

      <div class="d-flex justify-content-center gap-3">
        <button type="button" class="btn btn-outline-secondary"><i class="bi bi-facebook"></i></button>
        <button type="button" class="btn btn-outline-secondary"><i class="bi bi-twitter"></i></button>
        <button type="button" class="btn btn-outline-secondary"><i class="bi bi-github"></i></button>
      </div>

      <div class="mt-4 text-center">
        Don't have an account? <a href="{{ route('vendor.register') }}" class="fw-bold text-decoration-none">Create an Account</a>
      </div>
    </form>
  </div>

  <!-- Image Side Section -->
  <div class="image-side">
    <img src="{{ asset('asset/images/login.jpg') }}" alt="Vendor Login Image" />
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Optional: Bootstrap icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
</body>
</html>
