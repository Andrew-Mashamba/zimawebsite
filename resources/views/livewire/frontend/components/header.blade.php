<div>
    {{-- Font Awesome: load non-render-blocking to improve LCP (media=print then switch to all) --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"></noscript>
    <style>
        /* Modern Header - ZIMA Brand Colors */
        .header_top {
            background: linear-gradient(135deg, #1F3B8D 0%, #2a4a9e 50%, #3559af 100%) !important;
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 20px rgba(31, 59, 141, 0.3);
            transition: all 0.3s ease;
            display: flex !important;
            align-items: center !important;
            min-height: 40px !important;
            float: none !important;
        }

        .header_top::before,
        .header_top::after {
            display: none !important;
        }

        .header_bottom {
            position: relative !important;
            clear: none !important;
            background: #ffffff;
        }

        .nav-container {
            display: flex !important;
            align-items: center !important;
            justify-content: space-between !important;
        }

        .logo_wrapper a:hover {
            color: #FF621B !important;
        }

        .header_top_bottom_holder {
            display: flex !important;
            flex-direction: column !important;
        }

        .header_top > .left,
        .header_top > .right {
            display: flex !important;
            align-items: center !important;
            height: 100% !important;
        }

        .header_top .left .inner,
        .header_top .right .inner {
            display: flex !important;
            align-items: center !important;
            gap: 20px !important;
            height: 100% !important;
        }

        .qodef-m-title {
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: 500;
            font-size: 12px;
            color: #ffffff !important;
            transition: all 0.3s ease;
            margin: 0 !important;
            line-height: 1 !important;
        }

        .qodef-m-title a {
            color: #ffffff !important;
            font-size: 12px;
        }

        .qodef-m-title-text {
            font-size: 12px;
        }

        .qodef-m-title:hover {
            transform: translateX(5px);
            color: #feffff !important;
        }

        /* Top Bar Icon Alignment - Override all theme styles */
        .header_top .header-widget,
        .header_top .header-left-widget {
            display: flex !important;
            align-items: center !important;
            margin: 0 !important;
            padding: 0 !important;
        }

        .header_top .wp-block-qi-blocks-icon-with-text,
        .header_top .qodef-block-container {
            display: flex !important;
            align-items: center !important;
        }

        .header_top .qi-block-icon-with-text,
        .header_top .qodef-block {
            display: flex !important;
            align-items: center !important;
            gap: 8px !important;
        }

        .header_top .qodef-m-icon-wrapper {
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
        }

        .header_top .qodef-m-icon-wrapper a {
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
        }

        .header_top .qodef-m-icon-holder {
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            line-height: 0 !important;
        }

        .header_top .qodef-m-icon-holder svg {
            display: block !important;
            vertical-align: middle !important;
        }

        .header_top .qodef-m-content {
            display: flex !important;
            align-items: center !important;
        }

        /* Social Media Icons */
        .social-media-strip {
            display: flex !important;
            align-items: center !important;
            gap: 6px !important;
            height: auto !important;
        }

        .social-media-strip a {
            font-size: 14px;
            width: 28px;
            height: 28px;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            text-decoration: none;
            color: #ffffff;
            position: relative;
            overflow: hidden;
            line-height: 1 !important;
        }

        .social-media-strip a i {
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            line-height: 1 !important;
        }

        .social-media-strip a:hover {
            transform: translateY(-3px) scale(1.1);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
            background: #FF621B;
        }

        .header_top .inner {
            display: flex !important;
            justify-content: space-between !important;
            align-items: center !important;
        }

        /* Logo Styling */
        .q_logo a {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            filter: drop-shadow(0 2px 8px rgba(31, 59, 141, 0.2));
        }

        .q_logo:hover a {
            transform: scale(1.05);
            filter: drop-shadow(0 4px 15px rgba(31, 59, 141, 0.4));
        }

        /* Header Sticky Animation */
        .page_header.sticky {
            animation: slideDown 0.4s ease-out;
        }

        @keyframes slideDown {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        /* Navigation Menu */
        .main_menu ul li {
            list-style: none;
        }

        .main_menu ul li a {
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: 600;
            font-size: 15px;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            position: relative;
            color: #2c3e50 !important;
            text-decoration: none;
            padding: 10px 18px;
            display: block;
        }

        .main_menu ul li a.current,
        .main_menu ul li a.currentv {
            color: #1F3B8D !important;
        }

        .main_menu ul li a::after {
            content: '';
            position: absolute;
            bottom: 5px;
            left: 50%;
            transform: translateX(-50%) scaleX(0);
            width: 60%;
            height: 3px;
            background: #FF621B;
            border-radius: 2px;
            transition: transform 0.3s ease;
        }

        .main_menu ul li a:hover::after,
        .main_menu ul li a.current::after,
        .main_menu ul li a.currentv::after {
            transform: translateX(-50%) scaleX(1);
        }

        .main_menu ul li:hover > a {
            color: #1F3B8D !important;
        }

        /* Dropdown Menu Styles */
        .menu-item.has-dropdown {
            position: relative;
        }

        .menu-item.has-dropdown .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            background: #ffffff;
            min-width: 220px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
            border-radius: 8px;
            padding: 10px 0;
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: all 0.3s ease;
            z-index: 1000;
            list-style: none;
            margin: 0;
        }

        .menu-item.has-dropdown:hover .dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .dropdown-menu li {
            margin: 0;
        }

        .dropdown-menu li a {
            display: block;
            padding: 10px 20px !important;
            font-size: 14px !important;
            color: #2c3e50 !important;
            text-decoration: none;
            transition: all 0.2s ease;
            border-left: 3px solid transparent;
        }

        .dropdown-menu li a:hover {
            background: #f8f9fa;
            color: #1F3B8D !important;
            border-left-color: #FF621B;
            padding-left: 23px !important;
        }

        .dropdown-menu li a::after {
            display: none !important;
        }

        .dropdown-menu li.dropdown-group-label {
            padding: 8px 20px 4px;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: #1F3B8D;
            border-bottom: 1px solid #e5e7eb;
            margin-top: 4px;
        }
        .dropdown-menu li.dropdown-group-label:first-child {
            margin-top: 0;
        }
        .dropdown-menu li.dropdown-group-label:hover {
            background: transparent;
            border-left-color: transparent;
            padding-left: 20px;
        }

        .menu-item.has-dropdown > a::after {
            display: none !important;
        }

        .menu-item.has-dropdown > a .dropdown-arrow {
            margin-left: 5px;
            font-size: 10px;
            transition: transform 0.3s ease;
        }

        .menu-item.has-dropdown:hover > a .dropdown-arrow {
            transform: rotate(180deg);
        }

        /* Mobile Menu - Hidden by default */
        .mobile_menu {
            display: none;
            background: #fff;
            padding: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        .mobile_menu.active {
            display: block;
        }

        .mobile_menu ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .mobile_menu ul li {
            margin: 0;
        }

        .mobile_menu ul li a {
            display: block;
            padding: 12px 0;
            color: #2c3e50;
            text-decoration: none;
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: 600;
            border-bottom: 1px solid #eee;
        }

        .mobile_menu ul li a:hover {
            color: #1F3B8D;
        }

        /* Mobile Submenu Styles */
        .mobile-submenu {
            list-style: none;
            padding: 5px 0 5px 15px;
            margin: 0;
            border-left: 2px solid #FF621B;
            margin-left: 10px;
            margin-top: 5px;
        }

        .mobile-submenu li {
            margin: 0;
        }

        .mobile-submenu li a {
            display: block;
            padding: 8px 10px;
            font-size: 14px;
            color: #666;
            text-decoration: none;
        }

        .mobile-submenu li a:hover {
            color: #1F3B8D;
        }

        .mobile-submenu li.mobile-submenu-label {
            padding: 12px 10px 4px;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: #1F3B8D;
            border-bottom: none;
            list-style: none;
        }
        .mobile-submenu li.mobile-submenu-label:first-child {
            padding-top: 8px;
        }

        /* Mobile Menu Button */
        .mobile_menu_button svg #background {
            fill: #FF621B;
            transition: fill 0.3s ease;
        }

        .mobile_menu_button:hover svg #background {
            fill: #1F3B8D;
        }

        /* Header Bottom Shadow */
        .header_bottom {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            transition: box-shadow 0.3s ease;
        }

        .page_header.sticky .header_bottom {
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 1000px) {
            .header_top .inner {
                flex-direction: column;
                gap: 10px;
            }
            .social-media-strip {
                justify-content: center;
                flex-wrap: wrap;
            }
            .main_menu {
                display: none !important;
            }
            .mobile_menu_button {
                display: block !important;
            }
            .nav-container {
                justify-content: space-between !important;
            }
        }
    </style>

    <header class="has_top scroll_header_top_area stick scrolled_not_transparent with_border page_header">
        <div class="header_inner clearfix">
            <div class="header_top_bottom_holder">
                <div class="header_top" style="padding: 8px 4px 8px 15px; display: flex; align-items: center; justify-content: space-between; float: none;">
                    <div class="left" style="display: flex; align-items: center;">
                        <div class="inner" style="display: flex; align-items: center; gap: 20px;">
                            <div class="header-widget widget_block header-left-widget" style="display: flex; align-items: center;">
                                <div class="wp-block-qi-blocks-icon-with-text qodef-block-container" style="display: flex; align-items: center;">
                                    <div class="qi-block-icon-with-text qodef-block qodef-m qodef-layout--before-content" style="display: flex; align-items: center; gap: 6px;">
                                        <div class="qodef-m-icon-wrapper" style="display: flex; align-items: center;">
                                            <a href="tel:+255692410353" style="display: flex; align-items: center;" aria-label="Call us: +255 69 241 0353">
                                                <div class="qodef-m-icon-holder" style="display: flex; align-items: center; justify-content: center;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 16 16" style="display: block;">
                                                        <path d="M12.5 6.9c-.3 0-.6-.2-.6-.5-.2-1.2-1.1-2-2.3-2.3-.3-.1-.5-.4-.5-.8.1-.3.4-.5.8-.5.8.2 1.5.6 2.1 1.2.6.6 1 1.3 1.1 2.1.1.4-.2.7-.5.8h-.1zM15.4 6.9c-.3 0-.6-.2-.6-.6-.3-2.7-2.4-4.7-5-5-.4 0-.6-.4-.6-.7 0-.4.3-.6.6-.6 1.6.2 3 .9 4.2 2 1.1 1.1 1.8 2.6 2 4.2 0 .3-.2.6-.6.7zM13.2 16H13c-2.3-.2-4.5-1-6.4-2.3-1.8-1.1-3.3-2.6-4.4-4.4C1 7.4.2 5.2 0 2.9-.1 1.8.7.8 1.9.7H4.2c1 0 1.9.7 2.1 1.8.1.6.2 1.2.5 1.8.2.8 0 1.6-.6 2.2l-.5.5c.8 1.3 2 2.5 3.3 3.3l.5-.5c.6-.6 1.4-.7 2.2-.5.6.2 1.2.4 1.8.5 1 .1 1.8 1 1.8 2.1V14c0 1.1-.9 2-2.1 2z" fill="#ffffff"/>
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="qodef-m-content" style="display: flex; align-items: center;">
                                            <h4 class="qodef-m-title" style="margin: 0; line-height: 1;">
                                                <a href="tel:+255692410353"><span class="qodef-m-title-text">+255 69 241 0353</span></a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="header-widget widget_block header-left-widget" style="display: flex; align-items: center;">
                                <div class="wp-block-qi-blocks-icon-with-text qodef-block-container" style="display: flex; align-items: center;">
                                    <div class="qi-block-icon-with-text qodef-block qodef-m qodef-layout--before-content" style="display: flex; align-items: center; gap: 6px;">
                                        <div class="qodef-m-icon-wrapper" style="display: flex; align-items: center;">
                                            <a href="mailto:info@zima.co.tz" style="display: flex; align-items: center;" aria-label="Email us: info@zima.co.tz">
                                                <div class="qodef-m-icon-holder" style="display: flex; align-items: center; justify-content: center;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16.3 16.3" style="display: block;">
                                                        <path fill="#ffffff" d="M.834,11.734A8.08,8.08,0,0,1,.7,4.856,8.057,8.057,0,0,1,5.855.325,8.328,8.328,0,0,1,8.15,0a8.132,8.132,0,0,1,8,6.655,5.867,5.867,0,0,1-.139,3.163,2.836,2.836,0,0,1-2.4,2.082,4.058,4.058,0,0,1-.462.028,3.243,3.243,0,0,1-2.676-1.388l-.02-.026a3.405,3.405,0,0,1-2.763,1.543,3.652,3.652,0,0,1-.674-.066A3.341,3.341,0,0,1,4.36,9.41,4.175,4.175,0,0,1,4.4,6.937a4.1,4.1,0,0,1,1.392-2,3.244,3.244,0,0,1,4.474.415c.011-.061.021-.12.031-.177a.683.683,0,0,1,.766-.616.689.689,0,0,1,.463.26.762.762,0,0,1,.135.572c-.1.7-.2,1.411-.3,2.1-.041.292-.084.583-.125.875A1.862,1.862,0,0,0,11.7,9.836a2.006,2.006,0,0,0,1.483.706,1.72,1.72,0,0,0,.469-.066,1.52,1.52,0,0,0,.987-.96A3.9,3.9,0,0,0,14.857,7.4,6.629,6.629,0,0,0,11.44,2.252a6.609,6.609,0,0,0-3.265-.869,6.762,6.762,0,0,0-1.3,13.4,7.05,7.05,0,0,0,1.31.126,6.729,6.729,0,0,0,3.4-.94,1.088,1.088,0,0,1,.6-.155.624.624,0,0,1,.561.554.681.681,0,0,1-.338.723,7.88,7.88,0,0,1-2.406,1,8.29,8.29,0,0,1-1.86.212A8.136,8.136,0,0,1,.834,11.734Z"/>
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="qodef-m-content" style="display: flex; align-items: center;">
                                            <h4 class="qodef-m-title" style="margin: 0; line-height: 1;">
                                                <a href="mailto:info@zima.co.tz"><span class="qodef-m-title-text">info@zima.co.tz</span></a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="header-widget widget_block header-left-widget" style="display: flex; align-items: center;">
                                <div class="wp-block-qi-blocks-icon-with-text qodef-block-container" style="display: flex; align-items: center;">
                                    <div class="qi-block-icon-with-text qodef-block qodef-m qodef-layout--before-content" style="display: flex; align-items: center; gap: 6px;">
                                        <div class="qodef-m-icon-wrapper" style="display: flex; align-items: center;">
                                            <a href="{{ route('contact') }}" style="display: flex; align-items: center;" aria-label="Contact us and opening hours">
                                                <div class="qodef-m-icon-holder" style="display: flex; align-items: center; justify-content: center;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 16 16" style="display: block;" aria-hidden="true">
                                                        <path d="M15.4 4.9c-.8-2-2.3-3.4-4.3-4.3-2-.9-4.3-.9-6.3 0S1.4 2.9.5 4.9C.2 5.8 0 6.9 0 8s.2 2.2.6 3.1c.9 2 2.3 3.4 4.3 4.3 1 .4 2 .6 3.1.6s2.1-.2 3.1-.6c2-.8 3.4-2.3 4.3-4.3.4-1 .6-2.1.6-3.1 0-1.1-.2-2.1-.6-3.1zM14.7 8c0 1.2-.3 2.3-.9 3.4-.6 1-1.4 1.8-2.5 2.4-1 .6-2.2.9-3.4.9-.9 0-1.8-.2-2.6-.5-.8-.4-1.6-.8-2.1-1.4-.6-.6-1.1-1.3-1.4-2.1-.3-.9-.5-1.8-.5-2.7 0-1.2.3-2.3.9-3.4.6-1 1.4-1.8 2.4-2.4 1-.6 2.1-.9 3.4-.9s2.3.3 3.4.9c1 .6 1.9 1.4 2.5 2.4.5 1.1.8 2.2.8 3.4z" fill="#ffffff"/>
                                                        <path d="M8.7 7.8V3.5c0-.4-.3-.7-.7-.7-.4 0-.7.3-.7.7v4.6c0 .2 0 .4.2.5l2.6 2.6c.1.1.3.2.5.2s.3-.1.5-.2c.3-.3.3-.7 0-.9L8.7 7.8z" fill="#ffffff"/>
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="qodef-m-content" style="display: flex; align-items: center;">
                                            <h4 class="qodef-m-title" style="margin: 0; line-height: 1;">
                                                <a href="{{ route('contact') }}"><span class="qodef-m-title-text">Mon - Fri 8:00 - 17:00</span></a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="right" style="display: flex; align-items: center;">
                        <div class="inner" style="display: flex; align-items: center;">
                            <nav class="social-media-strip p-1" aria-label="Social media links" style="display: flex; align-items: center; gap: 6px;">
                                <a href="https://www.linkedin.com/company/zima-solutions" target="_blank" rel="nofollow noopener noreferrer" title="Follow ZIMA Solutions on LinkedIn" aria-label="LinkedIn" style="display: flex; align-items: center; justify-content: center; width: 28px; height: 28px;">
                                    <i class="fab fa-linkedin" aria-hidden="true" style="line-height: 1;"></i>
                                </a>
                                <a href="https://www.facebook.com/zimasolutions" target="_blank" rel="nofollow noopener noreferrer" title="Follow ZIMA Solutions on Facebook" aria-label="Facebook" style="display: flex; align-items: center; justify-content: center; width: 28px; height: 28px;">
                                    <i class="fab fa-facebook" aria-hidden="true" style="line-height: 1;"></i>
                                </a>
                                <a href="https://twitter.com/zimasolutions" target="_blank" rel="nofollow noopener noreferrer" title="Follow ZIMA Solutions on Twitter" aria-label="Twitter" style="display: flex; align-items: center; justify-content: center; width: 28px; height: 28px;">
                                    <i class="fab fa-twitter" aria-hidden="true" style="line-height: 1;"></i>
                                </a>
                                <a href="https://www.instagram.com/zimasolutions" target="_blank" rel="nofollow noopener noreferrer" title="Follow ZIMA Solutions on Instagram" aria-label="Instagram" style="display: flex; align-items: center; justify-content: center; width: 28px; height: 28px;">
                                    <i class="fab fa-instagram" aria-hidden="true" style="line-height: 1;"></i>
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="header_bottom bg-white" style="padding: 15px 40px;">
                    <!-- Centered Container with max-width 1400px -->
                    <div class="nav-container" style="max-width: 1400px; margin: 0 auto; display: flex; align-items: center; justify-content: space-between;">

                        <!-- Logo on Left -->
                        <div class="logo_wrapper" style="display: flex; align-items: center;">
                            <a href="/" style="font-family:'Roboto Slab', serif; font-weight:700; color: #1F3B8D; font-size: 42px; line-height: 1; text-decoration: none;">
                                ZIMA
                            </a>
                        </div>

                        <!-- Navigation Menu on Right -->
                        <nav class="main_menu" aria-label="Main navigation" style="display: flex; align-items: center;">
                            <ul id="menu-main-menu" style="display: flex; align-items: center; gap: 8px; list-style: none; margin: 0; padding: 0;">
                                <li class="menu-item active narrow">
                                    <a href="/">
                                        <span>Home</span>
                                    </a>
                                </li>
                                <li class="menu-item narrow">
                                    <a href="{{ route('our-services') }}">
                                        <span>Services</span>
                                    </a>
                                </li>
                                <li class="menu-item narrow">
                                    <a href="{{ route('our-products') }}">
                                        <span>Products</span>
                                    </a>
                                </li>
                                <li class="menu-item narrow">
                                    <a href="{{ route('ai-agents') }}">
                                        <span>AI Agents</span>
                                    </a>
                                </li>
                                <li class="menu-item narrow">
                                    <a href="{{ route('partnership-programme') }}">
                                        <span>Partnership Programme</span>
                                    </a>
                                </li>
                                <li class="menu-item narrow">
                                    <a href="{{ route('invest-in-tanzania') }}">
                                        <span>Invest in Tanzania</span>
                                    </a>
                                </li>
                                <li class="menu-item narrow">
                                    <a href="{{ route('financial-inclusion-initiatives') }}">
                                        <span>Financial Inclusion</span>
                                    </a>
                                </li>
                                <li class="menu-item narrow">
                                    <a href="{{ route('contact') }}">
                                        <span>Contact</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>

                        <!-- Mobile Menu Button (hidden on desktop) -->
                        <div class="mobile_menu_button" style="display: none;">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 70 70">
                                    <g id="menu-opener" transform="translate(-1833 -111)">
                                        <rect id="background" width="70" height="70" transform="translate(1833 111)" fill="#FF621B" />
                                        <g id="menu-opener-2">
                                            <rect width="10" height="2" transform="translate(1867 151)" fill="#fff" />
                                            <rect width="18" height="2" transform="translate(1859 145)" fill="#fff" />
                                            <rect width="10" height="2" transform="translate(1859 139)" fill="#fff" />
                                        </g>
                                    </g>
                                </svg>
                            </span>
                        </div>
                    </div>


                    <nav class="mobile_menu">
                        <ul id="menu-main-menu-1" class="">
                            <li class="menu-item active">
                                <a href="{{ route('welcome') }}" class="current"><span>Home</span></a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('our-services') }}"><span>Services</span></a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('our-products') }}"><span>Products</span></a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('ai-agents') }}"><span>AI Agents</span></a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('partnership-programme') }}"><span>Partnership Programme</span></a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('invest-in-tanzania') }}"><span>Invest in Tanzania</span></a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('financial-inclusion-initiatives') }}"><span>Financial Inclusion</span></a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('contact') }}"><span>Contact</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Mobile menu toggle
            const mobileMenuButton = document.querySelector('.mobile_menu_button');
            const mobileMenu = document.querySelector('.mobile_menu');

            if (mobileMenuButton && mobileMenu) {
                mobileMenuButton.addEventListener('click', function() {
                    mobileMenu.classList.toggle('active');
                });
            }

            const menuLinks = document.querySelectorAll('.main_menu ul li a');
            const isHomePage = window.location.pathname === '/' || window.location.pathname === '';

            // Smooth scroll for anchor links only on homepage
            menuLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    const href = this.getAttribute('href');

                    // Only handle smooth scroll if we're on homepage and link has anchor
                    if (isHomePage && href.includes('#')) {
                        const hash = href.includes('/') ? href.split('#')[1] : href.substring(1);
                        const targetElement = document.getElementById(hash);

                        if (targetElement) {
                            e.preventDefault();
                            // Smooth scroll to target
                            targetElement.scrollIntoView({
                                behavior: 'smooth',
                                block: 'start'
                            });

                            // Update URL hash without jumping
                            history.pushState(null, null, '#' + hash);

                            // Update active state
                            menuLinks.forEach(l => {
                                l.classList.remove('currentv');
                                l.removeAttribute('aria-current');
                            });
                            this.classList.add('currentv');
                            this.setAttribute('aria-current', 'page');
                        }
                    }
                    // For non-homepage, let the browser navigate normally
                });
            });

            // Update active link on scroll (only on homepage)
            if (isHomePage) {
                const sections = document.querySelectorAll('section[id], div[id]');
                const observerOptions = {
                    root: null,
                    rootMargin: '-20% 0px -70% 0px',
                    threshold: 0
                };

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const id = entry.target.getAttribute('id');
                            menuLinks.forEach(link => {
                                link.classList.remove('currentv');
                                link.removeAttribute('aria-current');
                                const linkHref = link.getAttribute('href');
                                if (linkHref === '/#' + id || linkHref === '#' + id) {
                                    link.classList.add('currentv');
                                    link.setAttribute('aria-current', 'page');
                                }
                            });
                        }
                    });
                }, observerOptions);

                sections.forEach(section => {
                    if (section.id) observer.observe(section);
                });
            }
        });
    </script>
</div>
