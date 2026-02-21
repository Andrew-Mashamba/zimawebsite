<!DOCTYPE html>
<html lang="en" itemscope itemtype="https://schema.org/WebPage">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ============================================================
         SEARCH ENGINE VERIFICATION TAGS
         ============================================================
         To verify your site with search engines, add verification codes
         to your .env file:

         GOOGLE SEARCH CONSOLE:
         1. Go to https://search.google.com/search-console
         2. Click "Add Property" → enter https://zima.co.tz
         3. Choose "URL prefix" → "HTML tag" verification
         4. Copy the content value and add to .env:
            GOOGLE_SITE_VERIFICATION=your_code_here

         BING WEBMASTER TOOLS:
         1. Go to https://www.bing.com/webmasters
         2. Add your site → choose "HTML Meta Tag"
         3. Copy the content value and add to .env:
            BING_SITE_VERIFICATION=your_code_here

         IMPORTANT: Do NOT remove these tags after verification!
         ============================================================ -->
    @if(config('services.google.site_verification'))
    <meta name="google-site-verification" content="{{ config('services.google.site_verification') }}">
    @endif
    @if(config('services.bing.site_verification'))
    <meta name="msvalidate.01" content="{{ config('services.bing.site_verification') }}">
    @endif
    @if(config('services.yandex.site_verification'))
    <meta name="yandex-verification" content="{{ config('services.yandex.site_verification') }}">
    @endif

    <!-- Primary Meta Tags: <title> uses title if set, else meta_title so all pages show correct tab/snippet -->
    <title>@hasSection('title')@yield('title')@else@yield('meta_title', 'ZIMA Solutions Limited - Digital Transformation & Enterprise Integration in Tanzania')@endif</title>
    <meta name="title" content="@yield('meta_title', 'ZIMA Solutions Limited - Digital Transformation & Enterprise Integration in Tanzania')">
    <meta name="description" content="@yield('meta_description', 'ZIMA Solutions Limited is a leading technology company in Tanzania specializing in RTGS, TIPS, GePG integration, API gateways, and digital transformation for financial institutions and government agencies.')">
    <meta name="keywords" content="@yield('meta_keywords', 'ZIMA Solutions, digital transformation Tanzania, RTGS integration, TIPS integration, GePG gateway, API gateway, fintech Tanzania, enterprise software, BOT compliance, mobile money integration, Dar es Salaam')">
    <meta name="author" content="ZIMA Solutions Limited">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="googlebot" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/vf/zima.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('/vf/zima.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/vf/zima.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/vf/zima.png') }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('og_title', 'ZIMA Solutions Limited - Build Your Future')">
    <meta property="og:description" content="@yield('og_description', 'Transforming digital futures through secure, scalable enterprise solutions. Specializing in RTGS, TIPS, GePG integration and digital transformation.')">
    <meta property="og:image" content="@yield('og_image', asset('/vf/zima.png'))">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="ZIMA Solutions Limited">
    <meta property="og:locale" content="en_US">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="@yield('twitter_title', 'ZIMA Solutions Limited - Build Your Future')">
    <meta name="twitter:description" content="@yield('twitter_description', 'Transforming digital futures through secure, scalable enterprise solutions. RTGS, TIPS, GePG integration experts in Tanzania.')">
    <meta name="twitter:image" content="@yield('twitter_image', asset('/vf/zima.png'))">

    <!-- Geographic Meta Tags -->
    <meta name="geo.region" content="TZ-05">
    <meta name="geo.placename" content="Dar es Salaam">
    <meta name="geo.position" content="-6.7924;39.2083">
    <meta name="ICBM" content="-6.7924, 39.2083">

    <!-- Structured Data - Organization (Enhanced per Google Guidelines) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "@id": "{{ url('/') }}#organization",
        "name": "ZIMA Solutions Limited",
        "alternateName": ["ZIMA", "Zima Solutions", "ZIMA TZ"],
        "legalName": "ZIMA Solutions Limited",
        "url": "{{ url('/') }}",
        "logo": {
            "@type": "ImageObject",
            "url": "{{ asset('/vf/zima.png') }}",
            "width": 512,
            "height": 512,
            "caption": "ZIMA Solutions Limited Logo"
        },
        "image": [
            "{{ asset('/vf/zima.png') }}",
            "{{ asset('/vf/zima2.png') }}"
        ],
        "description": "Forward-thinking technology and business innovation company specializing in digital transformation for financial institutions, government agencies, and enterprises in Tanzania. Expert in RTGS, TIPS, GePG integration, API gateways, and enterprise software development.",
        "foundingDate": "2020",
        "numberOfEmployees": {
            "@type": "QuantitativeValue",
            "minValue": 10,
            "maxValue": 50
        },
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Makongo, Near Ardhi University",
            "addressLocality": "Dar es Salaam",
            "addressRegion": "Kinondoni",
            "postalCode": "",
            "addressCountry": "TZ"
        },
        "contactPoint": [
            {
                "@type": "ContactPoint",
                "telephone": "+255-69-241-0353",
                "contactType": "customer service",
                "email": "info@zima.co.tz",
                "availableLanguage": ["en", "sw"],
                "areaServed": "TZ",
                "hoursAvailable": {
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
                    "opens": "08:00",
                    "closes": "17:00"
                }
            },
            {
                "@type": "ContactPoint",
                "telephone": "+255-69-241-0353",
                "contactType": "sales",
                "email": "info@zima.co.tz",
                "availableLanguage": ["en", "sw"],
                "areaServed": "TZ"
            },
            {
                "@type": "ContactPoint",
                "telephone": "+255-69-241-0353",
                "contactType": "technical support",
                "email": "info@zima.co.tz",
                "availableLanguage": ["en", "sw"],
                "areaServed": "TZ"
            }
        ],
        "areaServed": [
            {
                "@type": "Country",
                "name": "Tanzania"
            },
            {
                "@type": "GeoCircle",
                "geoMidpoint": {
                    "@type": "GeoCoordinates",
                    "latitude": -6.7924,
                    "longitude": 39.2083
                },
                "geoRadius": "500 km"
            }
        ],
        "knowsAbout": [
            "RTGS Integration",
            "TIPS Integration",
            "GePG Gateway",
            "API Gateway Development",
            "Digital Transformation",
            "Enterprise Software",
            "Financial Technology",
            "Payment Systems",
            "Bank of Tanzania Compliance",
            "Mobile Money Integration",
            "Loan Management Systems"
        ],
        "sameAs": [
            "https://www.linkedin.com/company/zima-solutions",
            "https://www.facebook.com/zimasolutions",
            "https://twitter.com/zimasolutions",
            "https://www.instagram.com/zimasolutions"
        ],
        "taxID": "181-314-605",
        "slogan": "Build Your Future"
    }
    </script>

    <!-- Structured Data - ProfessionalService (LocalBusiness subtype for tech consulting) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ProfessionalService",
        "@id": "{{ url('/') }}#localbusiness",
        "name": "ZIMA Solutions Limited",
        "image": [
            "{{ asset('/vf/zima.png') }}",
            "{{ asset('/vf/zima2.png') }}"
        ],
        "logo": "{{ asset('/vf/zima.png') }}",
        "description": "Professional technology consulting and enterprise software integration services specializing in financial technology solutions for banks and government agencies in Tanzania.",
        "url": "{{ url('/') }}",
        "priceRange": "$$$",
        "currenciesAccepted": "TZS, USD",
        "paymentAccepted": "Bank Transfer, Mobile Money",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Makongo, Near Ardhi University",
            "addressLocality": "Dar es Salaam",
            "addressRegion": "Kinondoni",
            "addressCountry": "TZ"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": -6.79240,
            "longitude": 39.20830
        },
        "telephone": "+255692410353",
        "email": "info@zima.co.tz",
        "openingHoursSpecification": [
            {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
                "opens": "08:00:00",
                "closes": "17:00:00"
            },
            {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": "Saturday",
                "opens": "09:00:00",
                "closes": "13:00:00"
            }
        ],
        "serviceArea": {
            "@type": "Country",
            "name": "Tanzania"
        },
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Enterprise Integration Services",
            "itemListElement": [
                {
                    "@type": "OfferCatalog",
                    "name": "Payment Integration",
                    "itemListElement": [
                        {
                            "@type": "Offer",
                            "itemOffered": {
                                "@type": "Service",
                                "name": "RTGS Integration"
                            }
                        },
                        {
                            "@type": "Offer",
                            "itemOffered": {
                                "@type": "Service",
                                "name": "TIPS Integration"
                            }
                        },
                        {
                            "@type": "Offer",
                            "itemOffered": {
                                "@type": "Service",
                                "name": "GePG Gateway"
                            }
                        }
                    ]
                },
                {
                    "@type": "OfferCatalog",
                    "name": "Software Solutions",
                    "itemListElement": [
                        {
                            "@type": "Offer",
                            "itemOffered": {
                                "@type": "Service",
                                "name": "API Gateway Service"
                            }
                        },
                        {
                            "@type": "Offer",
                            "itemOffered": {
                                "@type": "Service",
                                "name": "Loan Management System"
                            }
                        },
                        {
                            "@type": "Offer",
                            "itemOffered": {
                                "@type": "Service",
                                "name": "Custom Software Development"
                            }
                        }
                    ]
                }
            ]
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.9",
            "bestRating": "5",
            "worstRating": "1",
            "ratingCount": "50"
        },
        "parentOrganization": {
            "@id": "{{ url('/') }}#organization"
        }
    }
    </script>

    <!-- Structured Data - WebSite with SearchAction -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "@id": "{{ url('/') }}#website",
        "name": "ZIMA Solutions Limited",
        "alternateName": "ZIMA",
        "url": "{{ url('/') }}",
        "description": "Digital transformation and enterprise integration solutions for financial institutions and government agencies in Tanzania",
        "inLanguage": "en",
        "publisher": {
            "@id": "{{ url('/') }}#organization"
        },
        "potentialAction": {
            "@type": "SearchAction",
            "target": {
                "@type": "EntryPoint",
                "urlTemplate": "{{ url('/') }}?q={search_term_string}"
            },
            "query-input": "required name=search_term_string"
        }
    }
    </script>

    <!-- Structured Data - Logo (for Google Knowledge Panel) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "url": "{{ url('/') }}",
        "logo": "{{ asset('/vf/zima.png') }}"
    }
    </script>

    <!-- Structured Data - Site Navigation -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "SiteNavigationElement",
        "name": "Main Navigation",
        "hasPart": [
            {
                "@type": "WebPage",
                "name": "Home",
                "url": "{{ url('/') }}"
            },
            {
                "@type": "WebPage",
                "name": "About",
                "url": "{{ url('/about') }}"
            },
            {
                "@type": "WebPage",
                "name": "Solutions",
                "url": "{{ url('/service') }}"
            },
            {
                "@type": "WebPage",
                "name": "Projects",
                "url": "{{ url('/team') }}"
            },
            {
                "@type": "WebPage",
                "name": "Contact",
                "url": "{{ url('/contact') }}"
            }
        ]
    }
    </script>

    @yield('structured_data')

    <!-- Language and Regional Targeting -->
    <link rel="alternate" hreflang="en" href="{{ url()->current() }}">
    <link rel="alternate" hreflang="x-default" href="{{ url()->current() }}">

    <!-- Preconnect to critical third-party origins -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>

    <!-- Preload LCP image for faster rendering -->
    <link rel="preload" as="image" href="{{ asset('/vf/n4.webp') }}" type="image/webp" fetchpriority="high">

    <!-- DNS Prefetch for third-party resources -->
    <link rel="dns-prefetch" href="https://fonts.googleapis.com">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">

    <!-- Google Fonts: load async to avoid render blocking (LCP) -->
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;700&family=Source+Sans+Pro:wght@300;400;600;700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;700&family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet"></noscript>

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Livewire Styles -->
    @livewireStyles

    <!-- Critical CSS -->
    <style>
        /* Font Awesome font-display override for better LCP */
        @font-face {
            font-family: 'Font Awesome 6 Free';
            font-display: swap;
        }
        @font-face {
            font-family: 'Font Awesome 6 Brands';
            font-display: swap;
        }
        @font-face {
            font-family: 'fa-brands-400';
            font-display: swap;
        }
        @font-face {
            font-family: 'fa-solid-900';
            font-display: swap;
        }

        /* Reset browser defaults */
        *, *::before, *::after {
            box-sizing: border-box;
        }
        html, body {
            margin: 0;
            padding: 0;
        }

        /* Smooth scrolling */
        @media (prefers-reduced-motion: no-preference) {
            html {
                scroll-behavior: smooth;
            }
        }

        /* Scroll padding for fixed header */
        html {
            scroll-padding-top: 100px;
        }

        /* Prevent layout shift */
        img, video, iframe {
            max-width: 100%;
            height: auto;
        }

        /* Font optimization */
        body {
            font-synthesis: none;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        /* Touch target optimization */
        a, button, [role="button"], input, select, textarea {
            touch-action: manipulation;
        }

        /* Visible focus for keyboard users (manual a11y check) */
        a:focus-visible,
        button:focus-visible,
        [role="button"]:focus-visible,
        input:focus-visible,
        select:focus-visible,
        textarea:focus-visible {
            outline: 2px solid var(--color-primary, #1F3B8D);
            outline-offset: 2px;
        }
        a:focus-visible {
            outline-color: var(--color-secondary, #FF621B);
        }

        /* Mobile optimizations */
        @media (max-width: 768px) {
            html, body {
                overflow-x: hidden;
                max-width: 100vw;
            }
            body {
                font-size: 16px;
            }
            input, select, textarea {
                font-size: 16px;
            }
        }

        /* Safe area for notched devices */
        @supports (padding: env(safe-area-inset-bottom)) {
            body {
                padding-bottom: env(safe-area-inset-bottom);
            }
        }
    </style>

    <!-- Brand Design System -->
    <style>
        :root {
            --color-primary: #1F3B8D;
            --color-secondary: #FF621B;
            --color-white: #FEFFFF;
            --color-dark: #2c3e50;
            --color-gray: #6B7280;
            --color-light: #f8f9fa;
            --font-heading: 'Roboto Slab', serif;
            --font-body: 'Source Sans Pro', sans-serif;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: var(--font-heading) !important;
            color: var(--color-dark);
        }

        body, p, span, div, a {
            font-family: var(--font-body) !important;
        }

        a {
            color: var(--color-primary);
        }

        a:hover {
            color: var(--color-secondary);
        }
    </style>

    @stack('styles')
</head>

<body class="antialiased bg-white text-[#1A1A1A] m-0 p-0" itemscope itemtype="http://schema.org/WebPage">

    <livewire:frontend.components.header />

    <main id="main-content" role="main">
        @yield('body-section')
    </main>

    <livewire:frontend.components.footer />

    @livewireScripts
    @stack('scripts')
</body>

</html>
