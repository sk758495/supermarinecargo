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
        /* Fix for overflow and responsiveness */
        html, body {
            overflow-x: hidden;
            width: 100%;
            margin: 0;
            padding: 0;
            position: relative;
        }

        /* Fix for AOS animation overflow */
        [data-aos] {
            pointer-events: none;
            overflow-x: hidden;
        }
        
        [data-aos].aos-animate {
            pointer-events: auto;
        }

        /* Container max-width adjustments */
        .container {
            max-width: 100%;
            padding-left: 15px;
            padding-right: 15px;
            margin: 0 auto;
        }
        @media (min-width: 576px) {
            .container {
                max-width: 540px;
            }
        }
        @media (min-width: 768px) {
            .container {
                max-width: 720px;
            }
        }
        @media (min-width: 992px) {
            .container {
                max-width: 960px;
            }
        }
        @media (min-width: 1200px) {
            .container {
                max-width: 1140px;
            }
        }

        /* Section wrapper to prevent overflow */
        section {
            width: 100%;
            overflow: hidden;
        }

        /* Row margin fix */
        .row {
            margin-left: 0;
            margin-right: 0;
        }

        /* ===== INTRODUCTION SECTION STYLES ===== */
        .intro-section {
            padding: 140px 0 80px;
            background-color: #fff;
            position: relative;
            overflow: hidden;
            width: 100%;
        }

        .intro-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(0, 73, 167, 0.03), transparent);
            z-index: 0;
        }

        .intro-image-wrapper {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            transform: perspective(1000px) rotateY(0deg);
            transition: transform 0.5s ease;
            max-width: 100%;
        }

        

        .intro-image {
            width: 100%;
            height: auto;
            border-radius: 15px;
            transition: transform 0.5s ease;
            display: block;
        }

        .intro-image-wrapper:hover .intro-image {
            transform: scale(1.05);
        }

        .intro-content {
            padding: 20px;
            position: relative;
            z-index: 1;
        }

        .intro-title {
            font-size: 2.5rem;
            font-weight: bold;
            color: var(--primary-color);
            margin-bottom: 25px;
            position: relative;
            padding-bottom: 15px;
        }

        .intro-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background-color: var(--primary-color);
            transition: width 0.3s ease;
        }

        .intro-content:hover .intro-title::after {
            width: 100px;
        }

        .intro-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #555;
            margin-bottom: 30px;
        }

        .intro-text p {
            margin-bottom: 20px;
        }

        /* Responsive Styles */
        @media (max-width: 1200px) {
            .intro-section {
                padding: 120px 15px 60px;
            }

            .intro-title {
                font-size: 2.2rem;
            }
        }

        @media (max-width: 991px) {
            .intro-section {
                padding: 100px 15px 50px;
            }

            .intro-title {
                font-size: 2rem;
            }

            .intro-text {
                font-size: 1rem;
            }

            .intro-image-wrapper {
                margin: 0 auto 30px;
                max-width: 500px;
            }
        }

        @media (max-width: 768px) {
            .intro-section {
                padding: 90px 15px 40px;
            }

            .intro-title {
                font-size: 1.8rem;
                margin-bottom: 20px;
            }

            .intro-content {
                padding: 15px 0;
            }
        }

        @media (max-width: 576px) {
            .intro-section {
                padding: 80px 15px 30px;
            }

            .intro-title {
                font-size: 1.6rem;
            }

            .intro-text {
                font-size: 0.95rem;
                line-height: 1.6;
            }
        }


        /* Benefits Section */
        .benefits-section {
            padding: 80px 0;
            background-color: #f8f9fa;
            overflow: hidden;
            width: 100%;
        }

        .benefit-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 30px;
            padding-right: 15px;
        }

        .benefit-icon {
            font-size: 1.5rem;
            color: var(--primary-color);
            margin-right: 15px;
            min-width: 30px;
        }

        /* CTA Section */
        .cta-section {
            padding: 60px 15px;
            background: white;
            color: black;
            text-align: center;
            width: 100%;
            overflow: hidden;
        }

        .cta-section .container {
            max-width: 100%;
            overflow: hidden;
        }

        .cta-section h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            color: var(--primary-color);
            word-wrap: break-word;
            overflow-wrap: break-word;
            hyphens: auto;
            max-width: 100%;
            line-height: 1.2;
        }

        .cta-section p {
            font-size: 1.1rem;
            margin-bottom: 2rem;
            color: #555;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .cta-button {
            background: var(--primary-color);
            color: white;
            padding: 12px 30px;
            border-radius: 5px;
            font-weight: 600;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            background: #0051bc;
            color: white;
            text-decoration: none;
        }

        /* Image responsiveness */
        .img-fluid {
            max-width: 100%;
            height: auto;
            display: block;
        }

        @media (max-width: 768px) {
            .benefits-section {
                padding: 40px 0;
            }
            .benefit-item {
                padding-right: 0;
            }
            .cta-section {
                padding: 40px 15px;
            }
        }

    </style>
