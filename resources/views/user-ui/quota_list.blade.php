<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <!-- ===== EXTERNAL CSS LIBRARIES ===== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-DQvkBjpPgn7RC31MCQoOeC9TI2kdqa4+BSgNMNj8v77fdC77Kj5zpWFTJaaAoMbC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('asset/css/quota.css') }}">
    <!-- ===== CUSTOM CSS STYLES ===== -->
   
</head>

<body>
    <!-- ===== NAVIGATION BAR ===== -->
    @include('user-ui.navbar')

    <!-- ===== VENDOR LIST SECTION ===== -->
    <div class="container mt-5 pt-5">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold mb-3">Our Trusted Vendors</h2>
            <p class="text-muted">
                Connect with our network of professional service providers
            </p>

            <!-- Search and Filter Section -->
            <!-- Search and Filter Section -->
            @if ($vendors->isEmpty())
    <div class="text-center text-muted py-5">
        <h5>No vendors found matching your criteria.</h5>
    </div>
@endif
            <div class="row justify-content-center mb-4">
                <div class="col-md-8">
                    <form action="{{ route('quota.dashboard') }}" method="GET">
                        <div class="search-filter-container">
                            <div class="input-group search-box">
                                <span class="input-group-text bg-white border-end-0">
                                    <i class="bi bi-search text-muted"></i>
                                </span>
                                <input type="text" name="search" class="form-control border-start-0" value="{{ request()->search }}" placeholder="Search vendors by name, port, or service..." />
                                <div class="dropdown">
                                    <button class="btn btn-outline-secondary dropdown-toggle filter-btn" type="button" id="filterDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-funnel me-2"></i>Filter
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end filter-dropdown p-3" aria-labelledby="filterDropdown">
                                        <div class="filter-content">
                                            <h6 class="filter-title mb-3">Filter Options</h6>

                                            <div class="filter-section mb-3">
                                                <label class="filter-label mb-2">Service Type</label>
                                                <div class="filter-options">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="service_type" value="Port Services" {{ request()->service_type == 'Port Services' ? 'checked' : '' }} />
                                                        <label class="form-check-label">Port Services</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="service_type" value="Maintenance" {{ request()->service_type == 'Maintenance' ? 'checked' : '' }} />
                                                        <label class="form-check-label">Maintenance</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="service_type" value="Cleaning" {{ request()->service_type == 'Cleaning' ? 'checked' : '' }} />
                                                        <label class="form-check-label">Cleaning</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="filter-section mb-3">
                                                <label class="filter-label mb-2">Port Location</label>
                                                <select class="form-select" name="port_location">
                                                    <option value="">All Ports</option>
                                                    <option value="Port 1" {{ request()->port_location == 'Port 1' ? 'selected' : '' }}>Port 1</option>
                                                    <option value="Port 2" {{ request()->port_location == 'Port 2' ? 'selected' : '' }}>Port 2</option>
                                                    <option value="Port 3" {{ request()->port_location == 'Port 3' ? 'selected' : '' }}>Port 3</option>
                                                </select>
                                            </div>

                                            <div class="filter-section mb-3">
                                                <label class="filter-label mb-2">Sort By</label>
                                                <select class="form-select" name="sort_by">
                                                    <option value="most_recent" {{ request()->sort_by == 'most_recent' ? 'selected' : '' }}>Most Recent</option>
                                                    <option value="name_asc" {{ request()->sort_by == 'name_asc' ? 'selected' : '' }}>Name (A-Z)</option>
                                                    <option value="name_desc" {{ request()->sort_by == 'name_desc' ? 'selected' : '' }}>Name (Z-A)</option>
                                                </select>
                                            </div>

                                            <div class="filter-actions d-flex justify-content-between mt-3">
                                                <button type="submit" class="btn btn-primary">Apply Filters</button>
                                                <a href="{{ route('quota.dashboard') }}" class="btn btn-outline-secondary">Reset</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <style>
            #vendor-name-card {
            border-radius: 8px;
            background-color: white;
            position: relative;
            overflow: hidden;
        }

        #vendor-name-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 55%;
            height: 100%;
            background: linear-gradient(to left, rgba(184, 206, 234, 0.8), rgba(0,73,167,0.4));
            clip-path: polygon(0 0, 90% 0, 80% 100%, 0% 100%);
            z-index: 0;
        }

        #vendor-name-card > .col-md-2,
        #vendor-name-card > .col-md-4 {
            position: relative;
            z-index: 1;
        }

        @media (max-width: 767px) {
            #vendor-name-card {
                border-radius: 8px;
                background-color: #e9ecef;
                position: relative;
                overflow: hidden;
            }

            #vendor-name-card::before {
                content: none; 
            }            
        }  
        </style>

        <div class="row">
            @foreach ($vendors as $vendor)
                <div class="col-12 mb-4">
                    <div class="card vendor-card shadow-sm">
                        <div class="card-body p-4" id="vendor-name-card">
                            <div class="row align-items-center p-2" >
                                <div class="col-md-2 text-center">
                                    <div class="vendor-avatar">
                                        <img src="{{ asset('images/pro.avif') }}" alt="Vendor Profile" class="rounded-circle" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <h4 class="vendor-name mb-2">{{ $vendor->name }}</h4>
                                    <div class="vendor-info">
                                        <p class="mb-2">
                                            <i class="bi bi-geo-alt-fill me-2"></i>
                                            {{ $vendor->port }}
                                        </p>
                                        <p class="mb-2">
                                            <i class="bi bi-envelope-fill me-2"></i>
                                            {{ $vendor->email }}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <h5 class="section-title mb-3">Services Offered</h5>
                                    <div class="d-flex flex-wrap gap-2">
                                        @foreach (explode(',', $vendor->services) as $service)
                                            <span class="service-badge">
                                                <i class="bi bi-check-circle-fill me-2"></i>
                                                <span>{{ trim($service) }}</span>
                                            </span>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-md-2 text-center">
                                    <button class="btn btn-primary btn-lg quote-btn" style="color: white;">
                                        <i class="bi bi-chat-dots me-2"></i><a href="{{ route('quota.quota-form-msg', ['vendor_id' => $vendor->id]) }}" class="text-decoration-none" style="color: white;">View Messages</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- pagination here start --}}
            @if ($vendors->hasPages())
                <div class="d-flex justify-content-center mt-4">
                    <nav aria-label="Page navigation">
                        <ul class="pagination pagination">
                            {{-- Previous Page Link --}}
                            @if ($vendors->onFirstPage())
                                <li class="page-item disabled">
                                    <span class="page-link">&laquo;</span>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $vendors->previousPageUrl() }}" rel="prev">&laquo;</a>
                                </li>
                            @endif

                            {{-- Pagination Elements --}}
                            @foreach ($vendors->getUrlRange(1, $vendors->lastPage()) as $page => $url)
                                @if ($page == $vendors->currentPage())
                                    <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                                @else
                                    <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                                @endif
                            @endforeach

                            {{-- Next Page Link --}}
                            @if ($vendors->hasMorePages())
                                <li class="page-item">
                                    <a class="page-link" href="{{ $vendors->nextPageUrl() }}" rel="next">&raquo;</a>
                                </li>
                            @else
                                <li class="page-item disabled">
                                    <span class="page-link">&raquo;</span>
                                </li>
                            @endif
                        </ul>
                    </nav>
                </div>
            @endif
<style>
    .pagination .page-link {
        border-radius: 0.5rem;
        margin: 0 0.25rem;
        transition: all 0.3s ease;
    }

    .pagination .page-item.active .page-link {
        background-color: #0d6efd;
        border-color: #0d6efd;
        color: white;
        box-shadow: 0 0 10px rgba(13, 110, 253, 0.3);
    }

    .pagination .page-link:hover {
        background-color: #e9ecef;
    }
</style>
{{-- pagination here end --}}
            
        </div>
        
    </div>

    <!-- ===== FOOTER SECTION ===== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    @include('user-ui.footer')

    <!-- ===== EXTERNAL JAVASCRIPT LIBRARIES ===== -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YUe2LzesAfftltw+PEaao2tjU/QATaW/rOitAq67e0CT0Zi2VVRL0oC4+gAaeBKu"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- ===== AOS INITIALIZATION ===== -->
    <script>
        AOS.init({
            duration: 1000,
            once: false,
            mirror: true,
        });
    </script>
</body>

</html>