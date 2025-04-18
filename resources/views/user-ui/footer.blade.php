@include('toastr')

<footer class="site-footer">
    <div class="footer-top">
        <div class="footer-column logo-column">
            <img src="{{ asset('asset/images/logbg.png') }}" alt="Cleanship Logo" class="footer-logo">
            <p class="slogan">Professional Marine Cleaning Servicess</p>
            <div class="footer-contact-info">
                <p><i class="bi bi-geo-alt"></i> B.C. 1302955, Ajman Free Zone C1 Building, UAE </p>
                <p><i class="bi bi-telephone"></i> +91 92365 20609 </p>
                <p><i class="bi bi-envelope"></i> ops@marinesupercargo.com </p>
            </div>
        </div>
        <div class="footer-column">
            <h3 class="footer-title">Quick Links</h3>
            <a href="index.html">Home</a>
            <!-- <a href="about.html">About Us</a> -->
            <a href="service.html">Services</a>
            <!-- <a href="process.html">Our Process</a> -->
            <a href="contact.html">Contact</a>
        </div>
        <div class="footer-column">
            <h3 class="footer-title">Support</h3>
            <a href="index.html#faq">FAQ</a>
            <!-- <a href="#">Help Center</a> -->
            <a href="privacy-policy.html">Privacy Policy</a>
            <!-- <a href="#">Terms of Service</a> -->
            <a href="index.html#mapss">map</a>
        </div>
        <div class="footer-column">
            <h3 class="footer-title">Services</h3>
            <a href="Hold-Cleaning-Services.html">Hold Cleaning</a>
            <a href="Tank-Cleaning-Services.html">Tank Cleaning</a>
            <a href="Hull-Cleaning-Services.html">Hull Cleaning</a>
            <a href="contact.html">Veg Oil Squeezy</a>
            <a href="contact.html">Deck Maintenance</a>
        </div>
        
    </div>

    <hr class="footer-divider" />

    <div class="footer-bottom">
        <div class="social-icons">
            <a href="https://www.facebook.com/marinesupercargo/" class="social-icon"><i class="fab fa-facebook-f"></i></a>
            <a href="https://x.com/Marinsupercargo" class="social-icon"><i class="fa-brands fa-x-twitter"></i></a>
            <a href="https://www.linkedin.com/company/marinsupercargo/" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
            <!-- <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a> -->
        </div>
        <p class="copyright">Copyright © 2024 Marine Super Cargo. All rights reserved.</p>
    </div>
</footer>

<style>
    :root {
        --primary-color: #0049a7; /* Example primary color */
    }

    .site-footer {
        background-color: #f8f9fa;
        color: #111;
        padding: 60px 15px 20px;
        font-family: Arial, sans-serif;
        position: relative;
        border-top: 1px solid rgba(0, 73, 167, 0.1);
    }

    .footer-top {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        gap: 100px;
        text-align: left;
        margin-bottom: 40px;
        max-width: 1200px;
        margin-left:  auto;
        margin-right: auto;
    }

    .footer-column {
        flex: 1;
        min-width: 180px;
        display: flex;
        flex-direction: column;
    }

    .logo-column {
        flex: 1.5;
    }

    .footer-logo {
        height: 90px;
        width:  150px;
        margin-bottom: 20px;
        transition: transform 0.3s ease;
    }

    .footer-logo:hover {
        transform: scale(1.05);
    }

    .logo-column .slogan {
        font-size: 16px;
        color: #666;
        line-height: 1.6;
        max-width: 300px;
        margin-bottom: 20px;
    }

    .footer-contact-info {
        margin-top: 15px;
    }

    .footer-contact-info p {
        display: flex;
        align-items: center;
        gap: 10px;
        margin: 8px 0;
        color: #666;
        font-size: 14px;
    }

    .footer-contact-info i {
        color: var(--primary-color);
        font-size: 16px;
    }

    .footer-title {
        font-size: 18px;
        color: var(--primary-color);
        margin-bottom: 25px;
        font-weight: 600;
        position: relative;
        padding-bottom: 10px;
    }

    .footer-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 40px;
        height: 3px;
        background: var(--primary-color);
        border-radius: 3px;
    }

    .footer-column a {
        margin: 8px 0;
        font-size: 14px;
        color: #444;
        text-decoration: none;
        transition: all 0.3s ease;
        display: inline-block;
        position: relative;
        padding-left: 0;
    }

    .footer-column a::before {
        content: '→';
        position: absolute;
        left: -20px;
        opacity: 0;
        transition: all 0.3s ease;
        color: var(--primary-color);
    }

    .footer-column a:hover {
        color: var(--primary-color);
        padding-left: 20px;
    }

    .footer-column a:hover::before {
        opacity: 1;
        left: 0;
    }

    .footer-divider {
        border: none;
        height: 1px;
        background: linear-gradient(to right, transparent, var(--primary-color), transparent);
        margin: 40px auto;
        max-width: 1200px;
        opacity: 0.1;
    }

    .footer-bottom {
        text-align: center;
        max-width: 1200px;
        margin-left: auto;
        margin-right: auto;
        padding-top: 20px;
    }

    .social-icons {
        margin-bottom: 25px;
        display: flex;
        justify-content: center;
        gap: 15px;
    }

    .social-icon {
        color: #444;
        width: 40px;
        height: 40px;
        line-height: 40px;
        text-align: center;
        border-radius: 50%;
        background: rgba(0, 73, 167, 0.05);
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .social-icon:hover {
        color: white;
        background: var(--primary-color);
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 73, 167, 0.2);
    }

    .footer-bottom p {
        font-size: 14px;
        color: #666;
        margin: 0;
    }

    /* Responsive Footer Styles */
    @media screen and (max-width: 992px) {
        .footer-top {
            gap: 40px;
        }

        .footer-column {
            min-width: 160px;
        }
    }

    @media screen and (max-width: 768px) {
        .site-footer {
            padding: 60px 15px 20px;
        }

        .footer-top {
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 0 20px;
            gap: 40px;
        }

        .footer-column {
            width: 100%;
            margin-bottom: 20px;
            align-items: center;
        }

        .logo-column {
            align-items: center;
        }

        .logo-column .slogan {
            margin: 0 auto;
        }

        .footer-title {
            margin-bottom: 20px;
        }

        .footer-title::after {
            left: 50%;
            transform: translateX(-50%);
        }

        .footer-contact-info {
            align-items: center;
        }

        .footer-contact-info p {
            justify-content: center;
        }

        .footer-column a {
            margin: 6px 0;
        }

        .social-icons {
            gap: 10px;
        }
    }

    @media screen and (max-width: 576px) {
        .footer-top {
            gap: 30px;
        }

        .footer-logo {
            height: 80px;
        }

        .social-icon {
            width: 35px;
            height: 35px;
            line-height: 35px;
            font-size: 16px;
        }

        .footer-bottom p {
            font-size: 12px;
        }
    }
</style>

