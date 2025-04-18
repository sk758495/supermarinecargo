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
    <!-- ===== CUSTOM CSS STYLES ===== -->
</head>

<body>

    @include('user-ui.navbar')

        <!-- ===== CUSTOM CSS STYLES ===== -->
        <style>
            /* ===== ROOT VARIABLES ===== */
            :root {
                --primary-color: #0049a7;
                --secondary-color: #003d8f;
                --text-color: #333;
                --light-gray: #f8f9fa;
                --border-radius: 12px;
                --box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
                --transition: all 0.3s ease;
            }
    
            /* ===== NAVBAR LOGO STYLES ===== */
            
    
            /* ===== BUTTON PRIMARY STYLES ===== */
            .btn-primary {
                background-color: var(--primary-color);
                border: none;
                padding: 10px 18px;
                font-size: 1rem;
                font-weight: bold;
            }
    
            /* ===== CONTACT PAGE STYLES ===== */
            body, html {
                margin: 0;
                padding: 0;
                overflow-x: hidden;
                width: 100%;
            }
    
            .contact-hero {
                background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('/asset/images/sea.jpeg');
                background-size: cover;
                background-position: center;
                height: 700px;
                display: flex;
                align-items: center;
                justify-content: center;
                text-align: center;
                color: white;
                margin-top: 60px;
                padding: 20px 0;
                width: 100%;
            }
    
            .contact-hero {
                padding-left: 15px;
                padding-right: 15px;
                width: 100%;
                max-width: 100%;
            }
    
            .contact-hero h1 {
                font-size: clamp(2rem, 5vw, 3rem);
                font-weight: bold;
                margin-bottom: 1rem;
            }
    
            .contact-hero p {
                font-size: clamp(1rem, 3vw, 1.2rem);
                max-width: min(600px, 90%);
                margin: 0 auto;
            }
    
            /* Reset container padding */
            .container {
                padding-left: 15px;
                padding-right: 15px;
                width: 100%;
                margin: 0 auto;
            }
    
            /* Reset row margins */
            .row {
                margin-left: -12px;
                margin-right: -12px;
            }
    
            .col-lg-4,  .col-md-6 {
                padding-left: 12px;
                padding-right: 12px;
            }
    
            .col-lg-8{
                padding-left: 12px;
                padding-right: 12px;
                justify-content: center;
            }
    
            /* Contact section adjustments */
            .contact-section {
                padding: 80px 0;
                background-color: var(--light-gray);
                position: relative;
                z-index: 1;
                display: flex;
                justify-content: center;
            }
    
            .container {
                padding-left: 15px;
                padding-right: 15px;
                width: 100%;
                max-width: 1200px;
                margin: 0 auto;
            }
    
            .col-lg-8 {
                padding-left: 12px;
                padding-right: 12px;
                margin: 0 auto;
                max-width: 800px;
            }
    
            .contact-info-card {
                background: white;
                padding: 30px;
                border-radius: var(--border-radius);
                box-shadow: var(--box-shadow);
                height: 100%;
                transition: var(--transition);
                margin-bottom: 20px;
            }
    
            .contact-info-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            }
    
            .contact-details {
                display: grid;
                gap: 20px;
                margin-bottom: 25px;
            }
    
            .contact-item {
                display: flex;
                align-items: flex-start;
                gap: 20px;
                padding: 15px;
                border-radius: var(--border-radius);
                transition: var(--transition);
            }
    
            .contact-item:hover {
                background-color: rgba(0, 73, 167, 0.05);
            }
    
            .contact-icon {
                width: 45px;
                height: 45px;
                background: var(--primary-color);
                color: white;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 1.2rem;
                flex-shrink: 0;
                transition: var(--transition);
            }
    
            .contact-item:hover .contact-icon {
                transform: scale(1.1);
                background: white;
                color: var(--primary-color);
                box-shadow: 0 0 0 3px var(--primary-color);
            }
    
            .contact-text h3 {
                font-size: 1.2rem;
                margin: 0 0 8px 0;
                color: var(--primary-color);
                font-weight: 600;
            }
    
            .contact-text p {
                font-size: 1rem;
                margin: 0;
                color: var(--text-color);
                line-height: 1.6;
            }
    
            .contact-social-links {
                display: flex;
                gap: 15px;
                margin: 25px 0;
            }
    
            .contact-social-links a {
                width: 40px;
                height: 40px;
                background: var(--primary-color);
                color: white;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 1.1rem;
                transition: var(--transition);
            }
    
            .contact-social-links a:hover {
                background: var(--secondary-color);
                transform: translateY(-3px) scale(1.1);
                box-shadow: 0 5px 15px rgba(0, 73, 167, 0.3);
            }
            .map-container {
                height: 250px;
                border-radius: var(--border-radius);
                overflow: hidden;
                box-shadow: var(--box-shadow);
                margin-top: 20px;
            }
    
            .contact-form {
                background: white;
                padding: 40px;
                border-radius: var(--border-radius);
                box-shadow: var(--box-shadow);
            }
    
            .contact-form h2 {
                font-size: 2rem;
                color: var(--primary-color);
                margin-bottom: 30px;
                font-weight: 600;
            }
    
            .form-group {
                margin-bottom: 25px;
            }
    
            .form-control {
                padding: 12px 15px;
                border: 1px solid #ddd;
                border-radius: var(--border-radius);
                transition: var(--transition);
            }
    
            .form-control:focus {
                border-color: var(--primary-color);
                box-shadow: 0 0 0 0.2rem rgba(0, 73, 167, 0.25);
            }
    
            textarea.form-control {
                min-height: 150px;
                resize: vertical;
            }
    
            .btn-submit {
                background: var(--primary-color);
                color: white;
                padding: 12px 30px;
                border-radius: var(--border-radius);
                border: none;
                font-weight: 600;
                transition: var(--transition);
            }
    
            .btn-submit:hover {
                background: var(--secondary-color);
                transform: translateY(-2px);
                box-shadow: 0 5px 15px rgba(0, 73, 167, 0.3);
            }
    
            /* Responsive adjustments */
            @media (max-width: 575.98px) {
                .contact-section {
                    padding: 30px 0;
                }
    
                .contact-info-card {
                    padding: 15px;
                    margin-bottom: 15px;
                }
    
                .contact-details {
                    gap: 12px;
                    margin-bottom: 12px;
                }
    
                .map-container {
                    height: 180px;
                    margin-top: 12px;
                }
    
                .contact-social-links {
                    margin: 12px 0;
                }
    
                .row {
                    margin-left: -8px;
                    margin-right: -8px;
                }
    
                .col-lg-4, .col-lg-8, .col-md-6 {
                    padding-left: 8px;
                    padding-right: 8px;
                }
            }
    
            @media (min-width: 576px) and (max-width: 767.98px) {
                .contact-section {
                    padding: 35px 0;
                }
    
                .contact-info-card {
                    padding: 18px;
                }
    
                .map-container {
                    height: 200px;
                }
            }
    
            @media (min-width: 768px) {
                .contact-section {
                    padding: 50px 0;
                }
    
                .contact-info-card {
                    padding: 25px;
                    margin-bottom: 0;
                }
    
                .contact-details {
                    gap: 20px;
                    margin-bottom: 20px;
                }
    
                .map-container {
                    height: 220px;
                    margin-top: 20px;
                }
            }
    
            @media (min-width: 992px) {
                .contact-section {
                    padding: 60px 0;
                }
    
                .contact-info-card {
                    padding: 30px;
                }
    
                .map-container {
                    height: 250px;
                }
            }
    
            /* Print Styles */
            @media print {
                .contact-hero {
                    height: auto;
                    margin: 20px 0;
                    background: none;
                    color: black;
                }
    
                .contact-info-card, .contact-form {
                    box-shadow: none;
                    border: 1px solid #ddd;
                }
    
                .map-container,
                .contact-social-links {
                    display: none;
                }
            }
    
            /* Responsive adjustments */
            @media (max-width: 767.98px) {
                .contact-item {
                    gap: 12px;
                }
                
                .contact-icon {
                    width: 35px;
                    height: 35px;
                    font-size: 0.9rem;
                }
            }
    
            /* Add these styles to your existing CSS */
            .alert {
                padding: 15px;
                margin-bottom: 20px;
                border: 1px solid transparent;
                border-radius: var(--border-radius);
            }
    
            .alert-success {
                color: #155724;
                background-color: #d4edda;
                border-color: #c3e6cb;
            }
    
            .alert-danger {
                color: #721c24;
                background-color: #f8d7da;
                border-color: #f5c6cb;
            }
    
            .spinner-border {
                display: inline-block;
                width: 1rem;
                height: 1rem;
                vertical-align: text-bottom;
                border: 0.25em solid currentColor;
                border-right-color: transparent;
                border-radius: 50%;
                animation: spinner-border .75s linear infinite;
            }
    
            @keyframes spinner-border {
                to { transform: rotate(360deg); }
            }
        </style>
   
        <!-- ===== CONTACT HERO SECTION ===== -->
        <section class="contact-hero" data-aos="fade-down">
            <div class="container">
                <h1>Get in Touch</h1>
                <p>We're here to help and answer any questions you might have. We look forward to hearing from you.</p>
            </div>
        </section>
    
        <!-- ===== CONTACT SECTION ===== -->
        <section class="contact-section" id="contact">
            <div class="container">
                    <!-- Contact Form -->
                        <div class="contact-form" data-aos="fade-left">
                            <h2>Send us a Message</h2>
                            <div id="form-message" class="alert" style="display: none;"></div>
                            <form id="contact-form" action="sendmail.php" method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Your Message" required></textarea>
                                </div>
                                <div class="text-end">
                                    <button type="submit" style="background-color: #0049a7; color: white;" class="btn btn-success">Send Message</button>
                                </div>
                            </form>
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
    
     
      @include('user-ui.footer')
    </body>
    </html>
    