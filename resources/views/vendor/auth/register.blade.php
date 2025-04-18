<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vendor Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
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

        .social-buttons {
            display: flex;
            justify-content: space-between;
            gap: 10px;
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
            /* Ensures full coverage without stretching */
        }

        .circle-icon img {
            width: 100%;
            height: 100%;
            animation: spin 20s linear infinite;
            /* adjust speed as needed */
        }

        @keyframes spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        .circle-icon {
            overflow: hidden;
        }


        .circle-icon {
            position: absolute;
            left: 909px;
            top: 6%;
            transform: translateY(-50%);
            color: #2b47f3;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            font-weight: bold;
            font-size: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>

  @include('toastr')
    
  
    <div class="login-wrapper">
        <!-- Image Side Section -->
        <div class="image-side">
            <div class="circle-icon"><img src="{{ asset('asset/images/wheel 2.0.png') }}" alt=""></div>
            <img src="{{ asset('asset/images/login-ship.png') }}" alt="3D Character" />
        </div>

        <!-- Register Form Section -->
        <div class="login-form">
            <h2>Vendor Register</h2>
            <p><strong>Create your account here</strong></p>
            <p>Thank you for choosing Nelel web applications, let's access the best recommendations for you.</p>

            <!-- Vendor Registration Form -->
            <form method="POST" action="{{ route('vendor.register') }}">
                @csrf
                <div class="mb-3">
                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                </div>
                <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <input type="text" name="country" class="form-control" placeholder="Country" required>
                </div>
                <div class="mb-3">
                    <input type="text" name="port" class="form-control" placeholder="Port" required>
                </div>
                <div class="mb-3">
                    <input type="text" name="services" class="form-control" placeholder="Services" required>
                </div>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="mb-3">
                    <input type="password" name="password_confirmation" class="form-control"
                        placeholder="Confirm Password" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">Register</button>

                <div class="mt-4 text-center">
                    Already have an account? <a href="{{ route('vendor.login') }}"
                        class="fw-bold text-decoration-none">Login</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Optional: Bootstrap icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
</body>

</html>
