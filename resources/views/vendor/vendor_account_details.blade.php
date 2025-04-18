<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
            margin: 0;
        }
        .sidebar {
            /*background-color: #1aa7e3;*/
            background-color:#0049a7;
            color: white;
            min-height: 100vh;
            padding-top: 20px;
            transition: all 0.3s ease;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            width: 250px;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            padding: 12px;
            font-size: 1.1rem;
            border-top-right-radius: 50px;
            border-bottom-right-radius: 50px;
            margin-bottom: 8px;
        }
        .sidebar a:hover {
            background-color: #194c8f;
        }
        .sidebar a i {
            margin-right: 15px;
            font-size: 1.3rem;
        }
        .sidebar .profile-img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 15px;
        }
        .sidebar .sidebar-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .dashboard-header {
            background-color: #0049a7;
            color: white;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 999;
            min-height: 60px;
        }
        .dashboard-header h2 {
            font-size: 1.5rem;
            margin: 0;
            padding-left: 50px;
        }
        .profile-container {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-right: 20px;
            min-width: fit-content;
        }
        .card-body{
            height: 300px;
        }
        .profile-container .profile-img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }
        .profile-container h5 {
            margin: 0;
            color: white;
            font-size: 1rem;
        }
        .dashboard-header input {
            width: 50%;
            max-width: 300px;
            padding: 10px;
            border-radius: 5px;
            border: none;
        }
        .card-header {
            font-weight: bold;
            font-size: 1.2rem;
        }
        .card-body h3 {
            font-size: 2rem;
            margin-bottom: 10px;
        }
        .badge {
            font-size: 1rem;
            margin-right: 5px;
        }
        .sidebar-toggle {
            display: none;
            position: absolute;
            top: 4px;
            left: 20px;
            background-color: transparent;
            color: white;
            padding: 10px;
            border: none;
            font-size: 1.2rem;
            z-index: 1001;
        }
        .close-sidebar-btn {
            display: none;
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #0049a7;
            color: white;
            border: none;
            font-size: 1.8rem;
            padding: 10px;
        }
        .main-content {
            margin-left: 250px;
            transition: margin-left 0.3s ease;
        }

        .bookings-container {
            
            margin: 30px auto;
            background: #fff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease;
        }

        .bookings-container:hover {
            transform: translateY(-2px);
        }

        .bookings-container h3 {
            color: #0049a7;
            text-transform: uppercase;
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #f0f0f0;
        }

        .bookings-container table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            margin-top: 15px;
        }

        .bookings-container th {
            background: #f8f9fa;
            font-weight: 600;
            color: #495057;
            padding: 15px;
            text-align: left;
            border-bottom: 2px solid #e9ecef;
        }

        .bookings-container td {
            padding: 15px;
            border-bottom: 1px solid #e9ecef;
            color: #495057;
        }

        .bookings-container tr:hover {
            background-color: #f8f9fa;
        }

        .bookings-container .status-dropdown {
            padding: 8px 12px;
            font-size: 14px;
            border: 1px solid #e9ecef;
            border-radius: 6px;
            background-color: white;
            cursor: pointer;
            transition: all 0.3s ease;
            min-width: 120px;
        }

        .bookings-container .status-dropdown:hover {
            border-color: #0049a7;
        }

        .bookings-container .status-dropdown:focus {
            outline: none;
            border-color: #0049a7;
            box-shadow: 0 0 0 2px rgba(0, 73, 167, 0.1);
        }

        .bookings-container a {
            color: #0049a7;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .bookings-container a:hover {
            color: #003366;
            text-decoration: underline;
        }


        .header-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin: 20px 0;
        }

        /* Card Styles */
        .card {
            display: flex;
            align-items: stretch;
            background: #ffffff;
            padding: 0;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
        }

        /* Icon Container */
        .icon-container {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 15px;
        }

        /* Icon Styles */
        .icon {
            width: 45px;
            min-width: 45px;
            height: 45px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            color: white;
            transition: transform 0.3s ease;
            border-radius: 8px;
        }

        .card:hover .icon {
            transform: scale(1.1);
        }

        /* Info Container */
        .info {
            padding: 0  20px;
            width: 100%;
        }

        /* Text Styling */
        .info h6 {
            font-size: 16px;
            color: #333;
            font-weight: 600;
            align-items: center;
            text-align: center;
        }

        .info p {
            font-size: 34px;
            color: #0049a7;
            font-weight: 700;
        }

        /* Background Colors */
        .bg-blue { background-color: #2196f3; }  
        .bg-green { background-color: #4caf50; }
        .bg-orange { background-color: #ff9800; }
        .bg-yellow { background-color: #ffc107; }

        @media (max-width: 768px) {
            .sidebar {
                left: -250px;
            }
            .sidebar.active {
                left: 0;
            }
            .main-content {
                margin-left: 0;
            }
            .dashboard-header {
                padding: 10px 15px;
                flex-direction: row;
                min-height: 50px;
            }
            .dashboard-header h2 {
                font-size: 1.2rem;
                padding-left: 40px;
            }
            .profile-container {
                margin-right: 10px;
            }
            .profile-container .profile-img {
                width: 30px;
                height: 30px;
            }
            .profile-container h5 {
                display: none;
            }
            .sidebar-toggle {
                display: block;
                position: fixed;
            }
            .close-sidebar-btn {
                display: block;
            }
            .header-container {
                grid-template-columns: 1fr;
                padding: 10px;
            }
            
            .card {
                padding: 15px;
            }
            
            .icon {
                width: 40px;
                height: 40px;
                font-size: 20px;
            }
            
            .info p {
                font-size: 20px;
            }
        }

        /* Small Mobile Styles (up to 480px) */
        @media (max-width: 480px) {
            .dashboard-header {
                flex-direction: row;
                align-items: center;
            }
            .profile-container {
                margin-right: 10px;
            }
        }

        /* Custom size for badges */
        .custom-badge {
            font-size: 0.6rem; /* Adjust font size */
            margin: 0 0 3px 3px ;
        }

        /* You can also adjust the size for specific breakpoints if needed */
        @media (max-width: 768px) {
            .custom-badge {
                font-size: 0.8rem; /* Smaller badge size on smaller screens */
                padding: 0.3rem 0.6rem;
            }
        }

        @media (max-width: 576px) {
            .custom-badge {
                font-size: 0.7rem; /* Even smaller badge size on very small screens */
                padding: 0.3rem 0.5rem;
            }
        }

    </style>
</head>
<body>

    <div class="container-fluid">
        <div class="row">
              {{-- side-navbar --}}
              @include('vendor.side_navbar')  

              <!-- Main content -->
              <main class="col-md-10 main-content">
                  {{-- dashboard-header --}}
                  @include('vendor.top_navbar')
                
                <div class="container mt-4 mb-5">
                    <div class="accordion" id="accountAccordion">
                
                        <!-- User Information -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingUserInfo">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseUserInfo" aria-expanded="true" aria-controls="collapseUserInfo">
                                    👤 User Information
                                </button>
                            </h2>
                            <div id="collapseUserInfo" class="accordion-collapse collapse show" aria-labelledby="headingUserInfo" data-bs-parent="#accountAccordion">
                                <div class="accordion-body">
                                    <form action="{{ route('vendor.account.update') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label class="form-label">Full Name</label>
                                                <input type="text" class="form-control" name="name" value="{{ old('name', $vendor->name) }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Title</label>
                                                <input type="text" class="form-control" name="title" value="{{ old('title', $profile->title ?? '') }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Email</label>
                                                <input type="email" class="form-control" name="email" value="{{ old('email', $vendor->email) }}" disabled>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Phone</label>
                                                <input type="tel" class="form-control" name="phone" value="{{ old('phone', $profile->phone ?? '') }}">
                                            </div>

                                            <div class="image-upload-section">
                                                <div>
                                                    <label>Upload Profile Photo</label>
                                                    <input type="file" class="form-control" name="profile_image" accept="image/*" onchange="previewLogo(event)">
                                                </div>
                                                <div id="logoPreview">
                                                    @if ($vendor->profile && $vendor->profile->profile_image)
                                                    <img src="{{ asset($vendor->profile->profile_image) }}" alt="Profile Image" width="100">
                                                @endif
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <style>
                            .image-upload-section{
                                display: flex;
                                justify-content: space-between
                            }

                            .image-upload-section img{
                                width: 100px;
                                margin-right: 10px;
                                margin-bottom: 10px;
                            }
                        </style>
                        <script>
                            function previewLogo(event) {
                              const file = event.target.files[0]; // Get the selected file
                              const previewContainer = document.getElementById('logoPreview');
                              previewContainer.innerHTML = ''; // Clear any previous preview
                        
                              if (file) {
                                const reader = new FileReader();
                        
                                reader.onload = function(e) {
                                  const img = document.createElement('img'); // Create an <img> element
                                  img.src = e.target.result; // Set the src to the file data
                                  img.classList.add('logo'); // Add a class for styling
                                  previewContainer.appendChild(img); // Add the logo to the preview container
                                };
                        
                                reader.readAsDataURL(file); // Read the file as a data URL (base64 encoded)
                              }
                            }
                          </script>

                        <!-- Change Password -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingPassword">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePassword" aria-expanded="false" aria-controls="collapsePassword">
                                    🔐 Change Password
                                </button>
                            </h2>
                            <div id="collapsePassword" class="accordion-collapse collapse" aria-labelledby="headingPassword" data-bs-parent="#accountAccordion">
                                <div class="accordion-body">
                                    <form action="{{ route('vendor.account.update_password') }}" method="POST">
                                        @csrf
                                        <div class="row g-3">
                                            <div class="col-md-4">
                                                <label for="oldPass" class="form-label">Old Password</label>
                                                <input type="password" name="old_password" class="form-control" id="oldPass">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="newPass" class="form-label">New Password</label>
                                                <input type="password" name="new_password" class="form-control" id="newPass">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="rePass" class="form-label">Re-enter New Password</label>
                                                <input type="password" name="new_password_confirmation" class="form-control" id="rePass">
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <button type="submit" class="btn btn-warning">Change Password</button>
                                        </div>
                                    </form>                                    
                                </div>
                            </div>
                        </div>
                
                        <!-- Head Ops Email -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOps">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOps" aria-expanded="false" aria-controls="collapseOps">
                                    📧 Head Ops Email
                                </button>
                            </h2>
                            <div id="collapseOps" class="accordion-collapse collapse" aria-labelledby="headingOps" data-bs-parent="#accountAccordion">
                                <div class="accordion-body">
                                    <p><strong>Email:</strong> headofops@cleanship.com</p>
                                </div>
                            </div>
                        </div>
                
                        <!-- Preferred Currency -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingCurrency">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCurrency" aria-expanded="false" aria-controls="collapseCurrency">
                                    💱 Preferred Currency
                                </button>
                            </h2>
                            <div id="collapseCurrency" class="accordion-collapse collapse" aria-labelledby="headingCurrency" data-bs-parent="#accountAccordion">
                                <div class="accordion-body">
                                    <form action="{{ route('vendor.account.update_currency') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="form_type" value="currency">
                                    
                                        <select class="form-select w-50" name="currency">
                                            <option value="">Choose Currency</option>
                                            <option value="USD" {{ old('currency', $profile->currency ?? '') == 'USD' ? 'selected' : '' }}>USD - US Dollar</option>
                                            <option value="AED" {{ old('currency', $profile->currency ?? '') == 'AED' ? 'selected' : '' }}>AED - Dirham</option>
                                            <option value="EUR" {{ old('currency', $profile->currency ?? '') == 'EUR' ? 'selected' : '' }}>EUR - Euro</option>
                                            <option value="INR" {{ old('currency', $profile->currency ?? '') == 'INR' ? 'selected' : '' }}>INR - Indian Rupee</option>
                                        </select>
                                    
                                        <button type="submit" class="btn btn-primary mt-2">Save Currency</button>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                
                        <!-- Shore Cleaning Gang Service Ports -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingPorts">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePorts" aria-expanded="false" aria-controls="collapsePorts">
                                    🛳️ Clean Ship Marin Services FZE Ports – Shore Cleaning Gang
                                </button>
                            </h2>
                            <div id="collapsePorts" class="accordion-collapse collapse" aria-labelledby="headingPorts" data-bs-parent="#accountAccordion">
                                <div class="accordion-body">
                                    <form action="{{ route('vendor.port.update') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="form_type" value="ports">
                                    
                                        <div class="form-check">
                                            @php
                                                $savedPorts = is_array($profile->ports) ? $profile->ports : json_decode($profile->ports, true);
                                            @endphp

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="ports[]" value="Jebel Ali Port" id="port1"
                                                    {{ in_array('Jebel Ali Port', $savedPorts ?? []) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="port1">Jebel Ali Port</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="ports[]" value="Sunny Port" id="port2"
                                                    {{ in_array('Sunny Port', $savedPorts ?? []) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="port2">Sunny Port</label>
                                            </div>
                                            </div>
                                        <!-- Repeat for others -->                                    
                                        <button type="submit" class="btn btn-success mt-2">Save Ports</button>
                                    </form>                                  
                                    
                                </div>
                            </div>
                        </div>
                
                    </div> <!-- End accordion -->
                </div>
            </main>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
