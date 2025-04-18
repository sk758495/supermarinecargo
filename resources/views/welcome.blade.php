<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Marin Super Cargo</title>    
    <link rel="icon" href="{{ asset('asset/images/logbg2.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-DQvkBjpPgn7RC31MCQoOeC9TI2kdqa4+BSgNMNj8v77fdC77Kj5zpWFTJaaAoMbC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/css/styles.css') }}">
    <!-- ===== CUSTOM CSS STYLES ===== -->
    <style>
    </style>
</head>

<body>

    @include('user-ui.navbar')

   
    
    <!-- ===== CAROUSEL SECTION ===== -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-aos="fade-down"
        data-aos-duration="1000">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('asset/images/ca1.jpg') }}" class="d-block w-100" alt="Beautiful landscape">
                <div class="carousel-caption d-md-block" id="carouslel-text">
                    <h5>Our operation management platform makes Marine Cleaning Services an effortless task.</h5>
                    <p>Hold Cleaning | Tank Cleaning | Undewater Hull Cleaning</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('asset/images/ca2.jpg') }}" class="d-block w-100" alt="City skyline at sunset">
                <div class="carousel-caption d-md-block" id="carouslel-text">
                    <h5>Experience hassle-free Marine Cleaning Services through our advanced operation management
                        platform.</h5>
                    <p>Hold Cleaning | Tank Cleaning | Undewater Hull Cleaning</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('asset/images/ca4.jpeg') }}" class="d-block w-100" alt="Mountains covered in snow">
                <div class="carousel-caption d-md-block" id="carouslel-text">
                    <h5>Vessel cleaning has never been easier, thanks to our operation management platform.</h5>
                    <p>Hold Cleaning | Tank Cleaning | Undewater Hull Cleaning</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
    </div>



    <!-- ===== SEPARATOR SECTION ===== -->
    <section class="separator-section">
        <img src="{{ asset('asset/images/rope22.png') }}" alt="Rope Divider" class="rope-divider" />
        <img src="{{ asset('asset/images/anchor2.png') }}" alt="Anchor Icon" class="anchor-icon" />
    </section>



    <div class="container py-5 about-section" id="about" data-aos="fade-up" data-aos-duration="1000">
        <div class="row align-items-center mb-4">
            <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">
                <div class="about-content">
                    <p class="text-uppercase fw-bold text-custom-color about-label">About Us</p>
                    <h2 class="about-title">Leading Global Platform for Marine Cleaning Service Vendors</h2>
                    <p class="about-description">
                        Supercaro provides seamless access to a vast network of trusted and thoroughly vetted suppliers
                        across over 1,100 ports worldwide. Our platform empowers operations teams by streamlining the
                        Marine Cleaning process, enabling them to achieve excellence with ease. By using
                        MarineSupercargo, teams can save valuable time while maintaining full transparency and control
                        over their operations. With features that offer a comprehensive overview of inventory,
                        expenditure, and cleaning history, MarineSupercargo ensures that your Marine Cleaning activities
                        are efficient, organized, and reliable. We're dedicated to simplifying the complexities of
                        global operations, so you can focus on achieving the highest standards in your Cargo operations.
                    </p>
                    <a href="#" class="btn btn-primary mt-3 about-btn">Contact Us</a>
                </div>
            </div>
            <div class="col-md-6 hide-md" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                <div class="about-image-container">
                    <img src="{{ asset('asset/images/card5.jpg') }}" alt="About Image" class="about-image">
                    <div class="image-overlay"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- ===== WHY CHOOSE US SECTION ===== -->
    <section id="why-choose-us" class="py-5 why-choose-us" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
            <div class="section-header" data-aos="fade-down" data-aos-duration="1000">
                <h5>Why Choose Us?</h5>
                <h2>Reliable & Efficient Marine Cleaning Services</h2>
                <p class="lead">We link you with thoroughly vetted vendors offering cargo hold and hull cleaning
                    solutions, ensuring compliance, operational efficiency, and minimal downtime. Leveraging advanced
                    technology and a network of local suppliers, we deliver safe, dependable, and environmentally
                    friendly services. Our solutions are designed to keep your vessels in optimal condition and fully
                    prepared for their next cargo load.</p>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 mt-4">
                <div class="col">
                    <div class="feature-card" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100">
                        <div class="feature-icon">
                            <i class="bi bi-lightning-charge"></i>
                        </div>
                        <h5>Thorough Cleaning</h5>
                        <p>We ensure every corner of the cargo hold is spotless and ready for use.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="feature-card" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
                        <div class="feature-icon">
                            <i class="bi bi-cone-striped"></i>
                        </div>
                        <h5>Safety & Compliance</h5>
                        <p>Fully compliant with international safety and environmental standards.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="feature-card" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
                        <div class="feature-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h5>Advanced Methods</h5>
                        <p>Eco-friendly tools and techniques for fast, efficient cleaning.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="feature-card" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="400">
                        <div class="feature-icon">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <h5>Skilled Team</h5>
                        <p>Experienced professionals delivering reliable, high-quality results.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== SERVICES SECTION ===== -->
    <!-- Parallax Background with Overlay and Cards -->
    <section id="services" class="fixed-bg-section text-white text-center">
        <!-- Section Heading -->
        <div class="container z-2 mb-5">
            <h2 class="fw-bold">Our Core Services</h2>
            <p class="lead">Reliable, efficient and tailored Marine Cleaning Services.</p>
        </div>

        <!-- Cards -->
        <div class="container z-2">
            <div class="row justify-content-center g-4">

                <div class="container z-2">
                    <div class="row justify-content-center g-4">

                        <div class="col-md-4">
                            <div class="card bg-white shadow-lg service-card" data-aos="flip-left"
                                data-aos-duration="1000">
                                <img src="{{ asset('asset/images/card1.jpg') }}" class="card-img-top"
                                    alt="Hold Cleaning at Port">
                                <div class="card-body text-dark">
                                    <h5 class="card-title">Hold Cleaning</h5>
                                    <p class="card-text">This services are meticulously designed to ensure they are
                                        thoroughly cleaned and prepared for the next cargo load.</p>
                                    <a href="Hold-Cleaning-Services.html" class="btn btn-primary">Learn More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card bg-white shadow-lg service-card " data-aos="flip-right"
                                data-aos-duration="1000">
                                <img src="{{ asset('asset/images/chemical-tank-cleaning-sml.jpg') }}"
                                    class="card-img-top" alt="Hold Cleaning at Sea">
                                <div class="card-body text-dark">
                                    <h5 class="card-title">Tank Cleaning</h5>
                                    <p class="card-text">Marine Supercargo presents the optimal solution for anyone in
                                        search of reliable suppliers of Tank Cleaning.</p>
                                    <a href="Tank-Cleaning-Services.html" class="btn btn-primary">Learn More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card bg-white shadow-lg service-card" data-aos="flip-up"
                                data-aos-duration="1000">
                                <img src="{{ asset('asset/images/underwater.jpeg') }}" class="card-img-top"
                                    alt="Underwater Hull Cleaning">
                                <div class="card-body text-dark">
                                    <h5 class="card-title">Underwater Hull Cleaning</h5>
                                    <p class="card-text">Specialized underwater cleaning of hulls to reduce drag,
                                        improve efficiency, and extend vessel<br> lifespan.</p>
                                    <a href="Hull-Cleaning-Services.html" class="btn btn-primary">Learn More</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </section>


    <!-- ===== PROCESS SECTION ===== -->
    <section id="process" class="process-section" data-aos="fade-up" data-aos-duration="1000">
        <h2 class="section-title" data-aos="fade-down" data-aos-duration="1000">Our Marine Cleaning Process</h2>
        <div class="process-grid">
            <div class="process-card" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100">
                <img src="{{ asset('asset/images/1.svg') }}" alt="Appraising" />
                <h3>Appraisal</h3>
                <p>We inspect the vessel carefully
                    to determine the cleaning
                    requirements and design the most
                    effective cleaning strategy.
                </p>
                <span class="step-number">01</span>
            </div>

            <div class="process-card" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
                <img src="{{ asset('asset/images/2.svg') }}" alt="Planning" />
                <h3>Planning</h3>
                <p>We develop a detailed cleaning plan tailored to your ship's unique needs to ensure thorough and
                    efficient results.</p>
                <span class="step-number">02</span>
            </div>

            <div class="process-card" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
                <img src="{{ asset('asset/images/3.svg') }}" alt="Execution" />
                <h3>Execution</h3>
                <p>Our team uses advanced tools and eco-friendly techniques to carry out a complete and safe cleaning
                    process.</p>
                <span class="step-number">03</span>
            </div>

            <div class="process-card" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="400">
                <img src="{{ asset('asset/images/4.svg') }}" alt="Monitoring" />
                <h3>Monitoring</h3>
                <p>We monitor the cleaning process and conduct final checks to ensure the cargo hold meets the highest
                    standards.</p>
                <span class="step-number">04</span>
            </div>
        </div>
    </section>

    <!-- ===== GLOBAL PORTS SECTION ===== -->
    <section class="global-ports-section" id="mapss">
        <div class="container">
            <div class="section-header text-center mb-5" data-aos="fade-down" data-aos-duration="1000">
                <h5>Global Presence</h5>
                <h2>Our Vendor Network</h2>
                <p class="lead">Get access to the entire global Cleaning service marketplace, to the world's largest
                    service database provider, no matter your size or location.</p>
            </div>
            <div class="row align-items-center" data-aos="fade-up">
                <div class="map-container">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Add Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    <!-- Add Leaflet JavaScript -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <script>
        // Port data remains the same
        const ports = [
            // Indian Ports
            {
                name: 'Mumbai',
                lat: 19.0760,
                lng: 72.8777,
                country: 'India'
            },
            {
                name: 'Chennai',
                lat: 13.0827,
                lng: 80.2707,
                country: 'India'
            },
            {
                name: 'Kolkata',
                lat: 22.5726,
                lng: 88.3639,
                country: 'India'
            },
            {
                name: 'Visakhapatnam',
                lat: 17.6868,
                lng: 83.2185,
                country: 'India'
            },
            {
                name: 'Kochi',
                lat: 9.9312,
                lng: 76.2673,
                country: 'India'
            },

            // Middle East Ports
            {
                name: 'Dubai',
                lat: 25.2048,
                lng: 55.2708,
                country: 'UAE'
            },
            {
                name: 'Jeddah',
                lat: 21.5433,
                lng: 39.1728,
                country: 'Saudi Arabia'
            },
            {
                name: 'Muscat',
                lat: 23.5880,
                lng: 58.3829,
                country: 'Oman'
            },
            {
                name: 'Abu Dhabi',
                lat: 24.4539,
                lng: 54.3773,
                country: 'UAE'
            },

            // Asian Ports
            {
                name: 'Singapore',
                lat: 1.3521,
                lng: 103.8198,
                country: 'Singapore'
            },
            {
                name: 'Shanghai',
                lat: 31.2304,
                lng: 121.4737,
                country: 'China'
            },
            {
                name: 'Hong Kong',
                lat: 22.3193,
                lng: 114.1694,
                country: 'China'
            },
            {
                name: 'Tokyo',
                lat: 35.6762,
                lng: 139.6503,
                country: 'Japan'
            },
            {
                name: 'Busan',
                lat: 35.1796,
                lng: 129.0756,
                country: 'South Korea'
            },

            // European Ports
            {
                name: 'Rotterdam',
                lat: 51.9225,
                lng: 4.4792,
                country: 'Netherlands'
            },
            {
                name: 'Hamburg',
                lat: 53.5511,
                lng: 9.9937,
                country: 'Germany'
            },
            {
                name: 'Antwerp',
                lat: 51.2194,
                lng: 4.4025,
                country: 'Belgium'
            },
            {
                name: 'Marseille',
                lat: 43.2965,
                lng: 5.3698,
                country: 'France'
            },
            {
                name: 'Piraeus',
                lat: 37.9429,
                lng: 23.6469,
                country: 'Greece'
            },

            // American Ports
            {
                name: 'New York',
                lat: 40.7128,
                lng: -74.0060,
                country: 'USA'
            },
            {
                name: 'Los Angeles',
                lat: 34.0522,
                lng: -118.2437,
                country: 'USA'
            },
            {
                name: 'Miami',
                lat: 25.7617,
                lng: -80.1918,
                country: 'USA'
            },
            {
                name: 'Santos',
                lat: -23.9618,
                lng: -46.3322,
                country: 'Brazil'
            },
            {
                name: 'Vancouver',
                lat: 49.2827,
                lng: -123.1207,
                country: 'Canada'
            },

            {
                name: 'Durban',
                lat: -29.8833,
                lng: 31.0500,
                country: 'South Africa'
            },
            {
                name: 'Cape Town',
                lat: -33.9249,
                lng: 18.4241,
                country: 'South Africa'
            },
            {
                name: 'Abidjan',
                lat: 5.3096,
                lng: -4.0266,
                country: 'Ivory Coast'
            },
            {
                name: 'Lagos (Apapa)',
                lat: 6.4550,
                lng: 3.3841,
                country: 'Nigeria'
            },
            {
                name: 'Djibouti',
                lat: 11.5853,
                lng: 43.1450,
                country: 'Djibouti'
            },
            {
                name: 'Dar es Salaam',
                lat: -6.8333,
                lng: 39.2000,
                country: 'Tanzania'
            },
            {
                name: 'Beira',
                lat: -19.8436,
                lng: 34.8389,
                country: 'Mozambique'
            },
            {
                name: 'Walvis Bay',
                lat: -22.9575,
                lng: 14.5064,
                country: 'Namibia'
            },
            {
                name: 'Tanger Med',
                lat: 35.7903,
                lng: -5.9833,
                country: 'Morocco'
            },
            {
                name: 'Tema',
                lat: 5.6675,
                lng: -0.0167,
                country: 'Ghana'
            },

            // Australian Ports
            {
                name: 'Sydney',
                lat: -33.8688,
                lng: 151.2093,
                country: 'Australia'
            },
            {
                name: 'Melbourne',
                lat: -37.8136,
                lng: 144.9631,
                country: 'Australia'
            },
            {
                name: 'Brisbane',
                lat: -27.4698,
                lng: 153.0251,
                country: 'Australia'
            },
            {
                name: 'Fremantle',
                lat: -32.0540,
                lng: 115.7478,
                country: 'Australia'
            },
            {
                name: 'Adelaide',
                lat: -34.9285,
                lng: 138.6007,
                country: 'Australia'
            },
            {
                name: 'Newcastle',
                lat: -32.9278,
                lng: 151.7803,
                country: 'Australia'
            },
            {
                name: 'Port Hedland',
                lat: -20.3167,
                lng: 118.5833,
                country: 'Australia'
            },
            {
                name: 'Gladstone',
                lat: -23.8500,
                lng: 151.2500,
                country: 'Australia'
            },
            {
                name: 'Townsville',
                lat: -19.2564,
                lng: 146.8169,
                country: 'Australia'
            },
            {
                name: 'Darwin',
                lat: -12.4613,
                lng: 130.8418,
                country: 'Australia'
            },

            // South American Ports
            {
                name: 'Buenos Aires',
                lat: -34.6037,
                lng: -58.3816,
                country: 'Argentina'
            },
            {
                name: 'Santos',
                lat: -23.9618,
                lng: -46.3322,
                country: 'Brazil'
            },
            {
                name: 'Callao',
                lat: -12.0667,
                lng: -77.1500,
                country: 'Peru'
            },
            {
                name: 'Valparaíso',
                lat: -33.0333,
                lng: -71.6167,
                country: 'Chile'
            },
            {
                name: 'Guayaquil',
                lat: -2.1962,
                lng: -79.8862,
                country: 'Ecuador'
            },
            {
                name: 'Cartagena',
                lat: 10.3997,
                lng: -75.5144,
                country: 'Colombia'
            },
            {
                name: 'Montevideo',
                lat: -34.9011,
                lng: -56.1872,
                country: 'Uruguay'
            },
            {
                name: 'Rio de Janeiro',
                lat: -22.9068,
                lng: -43.1729,
                country: 'Brazil'
            },
            {
                name: 'Bahía Blanca',
                lat: -38.7167,
                lng: -62.2667,
                country: 'Argentina'
            },
            {
                name: 'San Antonio',
                lat: -33.5833,
                lng: -71.6167,
                country: 'Chile'
            },

            // Additional European Ports
            {
                name: 'Antwerp-Bruges',
                lat: 51.3025,
                lng: 4.3115,
                country: 'Belgium'
            },
            {
                name: 'Hamburg',
                lat: 53.5511,
                lng: 9.9937,
                country: 'Germany'
            },
            {
                name: 'Algeciras',
                lat: 36.1367,
                lng: -5.4343,
                country: 'Spain'
            },
            {
                name: 'Valencia',
                lat: 39.4423,
                lng: -0.3165,
                country: 'Spain'
            },
            {
                name: 'Constanța',
                lat: 44.1725,
                lng: 28.6402,
                country: 'Romania'
            },
            {
                name: 'Gdańsk',
                lat: 54.3521,
                lng: 18.6464,
                country: 'Poland'
            },
            {
                name: 'Barcelona',
                lat: 41.3851,
                lng: 2.1734,
                country: 'Spain'
            },
            {
                name: 'Piraeus',
                lat: 37.9461,
                lng: 23.6160,
                country: 'Greece'
            },
            {
                name: 'Le Havre',
                lat: 49.4939,
                lng: 0.1078,
                country: 'France'
            },
            {
                name: 'Bremerhaven',
                lat: 53.5509,
                lng: 8.5489,
                country: 'Germany'
            }
        ];

        function initMap() {
            // Initialize the map with a light style
            const map = L.map('map', {
                zoomControl: false, // We'll add it to the top-right
                minZoom: 2,
                maxZoom: 18
            }).setView([20, 0], 2);

            // Add custom tile layer with a light theme
            L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
                attribution: '©OpenStreetMap, ©CartoDB',
                subdomains: 'abcd',
                maxZoom: 19
            }).addTo(map);

            // Add zoom control to the top-right
            L.control.zoom({
                position: 'topright'
            }).addTo(map);

            // Create markers for each port
            ports.forEach(port => {
                // Create custom icon with adjusted size for better visibility on light background
                const icon = L.divIcon({
                    className: 'custom-marker marker-pulse',
                    iconSize: [14, 14] // Slightly larger for better visibility
                });

                // Create marker with custom icon
                const marker = L.marker([port.lat, port.lng], {
                    icon: icon
                });

                // Create popup content with enhanced styling
                const popupContent = `
              <div class="port-popup">
                  <h4>${port.name}</h4>
                  <p>${port.country}</p>
              </div>
          `;

                // Add popup to marker with custom options
                marker.bindPopup(popupContent, {
                    maxWidth: 300,
                    className: 'custom-popup'
                });

                // Add marker to map
                marker.addTo(map);
            });

            // Make the map responsive
            window.addEventListener('resize', () => {
                map.invalidateSize();
            });
        }

        // Initialize map when DOM is loaded
        document.addEventListener('DOMContentLoaded', initMap);
    </script>

    <!-- Faq Section -->
    <section class="faq section light-background" id="faq">
        <div class="container">
            <div class="row align-items-center gy-4">

                <div class="col-lg-5" data-aos="fade-up">
                    <h2 class="faq-title">Have a question?<br>Check out the FAQ's</h2>
                    <p class="faq-description">Here are some frequently asked questions to help you understand our
                        services better. If you still have any queries, feel free to reach out!</p>
                    <div class="faq-arrow d-none d-lg-block" data-aos="fade-up" data-aos-delay="200">
                        <!-- Kept your SVG icon here -->
                        <svg class="faq-arrow" width="200" height="211" viewBox="0 0 200 211" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M198.804 194.488C189.279 189.596 179.529 185.52 169.407 182.07L169.384 182.049C169.227 181.994 169.07 181.939 168.912 181.884C166.669 181.139 165.906 184.546 167.669 185.615C174.053 189.473 182.761 191.837 189.146 195.695C156.603 195.912 119.781 196.591 91.266 179.049C62.5221 161.368 48.1094 130.695 56.934 98.891C84.5539 98.7247 112.556 84.0176 129.508 62.667C136.396 53.9724 146.193 35.1448 129.773 30.2717C114.292 25.6624 93.7109 41.8875 83.1971 51.3147C70.1109 63.039 59.63 78.433 54.2039 95.0087C52.1221 94.9842 50.0776 94.8683 48.0703 94.6608C30.1803 92.8027 11.2197 83.6338 5.44902 65.1074C-1.88449 41.5699 14.4994 19.0183 27.9202 1.56641C28.6411 0.625793 27.2862 -0.561638 26.5419 0.358501C13.4588 16.4098 -0.221091 34.5242 0.896608 56.5659C1.8218 74.6941 14.221 87.9401 30.4121 94.2058C37.7076 97.0203 45.3454 98.5003 53.0334 98.8449C47.8679 117.532 49.2961 137.487 60.7729 155.283C87.7615 197.081 139.616 201.147 184.786 201.155L174.332 206.827C172.119 208.033 174.345 211.287 176.537 210.105C182.06 207.125 187.582 204.122 193.084 201.144C193.346 201.147 195.161 199.887 195.423 199.868C197.08 198.548 193.084 201.144 195.528 199.81C196.688 199.192 197.846 198.552 199.006 197.935C200.397 197.167 200.007 195.087 198.804 194.488ZM60.8213 88.0427C67.6894 72.648 78.8538 59.1566 92.1207 49.0388C98.8475 43.9065 106.334 39.2953 114.188 36.1439C117.295 34.8947 120.798 33.6609 124.168 33.635C134.365 33.5511 136.354 42.9911 132.638 51.031C120.47 77.4222 86.8639 93.9837 58.0983 94.9666C58.8971 92.6666 59.783 90.3603 60.8213 88.0427Z"
                                fill="currentColor"></path>
                        </svg>

                    </div>
                </div>

                <div class="col-lg-7" data-aos="fade-up" data-aos-delay="300">
                    <div class="faq-container">
                        <!-- Repeatable FAQ Items -->
                        <div class="faq-item">
                            <div class="faq-question">
                                <h3>What types of vessels do you clean?</h3>
                                <i class="faq-toggle bi bi-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                <p>We clean bulk carriers, tankers, container ships, and specialized cargo vessels.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">
                                <h3>Are your methods eco-friendly?</h3>
                                <i class="faq-toggle bi bi-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Yes, we use eco-friendly, sustainable, and internationally compliant cleaning
                                    methods.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">
                                <h3>Do you offer custom cleaning solutions?</h3>
                                <i class="faq-toggle bi bi-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Yes, we create cleaning plans tailored to your vessel's specific needs.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">
                                <h3>Why is hold cleaning important?</h3>
                                <i class="faq-toggle bi bi-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Hold cleaning prevents contamination, protects cargo safety, and ensures regulatory
                                    compliance.</p>
                            </div>
                        </div>


                        <div class="faq-item">
                            <div class="faq-question">
                                <h3>How long does the cleaning take?</h3>
                                <i class="faq-toggle bi bi-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Cleaning timelines vary depending on the vessel type and specific requirements.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">
                                <h3>Where are your services available?</h3>
                                <i class="faq-toggle bi bi-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Marine cleaning solutions are provided by us worldwide.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">
                                <h3>How can I get a quote?</h3>
                                <i class="faq-toggle bi bi-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Contact us for a customized quote tailored to your cleaning needs.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <div class="faq-question">
                                <h3>What makes Marine Super Cargo stand out?</h3>
                                <i class="faq-toggle bi bi-chevron-down"></i>
                            </div>
                            <div class="faq-answer">
                                <p>Our expertise, eco-friendly practices, and commitment to quality set us apart in the
                                    industry.</p>
                            </div>
                        </div>

                        <!-- Add more FAQ items here -->

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- /Faq Section -->
  
    <script>
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', () => {
                const parent = question.parentElement;
                parent.classList.toggle('active');
            });
        });
    </script>

    <!-- ===== FOOTER SECTION ===== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YUe2LzesAfftltw+PEaao2tjU/QATaW/rOitAq67e0CT0Zi2VVRL0oC4+gAaeBKu" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: false,
            mirror: true
        });
    </script>

    <script>
        // Add smooth scrolling and active state
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href').substring(1);
                const target = document.getElementById(targetId);
                if (target) {
                    // Calculate the offset for the fixed navbar
                    const navbarHeight = document.querySelector('.navbar').offsetHeight;
                    const targetPosition = target.getBoundingClientRect().top + window.pageYOffset -
                        navbarHeight;

                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });

                    // Update active state
                    document.querySelectorAll('.nav-link').forEach(link => {
                        link.classList.remove('active');
                    });
                    this.classList.add('active');
                }
            });
        });

        // Update active state on scroll
        window.addEventListener('scroll', function() {
            const sections = document.querySelectorAll('section[id], div[id]');
            const navLinks = document.querySelectorAll('.nav-link');
            const scrollPosition = window.scrollY;

            sections.forEach(section => {
                const sectionTop = section.offsetTop - 100;
                const sectionHeight = section.offsetHeight;

                if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                    const id = section.getAttribute('id');
                    navLinks.forEach(link => {
                        link.classList.remove('active');
                        if (link.getAttribute('href') === `#${id}`) {
                            link.classList.add('active');
                        }
                    });
                }
            });
        });
    </script>
    
 @include('user-ui.footer')
</body>

</html>
