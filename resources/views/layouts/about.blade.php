<!DOCTYPE html>
<html lang="en" itemscope itemtype="https://schema.org/WebPage">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- Primary Meta Tags -->
    <title>@yield('title', 'About Us - ZIMA Solutions Limited')</title>
    <meta name="description" content="@yield('meta_description', 'Learn about ZIMA Solutions Limited - A forward-thinking technology company specializing in digital transformation.')">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/vf/zima.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('/vf/zima.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/vf/zima.png') }}">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('og_title', 'About ZIMA Solutions Limited')">
    <meta property="og:description" content="@yield('og_description', 'Learn about ZIMA Solutions - Digital transformation experts in Tanzania.')">
    <meta property="og:image" content="{{ asset('/vf/zima.png') }}">
    <meta property="og:site_name" content="ZIMA Solutions Limited">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', 'About ZIMA Solutions Limited')">
    <meta name="twitter:description" content="@yield('twitter_description', 'Digital transformation experts in Tanzania.')">
    <meta name="twitter:image" content="{{ asset('/vf/zima.png') }}">

    <!-- Preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;700&family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Livewire Styles -->
    @livewireStyles

    <!-- Critical CSS -->
    <style>
        *, *::before, *::after { box-sizing: border-box; }
        html, body { margin: 0; padding: 0; }

        @media (prefers-reduced-motion: no-preference) {
            html { scroll-behavior: smooth; }
        }

        html { scroll-padding-top: 100px; }

        img, video, iframe {
            max-width: 100%;
            height: auto;
        }

        body {
            font-synthesis: none;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        @media (max-width: 768px) {
            html, body { overflow-x: hidden; max-width: 100vw; }
            body { font-size: 16px; }
        }
    </style>

    <!-- Brand Design System -->
    <style>
        :root {
            --color-primary: #1F3B8D;
            --color-secondary: #FF621B;
            --color-white: #FEFFFF;
            --color-dark: #2c3e50;
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

        a { color: var(--color-primary); }
        a:hover { color: var(--color-secondary); }
    </style>

    @stack('styles')
</head>

<body class="antialiased bg-white text-[#1A1A1A] m-0 p-0" itemscope itemtype="http://schema.org/WebPage">

    <livewire:frontend.components.header />

    <main id="main-content" role="main">
        @yield('about-section')
    </main>

    <livewire:frontend.components.footer />

    @livewireScripts
    @stack('scripts')
</body>

</html>
