<div>
    <style>
        /* Hero Slider - Pure CSS/JS */
        .hero-slider {
            position: relative;
            width: 100%;
            height: 100vh;
            min-height: 600px;
            overflow: hidden;
            background: #1F3B8D;
        }

        .hero-slides {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .hero-slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1s ease-in-out;
            z-index: 1;
        }

        .hero-slide.active {
            opacity: 1;
            z-index: 2;
        }

        .hero-slide-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transform: scale(1);
            transition: transform 8s ease-out;
        }

        .hero-slide.active .hero-slide-bg {
            transform: scale(1.1);
        }

        .hero-slide-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(31, 59, 141, 0.85) 0%, rgba(0, 0, 0, 0.5) 100%);
            z-index: 1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100%;
            padding: 0 10%;
            max-width: 800px;
        }

        .hero-logo {
            width: 80px;
            height: 80px;
            margin-bottom: 20px;
            opacity: 0;
            transform: translateX(-30px);
            transition: all 0.6s ease-out 0.2s;
        }

        .hero-slide.active .hero-logo {
            opacity: 1;
            transform: translateX(0);
        }

        .hero-title {
            color: #FEFFFF;
            font-size: clamp(2.5rem, 6vw, 5rem);
            font-weight: 800;
            font-family: 'Roboto Slab', serif;
            text-shadow: 0 4px 20px rgba(31, 59, 141, 0.5);
            letter-spacing: -2px;
            margin: 0 0 20px 0;
            line-height: 1.1;
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease-out 0.4s;
        }

        .hero-slide.active .hero-title {
            opacity: 1;
            transform: translateY(0);
        }

        .hero-description {
            color: #F9FAFF;
            font-size: clamp(1rem, 2vw, 1.25rem);
            font-weight: 400;
            font-family: 'Source Sans Pro', sans-serif;
            line-height: 1.8;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.7);
            margin: 0 0 30px 0;
            max-width: 500px;
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease-out 0.6s;
        }

        .hero-slide.active .hero-description {
            opacity: 1;
            transform: translateY(0);
        }

        .hero-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease-out 0.8s;
        }

        .hero-slide.active .hero-buttons {
            opacity: 1;
            transform: translateY(0);
        }

        .btn-primary {
            background-color: #FF621B;
            color: #FEFFFF !important;
            border: none;
            padding: 16px 36px;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
            font-size: 14px;
            border-radius: 50px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(255, 98, 27, 0.4);
            text-decoration: none;
            display: inline-block;
            font-family: 'Source Sans Pro', sans-serif;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #e55516;
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(255, 98, 27, 0.5);
        }

        .btn-secondary {
            background-color: transparent;
            color: #FEFFFF !important;
            border: 2px solid #FEFFFF;
            padding: 14px 34px;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
            font-size: 14px;
            border-radius: 50px;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            font-family: 'Source Sans Pro', sans-serif;
            cursor: pointer;
        }

        .btn-secondary:hover {
            background-color: #FEFFFF;
            color: #1F3B8D !important;
            transform: translateY(-3px);
        }

        /* Navigation Arrows */
        .hero-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 10;
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.15);
            border: none;
            border-radius: 50%;
            color: #FEFFFF;
            font-size: 18px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero-nav:hover {
            background: #FF621B;
        }

        .hero-nav-prev {
            left: 20px;
        }

        .hero-nav-next {
            right: 20px;
        }

        /* Pagination Dots */
        .hero-pagination {
            position: absolute;
            bottom: 40px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
            display: flex;
            gap: 10px;
        }

        .hero-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            padding: 0;
        }

        .hero-dot.active {
            background: #FF621B;
            width: 30px;
            border-radius: 6px;
        }

        /* Scroll Indicator */
        .scroll-indicator {
            position: absolute;
            bottom: 100px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateX(-50%) translateY(0); }
            40% { transform: translateX(-50%) translateY(-10px); }
            60% { transform: translateX(-50%) translateY(-5px); }
        }

        .scroll-indicator a {
            color: #FEFFFF;
            font-size: 24px;
            text-decoration: none;
        }

        /* Mobile */
        @media (max-width: 768px) {
            .hero-content {
                padding: 0 5%;
            }
            .hero-nav {
                display: none;
            }
            .btn-primary, .btn-secondary {
                padding: 12px 24px;
                font-size: 12px;
            }
            .scroll-indicator {
                bottom: 80px;
            }
        }
    </style>

    <div class="hero-slider" id="heroSlider">
        <div class="hero-slides">
            <!-- Slide 1 -->
            <div class="hero-slide active" data-index="0">
                <img src="{{ asset('/vf/n4.jpg') }}" alt="Digital transformation solutions - ZIMA Solutions" class="hero-slide-bg" loading="eager">
                <div class="hero-slide-overlay"></div>
                <div class="hero-content">
                    <img src="{{ asset('/vf/zima2.png') }}" alt="ZIMA Solutions logo" class="hero-logo">
                    <h1 class="hero-title">DIGITAL TRANSFORMATION</h1>
                    <p class="hero-description">Empowering financial institutions, government agencies, and enterprises through secure, scalable, and intelligent systems that drive operational excellence.</p>
                    <div class="hero-buttons">
                        <a href="#about" class="btn-primary">Explore Solutions</a>
                        <a href="#contact" class="btn-secondary">Get Started</a>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="hero-slide" data-index="1">
                <img src="{{ asset('/vf/n5.jpeg') }}" alt="Enterprise software solutions - ZIMA Solutions" class="hero-slide-bg" loading="lazy">
                <div class="hero-slide-overlay"></div>
                <div class="hero-content">
                    <img src="{{ asset('/vf/zima2.png') }}" alt="ZIMA Solutions logo" class="hero-logo">
                    <h2 class="hero-title">ENTERPRISE SOLUTIONS</h2>
                    <p class="hero-description">From loan management to payment gateways, HR systems to data warehousing - we build mission-critical platforms that transform how organizations operate.</p>
                    <div class="hero-buttons">
                        <a href="#services" class="btn-primary">View Solutions</a>
                        <a href="#contact" class="btn-secondary">Request Demo</a>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="hero-slide" data-index="2">
                <img src="{{ asset('/vf/n6.jpeg') }}" alt="RTGS TIPS GePG integration - ZIMA Solutions" class="hero-slide-bg" loading="lazy">
                <div class="hero-slide-overlay"></div>
                <div class="hero-content">
                    <img src="{{ asset('/vf/zima2.png') }}" alt="ZIMA Solutions logo" class="hero-logo">
                    <h2 class="hero-title">BUILD YOUR FUTURE</h2>
                    <p class="hero-description">Seamless integration with BOT systems, mobile money platforms, and enterprise infrastructure. Your trusted partner for digital transformation across Africa.</p>
                    <div class="hero-buttons">
                        <a href="#impact" class="btn-primary">Our Projects</a>
                        <a href="#contact" class="btn-secondary">Partner With Us</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <button class="hero-nav hero-nav-prev" aria-label="Previous slide">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button class="hero-nav hero-nav-next" aria-label="Next slide">
            <i class="fas fa-chevron-right"></i>
        </button>

        <!-- Pagination -->
        <div class="hero-pagination">
            <button class="hero-dot active" data-slide="0" aria-label="Go to slide 1"></button>
            <button class="hero-dot" data-slide="1" aria-label="Go to slide 2"></button>
            <button class="hero-dot" data-slide="2" aria-label="Go to slide 3"></button>
        </div>

        <!-- Scroll Indicator -->
        <div class="scroll-indicator">
            <a href="#about" aria-label="Scroll down"><i class="fas fa-chevron-down"></i></a>
        </div>
    </div>

    <script>
        (function() {
            var currentSlide = 0;
            var totalSlides = 3;
            var autoplayInterval;
            var slider = document.getElementById('heroSlider');

            if (!slider) return;

            var slides = slider.querySelectorAll('.hero-slide');
            var dots = slider.querySelectorAll('.hero-dot');
            var prevBtn = slider.querySelector('.hero-nav-prev');
            var nextBtn = slider.querySelector('.hero-nav-next');

            function goToSlide(index) {
                // Remove active from all
                slides.forEach(function(slide) { slide.classList.remove('active'); });
                dots.forEach(function(dot) { dot.classList.remove('active'); });

                // Set new active
                currentSlide = index;
                if (currentSlide >= totalSlides) currentSlide = 0;
                if (currentSlide < 0) currentSlide = totalSlides - 1;

                slides[currentSlide].classList.add('active');
                dots[currentSlide].classList.add('active');
            }

            function nextSlide() {
                goToSlide(currentSlide + 1);
            }

            function prevSlide() {
                goToSlide(currentSlide - 1);
            }

            function startAutoplay() {
                autoplayInterval = setInterval(nextSlide, 6000);
            }

            function resetAutoplay() {
                clearInterval(autoplayInterval);
                startAutoplay();
            }

            // Event listeners
            if (prevBtn) {
                prevBtn.addEventListener('click', function() {
                    prevSlide();
                    resetAutoplay();
                });
            }

            if (nextBtn) {
                nextBtn.addEventListener('click', function() {
                    nextSlide();
                    resetAutoplay();
                });
            }

            dots.forEach(function(dot) {
                dot.addEventListener('click', function() {
                    var slideIndex = parseInt(this.getAttribute('data-slide'));
                    goToSlide(slideIndex);
                    resetAutoplay();
                });
            });

            // Start autoplay
            startAutoplay();
        })();
    </script>
</div>
