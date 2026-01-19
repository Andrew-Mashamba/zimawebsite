<div>
    <style>
        .zima-footer {
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%);
            color: #ffffff;
            padding: 60px 40px 20px;
        }

        .footer-container {
            max-width: 1400px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 40px;
        }

        .footer-section h4 {
            font-family: 'Roboto Slab', serif;
            font-size: 18px;
            font-weight: 700;
            color: #FF621B;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid rgba(255, 98, 27, 0.3);
        }

        .footer-about p {
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 14px;
            line-height: 1.7;
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 20px;
        }

        .footer-logo {
            font-family: 'Roboto Slab', serif;
            font-size: 32px;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 15px;
        }

        .footer-section ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-section ul li {
            margin-bottom: 12px;
        }

        .footer-section ul li a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .footer-section ul li a:hover {
            color: #FF621B;
            padding-left: 5px;
        }

        .footer-contact-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
            color: rgba(255, 255, 255, 0.8);
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 14px;
        }

        .footer-contact-item i {
            color: #FF621B;
            margin-right: 12px;
            margin-top: 3px;
            width: 16px;
        }

        .footer-contact-item a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
        }

        .footer-contact-item a:hover {
            color: #FF621B;
        }

        .footer-social {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }

        .footer-social a {
            width: 36px;
            height: 36px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .footer-social a:hover {
            background: #FF621B;
            transform: translateY(-3px);
        }

        .footer-bottom {
            max-width: 1400px;
            margin: 40px auto 0;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        .footer-bottom p {
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 13px;
            color: rgba(255, 255, 255, 0.6);
            margin: 0;
        }

        .footer-bottom-links {
            display: flex;
            gap: 20px;
        }

        .footer-bottom-links a {
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 13px;
            color: rgba(255, 255, 255, 0.6);
            text-decoration: none;
        }

        .footer-bottom-links a:hover {
            color: #FF621B;
        }

        @media (max-width: 992px) {
            .footer-container {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 576px) {
            .footer-container {
                grid-template-columns: 1fr;
            }
            .footer-bottom {
                flex-direction: column;
                text-align: center;
            }
        }
    </style>

    <footer class="zima-footer" role="contentinfo" aria-label="Site Footer">
        <div class="footer-container">
            <!-- About Section -->
            <div class="footer-section footer-about">
                <div class="footer-logo">ZIMA</div>
                <p>Forward-thinking technology company specializing in digital transformation for financial institutions, government agencies, and enterprises in Tanzania.</p>
                <div class="footer-social" aria-label="Social Media Links">
                    <a href="https://www.linkedin.com/company/zima-solutions" target="_blank" rel="nofollow noopener noreferrer" aria-label="Follow ZIMA Solutions on LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="https://www.facebook.com/zimasolutions" target="_blank" rel="nofollow noopener noreferrer" aria-label="Follow ZIMA Solutions on Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://twitter.com/zimasolutions" target="_blank" rel="nofollow noopener noreferrer" aria-label="Follow ZIMA Solutions on Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.instagram.com/zimasolutions" target="_blank" rel="nofollow noopener noreferrer" aria-label="Follow ZIMA Solutions on Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <nav class="footer-section" aria-label="Quick Links">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About Us</a></li>
                    <li><a href="/service">Solutions</a></li>
                    <li><a href="/team">Projects</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </nav>

            <!-- Services -->
            <nav class="footer-section" aria-label="Our Services">
                <h4>Our Solutions</h4>
                <ul>
                    <li><a href="/service#rtgs">RTGS & TIPS Integration</a></li>
                    <li><a href="/service#gepg">GePG Gateway</a></li>
                    <li><a href="/service#api">API Gateway</a></li>
                    <li><a href="/service#microfinance">Microfinance & SACCOS</a></li>
                    <li><a href="/service#loans">Loan Management</a></li>
                    <li><a href="/service#enterprise">Enterprise Systems</a></li>
                    <li><a href="/service">View All Solutions</a></li>
                </ul>
            </nav>

            <!-- Contact Info -->
            <div class="footer-section">
                <h4>Contact Us</h4>
                <div class="footer-contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Makongo, Near Ardhi University<br>Kinondoni, Dar es Salaam, Tanzania</span>
                </div>
                <div class="footer-contact-item">
                    <i class="fas fa-phone-alt"></i>
                    <a href="tel:+255692410353">+255 69 241 0353</a>
                </div>
                <div class="footer-contact-item">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:info@zima.co.tz">info@zima.co.tz</a>
                </div>
                <div class="footer-contact-item">
                    <i class="fas fa-clock"></i>
                    <span>Mon - Fri: 8:00 AM - 5:00 PM</span>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} ZIMA Solutions Limited. All Rights Reserved. TIN: 181-314-605</p>
            <div class="footer-bottom-links">
                <a href="/privacy-policy">Privacy Policy</a>
                <a href="/terms-of-service">Terms of Service</a>
            </div>
        </div>
    </footer>
</div>
