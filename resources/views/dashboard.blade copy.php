<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-DQvkBjpPgn7RC31MCQoOeC9TI2kdqa4+BSgNMNj8v77fdC77Kj5zpWFTJaaAoMbC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/css/styles.css') }}">
</head>
<body>

  @include('user-ui.navbar')

  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-aos="fade-down" data-aos-duration="1000">
      <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                  aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                  aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                  aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="{{ asset('asset/images/carousel1.jpg') }}" class="d-block w-100" alt="Beautiful landscape">
              <div class="carousel-caption d-md-block">
                  <h5>Dedicated Cargo Cleaning Service</h5>
                  <p>Best Quality Cargo Hold Cleaning Service.</p>
              </div>
          </div>
          <div class="carousel-item">
              <img src="{{ asset('asset/images/carousel2.jpg') }}" class="d-block w-100" alt="City skyline at sunset">
              <div class="carousel-caption d-md-block">
                  <h5>Dedicated Bulk Carrier Cleaning</h5>
                  <p>Dry Bulk Carrier Hold Cleaning Service.</p>
              </div>
          </div>
          <div class="carousel-item">
              <img src="{{ asset('asset/images/carousel3.jpg') }}" class="d-block w-100" alt="Mountains covered in snow">
              <div class="carousel-caption d-md-block">
                  <h5>Fastest Bulk Carrier Cleaning</h5>
                  <p>Fastest Bulk Carrier Hold Cleaning Service.</p>
              </div>
          </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
      </button>
  </div>

  {{-- roap divider  --}}
  <section class="separator-section">
      <img src="{{ asset('asset/images/rope 3.0.2.png') }}" alt="Rope Divider" class="rope-divider" />
      <img src="{{ asset('asset/images/anchor2.png') }}" alt="Anchor Icon" class="anchor-icon" />
  </section>

  {{-- about section --}}
  <div class="container py-5 about-section" id="about" data-aos="fade-up" data-aos-duration="1000">
      <div class="row align-items-center mb-4">
          <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">
              <div class="about-content">
                  <p class="text-uppercase fw-bold text-custom-color about-label">About Us</p>
                  <h2 class="about-title">Top Cargo Hold Cleaning Service Provider in India</h2>
                  <p class="about-description">
                      Hold cleaning is a crucial service for cargo ships and vessels, ensuring cleanliness and compliance with
                      international safety and environmental standards. Cleanship, a trusted provider in India, offers
                      professional hold cleaning for bulk carriers, tankers, and container ships using eco-friendly methods and
                      advanced tools to remove dirt, residues, and contaminants. With a skilled and experienced team, we
                      guarantee clean and safe cargo holds that protect goods and ensure smooth sailing. As one of the best ship
                      hold cleaning companies in India, Cleanship delivers reliable and efficient solutions to keep your vessel
                      operational and compliant.
                  </p>
                  <a href="#" class="btn btn-primary mt-3 about-btn">Contact Us</a>
              </div>
          </div>
          <div class="col-md-6 hide-md" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
              <div class="about-image-container">
                  <img src="{{ asset('asset/images/about.jpg') }}" alt="About Image" class="about-image">
                  <div class="image-overlay"></div>
              </div>
          </div>
      </div>
  </div>

  {{-- why-choose-us --}}
  <section id="why-choose-us" class="py-5 why-choose-us" data-aos="fade-up" data-aos-duration="1000">
      <div class="container">
          <div class="section-header" data-aos="fade-down" data-aos-duration="1000">
              <h5>Why Choose Us?</h5>
              <h2>Reliable & Efficient Cargo Hold Cleaning</h2>
              <p class="lead">We provide advanced cargo hold cleaning solutions to ensure compliance, efficiency, and minimal
                  downtime. Using cutting-edge technology, we deliver safe, reliable, and eco-friendly services, keeping your
                  vessels ready for their next cargo load.</p>
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

  {{-- logo-slider --}}
  <div class="py-4 logo-slider" data-aos="fade-up" data-aos-duration="1000">
      <div class="logos-wrapper">
          <div class="logos">
              <img src="{{ asset('asset/images/Cleanship-Featured-in-United-News-on-india.webp') }}" alt="Logo 1">
              <img src="{{ asset('asset/images/Cleanship-Featured-in-Asia-News.webp') }}" alt="Logo 2">
              <img src="{{ asset('asset/images/Cleanship-Featured-in-Dailyhunt.webp') }}" alt="Logo 3">
              <img src="{{ asset('asset/images/Cleanship-Featured-in-Economic-India.webp') }}" alt="Logo 4">
              <img src="{{ asset('asset/images/Cleanship-Featured-in-Flipboard.webp') }}" alt="Logo 5">
              <img src="{{ asset('asset/images/Cleanship-Featured-in-Google-NEws.webp') }}" alt="Logo 6">
              <img src="{{ asset('asset/images/Cleanship-Featured-in-Jio-News.webp') }}" alt="Logo 7">
              <img src="{{ asset('asset/images/Cleanship-Featured-in-Medium.webp') }}" alt="Logo 8">
              <img src="{{ asset('asset/images/Cleanship-Featured-in-Sangri-Today.webp') }}" alt="Logo 9">
              <img src="{{ asset('asset/images/Cleanship-Featured-in-SR.webp') }}" alt="Logo 10">
              <img src="{{ asset('asset/images/Cleanship-Featured-in-The-Outlook-Mirror.webp') }}" alt="Logo 11">
              <img src="{{ asset('asset/images/Cleanship-Featured-in-United-News-on-india.webp') }}" alt="Logo 1">
              <img src="{{ asset('asset/images/Cleanship-Featured-in-Asia-News.webp') }}" alt="Logo 2">
              <img src="{{ asset('asset/images/Cleanship-Featured-in-Dailyhunt.webp') }}" alt="Logo 3">
              <img src="{{ asset('asset/images/Cleanship-Featured-in-Economic-India.webp') }}" alt="Logo 4">
              <img src="{{ asset('asset/images/Cleanship-Featured-in-Flipboard.webp') }}" alt="Logo 5">
              <img src="{{ asset('asset/images/Cleanship-Featured-in-Google-NEws.webp') }}" alt="Logo 6">
              <img src="{{ asset('asset/images/Cleanship-Featured-in-Jio-News.webp') }}" alt="Logo 7">
              <img src="{{ asset('asset/images/Cleanship-Featured-in-Medium.webp') }}" alt="Logo 8">
              <img src="{{ asset('asset/images/Cleanship-Featured-in-Sangri-Today.webp') }}" alt="Logo 9">
              <img src="{{ asset('asset/images/Cleanship-Featured-in-SR.webp') }}" alt="Logo 10">
              <img src="{{ asset('asset/images/Cleanship-Featured-in-The-Outlook-Mirror.webp') }}" alt="Logo 11">
          </div>
      </div>
  </div>

  <!-- Parallax Background with Overlay and Cards -->
  <section id="services" class="fixed-bg-section text-white text-center">
      <!-- Section Heading -->
      <div class="container z-2 mb-5">
        <h2 class="fw-bold">Our Core Services</h2>
        <p class="lead">Reliable, efficient and tailored cargo cleaning services.</p>
      </div>
    
      <!-- Cards -->
      <div class="container z-2">
        <div class="row justify-content-center g-4">
          
          <div class="container z-2">
              <div class="row justify-content-center g-4">
                
                <div class="col-md-4">
                  <div class="card bg-white shadow-lg service-card" data-aos="flip-left" data-aos-duration="1000">
                    <img src="{{ asset('asset/images/port.jpeg') }}" class="card-img-top" alt="Hold Cleaning at Port">
                    <div class="card-body text-dark">
                      <h5 class="card-title">Hold Cleaning At Port</h5>
                      <p class="card-text">Thorough hold cleaning performed while docked to meet international cargo standards and readiness.</p>
                      <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                  </div>
                </div>
                
                <div class="col-md-4">
                  <div class="card bg-white shadow-lg service-card " data-aos="flip-right" data-aos-duration="1000">
                    <img src="{{ asset('asset/images/sea.jpeg') }}" class="card-img-top" alt="Hold Cleaning at Sea">
                    <div class="card-body text-dark">
                      <h5 class="card-title">Hold Cleaning At Sea</h5>
                      <p class="card-text">Efficient hold cleaning procedures carried out during voyages, minimizing downtime and delays.</p>
                      <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                  </div>
                </div>
          
                <div class="col-md-4">
                  <div class="card bg-white shadow-lg service-card" data-aos="flip-up" data-aos-duration="1000">
                    <img src="{{ asset('asset/images/underwater.jpg') }}" class="card-img-top" alt="Underwater Hull Cleaning">
                    <div class="card-body text-dark">
                      <h5 class="card-title">Underwater Hull Cleaning</h5>
                      <p class="card-text">Specialized underwater cleaning of hulls to reduce drag, improve efficiency, and extend vessel lifespan.</p>
                      <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                  </div>
                </div>
          
    
        </div>
      </div>
      </div>
    </div>
    
  </section>  



  <section id="process" class="process-section" data-aos="fade-up" data-aos-duration="1000">
    <h2 class="section-title" data-aos="fade-down" data-aos-duration="1000">Our Hold Cleaning Process</h2>
    <div class="process-grid">
      <div class="process-card" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="100">
        <img src="{{ asset('asset/images/1.svg') }}" alt="Appraising" />
        <h3>Appraisal</h3>
        <p>We inspect the cargo hold carefully to determine the cleaning requirements and design the most effective cleaning strategy.</p>
        <span class="step-number">01</span>
      </div>

      <div class="process-card" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
        <img src="{{ asset('asset/images/2.svg') }}" alt="Planning" />
        <h3>Planning</h3>
        <p>We develop a detailed cleaning plan tailored to your ship's unique needs to ensure thorough and efficient results.</p>
        <span class="step-number">02</span>
      </div>

      <div class="process-card" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="300">
        <img src="{{ asset('asset/images/3.svg') }}" alt="Execution" />
        <h3>Execution</h3>
        <p>Our team uses advanced tools and eco-friendly techniques to carry out a complete and safe cleaning process.</p>
        <span class="step-number">03</span>
      </div>

      <div class="process-card" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="400">
        <img src="{{ asset('asset/images/4.svg') }}" alt="Monitoring" />
        <h3>Monitoring</h3>
        <p>We monitor the cleaning process and conduct final checks to ensure the cargo hold meets the highest standards.</p>
        <span class="step-number">04</span>
      </div>
    </div>
  </section>


  <!-- Faq Section -->
  <section class="faq section light-background" id="faq">
    <div class="container">
      <div class="row align-items-center gy-4">
        
        <div class="col-lg-5" data-aos="fade-up">
          <h2 class="faq-title">Have a question?<br>Check out the FAQ's</h2>
          <p class="faq-description">Here are some frequently asked questions to help you understand our services better. If you still have any queries, feel free to reach out!</p>
          <div class="faq-arrow d-none d-lg-block" data-aos="fade-up" data-aos-delay="200">
            <!-- Kept your SVG icon here -->
            <svg class="faq-arrow" width="200" height="211" viewBox="0 0 200 211" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M198.804 194.488C189.279 189.596 179.529 185.52 169.407 182.07L169.384 182.049C169.227 181.994 169.07 181.939 168.912 181.884C166.669 181.139 165.906 184.546 167.669 185.615C174.053 189.473 182.761 191.837 189.146 195.695C156.603 195.912 119.781 196.591 91.266 179.049C62.5221 161.368 48.1094 130.695 56.934 98.891C84.5539 98.7247 112.556 84.0176 129.508 62.667C136.396 53.9724 146.193 35.1448 129.773 30.2717C114.292 25.6624 93.7109 41.8875 83.1971 51.3147C70.1109 63.039 59.63 78.433 54.2039 95.0087C52.1221 94.9842 50.0776 94.8683 48.0703 94.6608C30.1803 92.8027 11.2197 83.6338 5.44902 65.1074C-1.88449 41.5699 14.4994 19.0183 27.9202 1.56641C28.6411 0.625793 27.2862 -0.561638 26.5419 0.358501C13.4588 16.4098 -0.221091 34.5242 0.896608 56.5659C1.8218 74.6941 14.221 87.9401 30.4121 94.2058C37.7076 97.0203 45.3454 98.5003 53.0334 98.8449C47.8679 117.532 49.2961 137.487 60.7729 155.283C87.7615 197.081 139.616 201.147 184.786 201.155L174.332 206.827C172.119 208.033 174.345 211.287 176.537 210.105C182.06 207.125 187.582 204.122 193.084 201.144C193.346 201.147 195.161 199.887 195.423 199.868C197.08 198.548 193.084 201.144 195.528 199.81C196.688 199.192 197.846 198.552 199.006 197.935C200.397 197.167 200.007 195.087 198.804 194.488ZM60.8213 88.0427C67.6894 72.648 78.8538 59.1566 92.1207 49.0388C98.8475 43.9065 106.334 39.2953 114.188 36.1439C117.295 34.8947 120.798 33.6609 124.168 33.635C134.365 33.5511 136.354 42.9911 132.638 51.031C120.47 77.4222 86.8639 93.9837 58.0983 94.9666C58.8971 92.6666 59.783 90.3603 60.8213 88.0427Z" fill="currentColor"></path>
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
                <p>Yes, we use eco-friendly, sustainable, and internationally compliant cleaning methods.</p>
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
                <p>Hold cleaning prevents contamination, protects cargo safety, and ensures regulatory compliance.</p>
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
                <p>In India cargo hold cleaning solutions are provided by us nationwide</p>
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
                <h3>What makes Cleanship stand out?</h3>
                <i class="faq-toggle bi bi-chevron-down"></i>
              </div>
              <div class="faq-answer">
                <p>Our expertise, eco-friendly practices, and commitment to quality set us apart in the industry.</p>
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
    
  <!-- Font Awesome for social icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  {{-- ---------------------------- footer ---------------------------- --}}
  @include('user-ui.footer')


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-YUe2LzesAfftltw+PEaao2tjU/QATaW/rOitAq67e0CT0Zi2VVRL0oC4+gAaeBKu"
          crossorigin="anonymous"></script>
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
          anchor.addEventListener('click', function (e) {
              e.preventDefault();
              const targetId = this.getAttribute('href').substring(1);
              const target = document.getElementById(targetId);
              if (target) {
                  // Calculate the offset for the fixed navbar
                  const navbarHeight = document.querySelector('.navbar').offsetHeight;
                  const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - navbarHeight;
                  
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

</body>
</html>
