<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
            margin: 0;
        }
        .sidebar {
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
            background-color: #08acf3;
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
        .dashboard-header input {
            width: 50%;
            max-width: 300px;
            padding: 10px;
            border-radius: 5px;
            border: none;
        }
        .profile-container {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-right: 20px;
            min-width: fit-content;
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
        .main-content {
            margin-left: 250px;
            transition: margin-left 0.3s ease;
        }
        .bookings-container {
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease;
            overflow-x: auto;
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
            min-width: 600px;
        }
        .bookings-container th {
            background: #f8f9fa;
            font-weight: 600;
            color: #495057;
            padding: 12px 15px;
            text-align: left;
            border-bottom: 2px solid #e9ecef;
            white-space: nowrap;
        }
        .bookings-container td {
            padding: 12px 15px;
            border-bottom: 1px solid #e9ecef;
            color: #495057;
            white-space: nowrap;
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
        .sidebar-toggle {
            display: none;
            position: fixed;
            top: 4px;
            left: 20px;
            background-color: transparent;
            color: white;
            padding: 10px;
            border: none;
            font-size: 1.2rem;
            z-index: 1001;
            border-radius: 5px;
        }

        /* Tablet Styles (768px - 1024px) */
        @media (max-width: 1024px) {
            .sidebar {
                width: 200px;
            }
            .main-content {
                margin-left: 200px;
            }
            .dashboard-header h2 {
                font-size: 1.5rem;
            }
            .bookings-container {
                padding: 15px;
            }
            .bookings-container th,
            .bookings-container td {
                padding: 10px 12px;
                font-size: 0.9rem;
            }
        }

        /* Mobile Styles (up to 767px) */
        @media (max-width: 767px) {
            .sidebar {
                left: -250px;
                width: 250px;
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
            .sidebar-toggle{
                display: block;
            }
            .bookings-container {
                margin: 15px auto;
                padding: 10px;
            }
            .bookings-container h3 {
                font-size: 1rem;
                margin-bottom: 15px;
            }
            .bookings-container table {
                min-width: 500px;
            }
            .bookings-container th,
            .bookings-container td {
                padding: 8px 10px;
                font-size: 0.85rem;
            }
            .status-dropdown {
                padding: 6px 8px;
                font-size: 0.85rem;
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
            .bookings-container {
                margin: 10px auto;
            }
            .bookings-container table {
                min-width: 400px;
            }
        }
        
    </style>
</head>
<body>
    <div class="container-fluid">
        @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

        <div class="row">
             {{-- side-navbar --}}
             @include('vendor.side_navbar')  

            <!-- Main content -->
            <main class="col-md-10 main-content">
                {{-- dashboard-header --}}
                @include('vendor.top_navbar')

                <!-- Upcoming bookings -->
                <div class="bookings-container">
                    <h3>Quotation Details</h3>
                    <table>
                        <thead>
                            <tr>
                                <th>Customer</th>
                                <th>Service</th>
                                <th>Date</th>
                                <th>Vessel Name</th>
                                <th>Status</th>
                                <th>View</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cancelled_quote as $quote)
                            <tr>
                                <td>
                                    <p>{{ $quote->form_filler_name }}</p>
                                    <a href="{{ $quote->email }}">{{ $quote->email }}</a>
                                </td>
                                <td>{{ $quote->request_type }}</td>
                                <td>{{ $quote->created_at->format('d M Y - h:i A') }}</td>
                                <td>{{ $quote->vessel_name }}</td> 
                                <td>
                                    <span class="badge bg-danger text-capitalize">Cancelled</span>
                                </td>
                                
                                <td>
                                    <a href="{{ route('vendor.view.quote', $quote->id) }}" class="text-decoration-none" target="_blank">View</a>
                                </td>                                
                            </tr>
                            @endforeach
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>

    <!-- Inside your existing HTML file (add this before </body>) -->

    <!-- Toggle Sidebar Button -->
    <button class="sidebar-toggle" onclick="toggleSidebar()" aria-label="Open Sidebar">☰</button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
