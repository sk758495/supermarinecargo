<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register</title>
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
    .login-form input[type="password"],
    .login-form input[type="text"] {
      height: 48px;
    }

    .form-check-label {
      margin-left: 5px;
    }

 
    .social-buttons button {
      flex: 1;
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
  
<div class="login-wrapper">
  <div class="image-side">
    <div class="circle-icon"><img src="img/wheel 2.0.png" alt=""></div>
    <img src="https://cdn.pixabay.com/photo/2022/06/08/00/55/strawberries-7249448_640.jpg" alt="3D Character" />
  </div>

  <div class="login-form">
    <h2>Register Form</h2>
    <p><strong>Register your account Here...</strong></p>
    <p>Thank you for returning to the Nelel web application. Let's access our best recommendations for you.</p>
    <form method="POST" action="{{ route('register') }}">
      @csrf
      <!-- Name -->
      <div class="mb-3">
        <x-input-label for="name" :value="__('Name')" />
        <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Enter Your Name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
      </div>

      <!-- Email Address -->
      <div class="mb-3">
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="wrapcode.info@gmail.com" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
      </div>

      <!-- Password -->
      <div class="mb-3">
        <x-input-label for="password" :value="__('Password')" />
        <x-text-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" placeholder="••••••••" />
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
      </div>

      <!-- Confirm Password -->
      <div class="mb-3">
        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
        <x-text-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="••••••••" />
        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
      </div>

      <div class="d-flex justify-content-between align-items-center mb-3">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="rememberMe" name="remember">
          <label class="form-check-label" for="rememberMe">Remember Me</label>
        </div>
      </div>

      <x-primary-button class="btn btn-primary w-100">Register</x-primary-button>

      <div class="text-center my-3 text-muted">OR</div>

      <div class="social-buttons">
        <a href="{{ route('auth.google') }}" class="btn btn-outline-primary form-control"><i class="bi bi-google"></i> Register with Google</a>
      </div>

      <div class="mt-4 text-center">
        Already registered? <a href="{{ route('login') }}" class="fw-bold text-decoration-none">Login</a>
      </div>
    </form>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Optional: Bootstrap icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
</body>
</html>
