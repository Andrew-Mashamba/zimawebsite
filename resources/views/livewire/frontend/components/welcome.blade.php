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

        .hero-slide picture {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: block;
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
            align-items: center;
            justify-content: center;
            height: 100%;
            padding: 0 5vw;
            text-align: center;
        }

        .hero-copy {
            width: 100%;
            max-width: 820px;
            margin: 0 auto;
        }

        /* Match natural aspect ratio of zima2.png (348×426 ≈ 0.82) to avoid aspect-ratio best-practice warning */
        .hero-logo {
            width: 72px;
            height: 88px;
            object-fit: contain;
            margin-bottom: 1.25rem;
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.5s ease-out 0.15s;
        }

        .hero-slide.active .hero-logo {
            opacity: 1;
            transform: translateY(0);
        }

        .hero-title {
            color: #FEFFFF;
            font-size: clamp(2rem, 5vw, 3.5rem);
            font-weight: 800;
            font-family: 'Roboto Slab', serif;
            text-shadow: 0 2px 24px rgba(0, 0, 0, 0.4);
            letter-spacing: -0.02em;
            margin: 0 0 1rem 0;
            line-height: 1.15;
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.5s ease-out 0.25s;
        }

        .hero-slide.active .hero-title {
            opacity: 1;
            transform: translateY(0);
        }

        .hero-description {
            color: rgba(254, 255, 255, 0.95);
            font-size: clamp(0.9375rem, 1.8vw, 1.125rem);
            font-weight: 400;
            font-family: 'Source Sans Pro', sans-serif;
            line-height: 1.65;
            text-shadow: 0 1px 8px rgba(0, 0, 0, 0.5);
            margin: 0 0 1.75rem 0;
            max-width: 100%;
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.5s ease-out 0.35s;
        }

        .hero-slide.active .hero-description {
            opacity: 1;
            transform: translateY(0);
        }

        .hero-buttons {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 12px;
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.5s ease-out 0.45s;
        }

        .hero-slide.active .hero-buttons {
            opacity: 1;
            transform: translateY(0);
        }

        .hero-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.875rem 1.75rem;
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: 700;
            font-size: 0.875rem;
            letter-spacing: 0.04em;
            text-transform: uppercase;
            text-decoration: none;
            border-radius: 2.5rem;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            cursor: pointer;
            border: none;
        }

        .hero-btn-primary {
            background: #D95214;
            color: #FEFFFF;
            box-shadow: 0 4px 14px rgba(217, 82, 20, 0.4);
        }

        .hero-btn-primary:hover {
            background: #C44A12;
            color: #FEFFFF;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255, 98, 27, 0.5);
        }

        .hero-btn-secondary {
            background: transparent;
            color: #FEFFFF;
            border: 2px solid rgba(254, 255, 255, 0.9);
        }

        .hero-btn-secondary:hover {
            background: rgba(254, 255, 255, 0.15);
            color: #FEFFFF;
            transform: translateY(-2px);
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

        .hero-nav:focus-visible {
            outline: 2px solid #FEFFFF;
            outline-offset: 2px;
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
            gap: 12px;
            align-items: center;
        }

        /* Touch target min 44×44px (accessibility); visual dot centered */
        .hero-dot {
            min-width: 44px;
            min-height: 44px;
            padding: 0;
            border-radius: 50%;
            background: transparent;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero-dot::before {
            content: '';
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
        }

        .hero-dot.active::before {
            width: 20px;
            height: 12px;
            border-radius: 6px;
            background: #D95214;
        }

        .hero-dot:focus-visible {
            outline: 2px solid #FEFFFF;
            outline-offset: 2px;
        }

        .hero-btn:focus-visible {
            outline: 2px solid #FEFFFF;
            outline-offset: 2px;
        }

        .hero-slider:focus-visible {
            outline: 2px solid #FEFFFF;
            outline-offset: 2px;
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
                padding: 0 6%;
            }
            .hero-copy {
                max-width: 100%;
            }
            .hero-nav {
                display: none;
            }
            .hero-btn {
                padding: 0.75rem 1.5rem;
                font-size: 0.8125rem;
            }
            .scroll-indicator {
                bottom: 80px;
            }
        }
    </style>

    <div class="hero-slider" id="heroSlider" role="region" aria-label="Hero carousel" aria-roledescription="carousel" tabindex="0">
        <div class="hero-slides">
            <!-- Slide 1 (LCP image: fetchpriority=high, no lazy; WebP with JPEG fallback) -->
            <div class="hero-slide active" data-index="0" aria-hidden="false">
                <picture>
                    <source type="image/webp" srcset="{{ asset('/vf/n4.webp') }}">
                    <img src="{{ asset('/vf/n4.jpg') }}" alt="Digital transformation solutions - ZIMA Solutions" class="hero-slide-bg" loading="eager" decoding="async" fetchpriority="high" width="1680" height="940">
                </picture>
                <div class="hero-slide-overlay"></div>
                <div class="hero-content">
                    <div class="hero-copy">
                        <img src="{{ asset('/vf/zima2.png') }}" alt="ZIMA Solutions logo" class="hero-logo" width="72" height="88" decoding="async">
                        <h1 class="hero-title">Digital transformation</h1>
                        <p class="hero-description">Empowering financial institutions, government agencies, and enterprises through secure, scalable, and intelligent systems that drive operational excellence.</p>
                        <div class="hero-buttons">
                            <a href="#about" class="hero-btn hero-btn-primary">Explore solutions</a>
                            <a href="{{ route('contact') }}" class="hero-btn hero-btn-secondary">Get started</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 (WebP with JPEG fallback) -->
            <div class="hero-slide" data-index="1" aria-hidden="true">
                <picture>
                    <source type="image/webp" srcset="{{ asset('/vf/n5.webp') }}">
                    <img src="{{ asset('/vf/n5.jpeg') }}" alt="Enterprise software solutions - ZIMA Solutions" class="hero-slide-bg" loading="lazy" decoding="async" width="1680" height="940">
                </picture>
                <div class="hero-slide-overlay"></div>
                <div class="hero-content">
                    <div class="hero-copy">
                        <img src="{{ asset('/vf/zima2.png') }}" alt="ZIMA Solutions logo" class="hero-logo" width="72" height="88" decoding="async">
                        <h2 class="hero-title">Enterprise solutions</h2>
                        <p class="hero-description">From loan management to payment gateways, HR systems to data warehousing—we build mission-critical platforms that transform how organizations operate.</p>
                        <div class="hero-buttons">
                            <a href="#about" class="hero-btn hero-btn-primary">View solutions</a>
                            <a href="{{ route('contact') }}" class="hero-btn hero-btn-secondary">Request demo</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 (WebP with JPEG fallback) -->
            <div class="hero-slide" data-index="2" aria-hidden="true">
                <picture>
                    <source type="image/webp" srcset="{{ asset('/vf/n6.webp') }}">
                    <img src="{{ asset('/vf/n6.jpeg') }}" alt="RTGS TIPS GePG integration - ZIMA Solutions" class="hero-slide-bg" loading="lazy" decoding="async" width="1680" height="940">
                </picture>
                <div class="hero-slide-overlay"></div>
                <div class="hero-content">
                    <div class="hero-copy">
                        <img src="{{ asset('/vf/zima2.png') }}" alt="ZIMA Solutions logo" class="hero-logo" width="72" height="88" decoding="async">
                        <h2 class="hero-title">Build your future</h2>
                        <p class="hero-description">Seamless integration with BOT systems, mobile money platforms, and enterprise infrastructure. Your trusted partner for digital transformation across Africa.</p>
                        <div class="hero-buttons">
                            <a href="#about" class="hero-btn hero-btn-primary">Our solutions</a>
                            <a href="{{ route('contact') }}" class="hero-btn hero-btn-secondary">Partner with us</a>
                        </div>
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
        <div class="hero-pagination" role="group" aria-label="Slide navigation">
            <button class="hero-dot active" data-slide="0" aria-label="Go to slide 1" aria-current="true"></button>
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
                slides.forEach(function(slide) {
                    slide.classList.remove('active');
                    slide.setAttribute('aria-hidden', 'true');
                });
                dots.forEach(function(dot) {
                    dot.classList.remove('active');
                    dot.removeAttribute('aria-current');
                });

                // Set new active
                currentSlide = index;
                if (currentSlide >= totalSlides) currentSlide = 0;
                if (currentSlide < 0) currentSlide = totalSlides - 1;

                slides[currentSlide].classList.add('active');
                slides[currentSlide].setAttribute('aria-hidden', 'false');
                dots[currentSlide].classList.add('active');
                dots[currentSlide].setAttribute('aria-current', 'true');
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
                    var slideIndex = parseInt(this.getAttribute('data-slide'), 10);
                    goToSlide(slideIndex);
                    resetAutoplay();
                });
            });

            // Keyboard: arrow keys when focus is inside the slider
            slider.addEventListener('keydown', function(e) {
                if (e.key === 'ArrowLeft') {
                    e.preventDefault();
                    prevSlide();
                    resetAutoplay();
                } else if (e.key === 'ArrowRight') {
                    e.preventDefault();
                    nextSlide();
                    resetAutoplay();
                }
            });

            // Start autoplay
            startAutoplay();
        })();
    </script>
</div>
