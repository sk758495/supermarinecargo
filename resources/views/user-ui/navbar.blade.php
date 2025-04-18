<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('dashboard') }}">
            <img src="{{ asset('asset\images\logbg2.png') }}" alt="Cleanship Logo" class="navbar-logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}" id="home-link">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                        <li><a class="dropdown-item" href="{{ route('pages.hold_cleaning') }}">Hold Cleaning</a></li>
                        <li><a class="dropdown-item" href="{{ route('pages.tank_cleaning') }}">Tank Cleaning</a></li>
                        <li><a class="dropdown-item" href="{{ route('pages.underwater_hull') }}">Underwater Cleaning</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pages.contact_us') }}" id="home-link">Contact Us</a>
                </li>                
            </ul>
            <div class="d-flex align-items-center gap-2">
                @if (Route::has('login'))
                    @auth('web')
                        {{-- <a href="{{ route('dashboard') }}" class="btn btn-outline-primary">Dashboard</a> --}}
                        
                        <a href="{{ route('quota.dashboard') }}" class="btn btn-primary">Get Quote</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-outline-danger">Logout</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-outline-primary">Login</a>
            
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-outline-primary">Register</a>
                        @endif
                    @endauth
                @endif
            
            </div>
            
        </div>
    </div>
</nav>

<script>
  // Function to automatically add the 'active' class to the navbar link based on the current section
  window.addEventListener("scroll", function() {
      const sections = document.querySelectorAll("section");
      const navLinks = document.querySelectorAll(".navbar-nav .nav-link");

      sections.forEach((section) => {
          const sectionTop = section.offsetTop - 100;
          const sectionBottom = section.offsetTop + section.offsetHeight - 100;
          const link = document.querySelector(`[href="#${section.id}"]`);

          if (window.scrollY >= sectionTop && window.scrollY < sectionBottom) {
              navLinks.forEach((link) => link.classList.remove("active"));
              link.classList.add("active");
          }
      });
  });

  // Make sure to highlight the correct link when page loads based on URL fragment
  document.addEventListener("DOMContentLoaded", function () {
      const id = window.location.hash.substring(1); // Get the current hash from the URL
      if (id) {
          const activeLink = document.querySelector(`a[href="#${id}"]`);
          if (activeLink) {
              activeLink.classList.add("active");
          }
      }
  });
</script>

<style>
    
/* ===== NAVBAR LOGO STYLES ===== */
.navbar-logo {
    height: 60px;
    width: auto;
    transition: transform 0.3s ease;
}

.navbar-logo:hover {
    transform: scale(1.05);
}

@media (max-width: 991.98px) {
    .navbar-logo {
        height: 25px;
    }
}

/* Navbar Item Hover Effects */
.navbar-nav .nav-link {
    position: relative;
    color: #333;
    font-weight: 500;
    padding: 10px 20px;
    text-transform: uppercase;
    transition: color 0.3s ease;
}

.navbar-nav .nav-link:hover {
    color: #007bff; /* Change to blue on hover */
}

/* Underline Animation */
.navbar-nav .nav-link:after {
    content: '';
    position: absolute;
    width: 100%;
    height: 5px;
    background-color: #007bff;
    bottom: 0;
    left: 0;
    transform: scaleX(0);
    transform-origin: bottom right;
    transition: transform 0.3s ease;
}

.navbar-nav .nav-link:hover:after {
    transform: scaleX(1);
    transform-origin: bottom left;
}

/* Active Link Highlight */
.navbar-nav .nav-link.active {
    color: #007bff; /* Active link color */
}

/* Navbar Background and Shadow */
.navbar {
    background-color: white;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

/* Button Hover Effect */
.get-quote-btn {
    font-weight: bold;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

.get-quote-btn:hover {
    background-color: #0056b3;
    transform: scale(1.05);
}

/* Responsive Navbar for Mobile */
@media (max-width: 991.98px) {
    .navbar-logo {
        height: 25px; /* Decreased from 35px */
    }

    .navbar-nav .nav-link {
        font-size: 14px; /* Slightly smaller text on mobile */
    }
}


</style>