</head>

<body>

    @include('user-ui.navbar')

   <!-- ===== INTRODUCTION SECTION ===== -->
<section class="intro-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5" data-aos="fade-right">
                <div class="intro-image-wrapper">
                    <img src="{{ asset('asset/images/chemical-tank-cleaning-sml.jpg') }}" alt="Hold Cleaning Service" class="intro-image">
                </div>
            </div>
            <div class="col-lg-7" data-aos="fade-left">
                <div class="intro-content">
                    <h2 class="intro-title">Tank Cleaning</h2>
                    <div class="intro-text">
                       <p>MarineSupercargo serves as a reliable platform that connects tank cleaning shore gang vendors with operations managers, enabling seamless collaboration for efficient and safe cleaning solutions. Whether it's demucking, manual sludge disposal, or squeezy operations, our management platform efficiently handles it all. By providing access to a network of pre-vetted and trusted vendors, MarineSupercargo ensures high-quality services tailored to meet the specific requirements of tank cleaning operations. Our platform simplifies appointment, streamlines communication, and reduces downtime, allowing operations managers to focus on maintaining compliance and operational excellence. With an emphasis on safety, eco-friendly practices, and reliability, MarineSupercargo empowers teams to optimize workflows and keep vessels in top condition. Trust MarineSupercargo to simplify tank cleaning and enhance maritime efficiency.</p>   
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ===== CTA SECTION ===== -->
<section class="cta-section">
    <div class="container">
        <h2 class="mb-4" >Ready to Schedule Your Tank Cleaning?</h2>
        <p data-aos="fade-up" data-aos-delay="100">Contact us today for a customized quote and experience our professional cleaning services.</p>
        <a href="contact.html" class="cta-button" data-aos="fade-up" data-aos-delay="200">Get a Quote</a>
    </div>
</section>

<!-- ===== BENEFITS SECTION ===== -->
<section class="benefits-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h2 class="mb-4">Why Choose Our Tank Cleaning Service?</h2>
                <div class="benefit-item">
                    <i class="bi bi-check-circle-fill benefit-icon"></i>
                    <div>
                        <h4>Specialized Expertise</h4>
                        <p>Expert teams trained in handling various tank types and cargo residues.</p>
                    </div>
                </div>
                <div class="benefit-item">
                    <i class="bi bi-check-circle-fill benefit-icon"></i>
                    <div>
                        <h4>Advanced Technology</h4>
                        <p>State-of-the-art cleaning equipment and environmentally safe solutions.</p>
                    </div>
                </div>
                <div class="benefit-item">
                    <i class="bi bi-check-circle-fill benefit-icon"></i>
                    <div>
                        <h4>Compliance Assured</h4>
                        <p>Adherence to MARPOL and industry-specific cleaning standards.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <img src="{{ asset('asset/images/tank  (1).jpg') }}" alt="Hold Cleaning Benefits" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</section>

 

    <!-- ===== FOOTER SECTION ===== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    
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
            mirror: true
        });
    </script>

    <script>
        // Add scroll effect to navbar
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>

   @include('user-ui.footer')
</body>

</html>
