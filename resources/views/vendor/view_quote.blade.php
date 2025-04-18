<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('asset/css/vendor/navbar.css') }}">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
            margin: 0;
        }
        .quota{
            display: flex;
            justify-content: space-between;
            padding: 10px;
            background-color: #fff;
            border-radius: 5px;
            margin-bottom: 20px;
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
            top: 20px;
            left: 20px;
            background-color: #1aa7e3;
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
            background-color: #1aa7e3;
            color: white;
            border: none;
            font-size: 1.8rem;
            padding: 10px;
        }
        .main-content {
            margin-left: 250px;
            transition: margin-left 0.3s ease;
        }
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-250px);
            }
            .sidebar.active {
                transform: translateX(0);
            }
            .main-content {
                margin-left: 0;
            }
            .dashboard-header {
                flex-direction: column;
                align-items: flex-start;
                padding: 20px;
            }
            .dashboard-header h2 {
                font-size: 1.0rem;
                margin-top: 15px;
            }
            .dashboard-header input {
                width: 100%;
                margin-top: 10px;
            }
            .sidebar-toggle {
                display: block;
                position: fixed;
                top: 20px;
                left: 20px;
                background-color: #1aa7e3;
                color: white;
                padding: 10px;
                font-size: 1.5rem;
            }
            .close-sidebar-btn {
                display: block;
            }
        }
        .form-group label {
        font-weight: bold;
         }
        .iframe-container {
            width: 100%;
            height: 400px;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 1rem;
        }
        .form-control {
            border-radius: 5px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }
        .company-info {
            margin-top: 20px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }
        .company-info h5 {
            font-size: 1.2rem;
            font-weight: bold;
        }
        .company-info p {
            font-size: 1rem;
            margin: 5px 0;
        }
        .photo-gallery {
            margin-top: 30px;
        }
        .gallery-img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .photo-gallery .col-md-4 {
            margin-bottom: 15px;
        }
        .gallery-card {
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .gallery-card:hover {
            transform: scale(1.05);
        }
        .photo-gallery {
            margin-top: 30px;
        }
        .gallery-img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            cursor: pointer;
        }
        .photo-gallery .col-md-4 {
            margin-bottom: 15px;
        }
        .gallery-card {
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .gallery-card:hover {
            transform: scale(1.05);
        }

        /* Modal styles */
        .modal-content {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .modal-body {
            text-align: center;
        }
        .modal-body img {
            max-width: 100%;
            height: auto;
        }

        /* Modal close button */
        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            background: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
        }
        
        @media (max-width: 576px) {
        .table-responsive {
            overflow-x: auto;
        }

        .table th, .table td {
            padding: 6px; /* Reduce padding for smaller screens */
            font-size: 0.5rem; /* Slightly smaller font size */
        }
    }

        @media (max-width: 1024px) {
        /* Adjust layout for devices like laptops */
        .sidebar {
            width: 220px; /* Slightly reduce the sidebar width */
        }

        .main-content {
            margin-left: 220px; /* Ensure the content area does not overlap the sidebar */
        }

        .dashboard-header h2 {
            font-size: 1.5rem; /* Reduce font size of the header */
        }

        .quota {
            flex-direction: column; /* Stack items vertically for better readability */
            align-items: flex-start; /* Align to the left */
            margin-bottom: 15px;
        }

        .quota p {
            margin-bottom: 5px; /* Reduce space between quota items */
        }

        /* Adjusting form and table for better readability */
        .form-group label {
            font-weight: bold;
        }

        .form-control {
            font-size: 1rem; /* Adjust form control font size */
        }

        /* Photo Gallery Adjustments */
        .gallery-card {
            margin-bottom: 15px; /* Make sure cards have enough spacing */
        }

        .gallery-img {
            max-width: 100%;
            height: auto;
        }

        .gallery-card:hover {
            transform: scale(1.05);
        }

        /* Modal styling for laptop screens */
        .modal-dialog {
            max-width: 80%; /* Limit the width of the modal */
        }

        /* Sidebar toggle button for smaller screens */
        .sidebar-toggle {
            display: block;
            position: fixed;
            top: 20px;
            left: 20px;
            background-color: #1aa7e3;
            color: white;
            padding: 10px;
            font-size: 1.5rem;
        }

        .close-sidebar-btn {
            display: block;
        }
    }

    /* For screens with width under 1024px, keep adjustments for larger laptops and tablets */
    @media (max-width: 992px) {
        .sidebar {
            width: 200px; /* Slightly reduce the width for tablet-like devices */
        }

        .main-content {
            margin-left: 200px;
        }

        .dashboard-header {
            flex-direction: column;
            align-items: flex-start;
            padding: 15px;
        }

        .dashboard-header h2 {
            font-size: 1.2rem;
        }

        .main-content {
            margin-left: 0;
        }
        .table-responsive {
                overflow-x: auto;
            }

            .table th, .table td {
                padding: 6px; /* Reduce padding for smaller screens */
                font-size: 0.5rem; /* Slightly smaller font size */
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

                <div class="quota">
                <p>Copy of Request for Quote</p>
                <p>03-04-2025 03:02 GMT</p>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Ship Information</h5>
                                <form>
                                    <div class="form-group">
                                        <label for="vesselName">Vessel Name</label>
                                        <input type="text" class="form-control" id="vesselName" value="{{ $view_quote->vessel_name }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="voyageNo">Voyage Number</label>
                                        <input type="text" class="form-control" id="voyageNo" value="{{ $view_quote->voyage_number }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="imoMember">IMO Number</label>
                                        <input type="text" class="form-control" id="imoMember" value="{{ $view_quote->imo_number }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="eta">ETA</label>
                                        <input type="text" class="form-control" id="eta" value="{{ $view_quote->eta }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="agents">Agents</label>
                                        <input type="text" class="form-control" id="agents" value="{{ $view_quote->agents }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="requestType">Request Type</label>
                                        <input type="text" class="form-control" id="requestType" value="{{ $view_quote->request_type }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="cleaningDescription">Description of Service Requirement</label>
                                        <input type="text" class="form-control" id="cleaningDescription" value="{{ $view_quote->service_description }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="robCleaning">ROB Cleaning</label>
                                        <input type="text" class="form-control" id="robCleaning" value="{{ $view_quote->tob_cleaning }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="equipmentDescription">Equipment Description</label>
                                        <input type="text" class="form-control" id="equipmentDescription" value="{{ $view_quote->equipment_description }}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="lastCargo">Last 5 Cargo</label>
                                        <textarea class="form-control" id="lastCargo" readonly>{{ $view_quote->last_5_cargo }}</textarea>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- Google Maps iframe on the right -->
                        <div class="iframe-container">
                            {!! $view_quote->iframe_code !!}
                        </div>
                        <div class="company-info">
                            <h5>Details</h5>
                            @if ($view_quote->company_logo)
                                <p><img src="{{ asset('storage/' . $view_quote->company_logo) }}" width="150px" alt="Company Logo"></p>
                            @endif
                            <p><strong>{{ $view_quote->company_address }}</strong></p>
                            <p><strong>{{ $view_quote->company_name }}</strong></p><br>
                            <p><strong>{{ $view_quote->form_filler_name }}</strong></p>
                            <p><strong>{{ $view_quote->email }}</strong></p>
                            <p><strong>{{ $view_quote->mobile }}</strong></p>
                        </div>
                        <div class="photo-gallery">
                            <h5>Photographs of Holds</h5>
                            <div class="row">
                                @php
                                    $holdImages = json_decode($view_quote->hold_images, true);
                                @endphp

                                @if($holdImages)
                                    @foreach ($holdImages as $group => $images)
                                        <div class="mb-5">
                                            <h4 class="mb-3">Hold {{ $group }}</h4>
                                            <div class="d-flex flex-wrap gap-3">
                                                @foreach ($images as $imagePath)
                                                    <div style="width: 200px;" class="card gallery-card">
                                                        <div class="card gallery-card">
                                                        <img src="{{ asset('storage/' . $imagePath) }}" class="gallery-img" alt="Gallery Image 1" onclick="openModal(this)" />
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <p>No hold images available.</p>
                                @endif


                                {{-- <div class="col-md-4">
                                    <div class="card gallery-card">
                                        <img src="img/hold1.png" class="gallery-img" alt="Gallery Image 1" onclick="openModal(this)">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card gallery-card">
                                        <img src="img/hold1.png" class="gallery-img" alt="Gallery Image 2" onclick="openModal(this)">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card gallery-card">
                                        <img src="img/hold1.png" class="gallery-img" alt="Gallery Image 3" onclick="openModal(this)">
                                    </div>
                                </div>
                                <!-- Additional images -->
                                <div class="col-md-4">
                                    <div class="card gallery-card">
                                        <img src="img/hold1.png" class="gallery-img" alt="Gallery Image 4" onclick="openModal(this)">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card gallery-card">
                                        <img src="img/hold1.png" class="gallery-img" alt="Gallery Image 5" onclick="openModal(this)">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card gallery-card">
                                        <img src="img/hold1.png" class="gallery-img" alt="Gallery Image 6" onclick="openModal(this)">
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        
                        <!-- Modal to display large image -->
                        <div class="modal" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <button type="button" class="close" onclick="closeModal()">×</button>
                                    <div class="modal-body">
                                        <img src="" id="modalImage" alt="Expanded Image">
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </main>
        </div>
    </div>


    <!-- Toggle Sidebar Button -->
    <button class="sidebar-toggle" onclick="toggleSidebar()" aria-label="Open Sidebar">☰</button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function toggleSidebar() {
            document.querySelector('.sidebar').classList.toggle('active');
            document.querySelector('.main-content').classList.toggle('active');
        }
    </script>
    <script>
        // Function to open the modal and display the clicked image
        function openModal(img) {
            const modal = document.getElementById('imageModal');
            const modalImage = document.getElementById('modalImage');
            modalImage.src = img.src;  // Set the clicked image source to the modal
            modal.style.display = 'block'; // Show the modal
        }

        // Function to close the modal
        function closeModal() {
            const modal = document.getElementById('imageModal');
            modal.style.display = 'none'; // Hide the modal
        }

        // Close modal when clicking outside of the modal
        window.onclick = function(event) {
            const modal = document.getElementById('imageModal');
            if (event.target === modal) {
                closeModal();
            }
        }
    </script>
</body>
</html>
