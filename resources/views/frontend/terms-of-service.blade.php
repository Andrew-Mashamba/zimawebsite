@extends('layouts.web')

@section('title', 'Terms of Service - ZIMA Solutions Limited')
@section('meta_title', 'Terms of Service | ZIMA Solutions Limited')
@section('meta_description', 'Terms of Service for ZIMA Solutions Limited. Read our terms and conditions for using our website and services.')
@section('meta_keywords', 'terms of service, terms and conditions, ZIMA Solutions, service agreement')
@section('og_title', 'Terms of Service - ZIMA Solutions')
@section('og_description', 'Terms and conditions for using ZIMA Solutions website and services.')

@section('structured_data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Terms of Service",
    "description": "Terms of Service for ZIMA Solutions Limited",
    "url": "{{ url('/terms-of-service') }}",
    "breadcrumb": {
        "@type": "BreadcrumbList",
        "itemListElement": [
            {"@type": "ListItem", "position": 1, "name": "Home", "item": "{{ url('/') }}"},
            {"@type": "ListItem", "position": 2, "name": "Terms of Service", "item": "{{ url('/terms-of-service') }}"}
        ]
    },
    "mainEntity": {
        "@type": "Article",
        "headline": "Terms of Service",
        "datePublished": "2025-01-01",
        "dateModified": "2025-01-19",
        "author": {
            "@id": "{{ url('/') }}#organization"
        }
    }
}
</script>
@endsection

@section('body-section')
<div class="legal-page-container" style="padding: 0;">
    <!-- Hero Section -->
    <section style="background: linear-gradient(135deg, #1F3B8D 0%, #2a4a9e 100%); color: #fff; padding: 120px 40px 60px; text-align: center;">
        <div style="max-width: 900px; margin: 0 auto;">
            <nav aria-label="Breadcrumb" style="margin-bottom: 20px;">
                <ol style="list-style: none; padding: 0; display: flex; justify-content: center; gap: 10px; font-size: 14px; opacity: 0.8;">
                    <li><a href="/" style="color: #fff; text-decoration: none;">Home</a></li>
                    <li>/</li>
                    <li>Terms of Service</li>
                </ol>
            </nav>
            <h1 style="font-family: 'Roboto Slab', serif; font-size: 48px; font-weight: 700; margin-bottom: 10px;">Terms of Service</h1>
            <p style="font-size: 16px; opacity: 0.8;">Last updated: January 19, 2025</p>
        </div>
    </section>

    <!-- Content Section -->
    <section style="padding: 60px 40px; background: #fff;">
        <div style="max-width: 800px; margin: 0 auto; font-family: 'Source Sans Pro', sans-serif; color: #333; line-height: 1.8;">

            <h2 style="font-family: 'Roboto Slab', serif; font-size: 24px; color: #1F3B8D; margin: 40px 0 20px; padding-top: 20px; border-top: 1px solid #eee;">1. Acceptance of Terms</h2>
            <p>By accessing and using the ZIMA Solutions Limited website (zima.co.tz) and services, you accept and agree to be bound by these Terms of Service. If you do not agree to these terms, please do not use our website or services.</p>

            <h2 style="font-family: 'Roboto Slab', serif; font-size: 24px; color: #1F3B8D; margin: 40px 0 20px; padding-top: 20px; border-top: 1px solid #eee;">2. Company Information</h2>
            <p>These Terms of Service are entered into between you and:</p>
            <div style="background: #f8f9fa; padding: 20px; border-radius: 10px; margin: 15px 0;">
                <p style="margin: 0;"><strong>ZIMA Solutions Limited</strong><br>
                TIN: 181-314-605<br>
                Makongo, Near Ardhi University<br>
                Kinondoni, Dar es Salaam, Tanzania</p>
            </div>

            <h2 style="font-family: 'Roboto Slab', serif; font-size: 24px; color: #1F3B8D; margin: 40px 0 20px; padding-top: 20px; border-top: 1px solid #eee;">3. Services Description</h2>
            <p>ZIMA Solutions Limited provides technology consulting, software development, and system integration services primarily for financial institutions, government agencies, and enterprises in Tanzania. Our services include but are not limited to:</p>
            <ul style="margin: 15px 0; padding-left: 25px;">
                <li>RTGS and payment system integration</li>
                <li>TIPS (Tanzania Instant Payment System) integration</li>
                <li>GePG (Government e-Payment Gateway) integration</li>
                <li>API Gateway solutions</li>
                <li>Custom software development</li>
                <li>Technical consulting</li>
            </ul>

            <h2 style="font-family: 'Roboto Slab', serif; font-size: 24px; color: #1F3B8D; margin: 40px 0 20px; padding-top: 20px; border-top: 1px solid #eee;">4. Use of Website</h2>
            <h3 style="font-size: 18px; color: #1F3B8D; margin: 25px 0 15px;">4.1 Permitted Use</h3>
            <p>You may use our website for lawful purposes only. You agree to:</p>
            <ul style="margin: 15px 0; padding-left: 25px;">
                <li>Provide accurate information when contacting us</li>
                <li>Not attempt to gain unauthorized access to our systems</li>
                <li>Not interfere with the proper functioning of the website</li>
                <li>Not use automated systems to access the website without permission</li>
            </ul>

            <h3 style="font-size: 18px; color: #1F3B8D; margin: 25px 0 15px;">4.2 Prohibited Activities</h3>
            <p>You may not:</p>
            <ul style="margin: 15px 0; padding-left: 25px;">
                <li>Use the website for any illegal purpose</li>
                <li>Transmit viruses or malicious code</li>
                <li>Attempt to reverse engineer any part of the website</li>
                <li>Collect user information without consent</li>
                <li>Impersonate ZIMA Solutions or its employees</li>
            </ul>

            <h2 style="font-family: 'Roboto Slab', serif; font-size: 24px; color: #1F3B8D; margin: 40px 0 20px; padding-top: 20px; border-top: 1px solid #eee;">5. Intellectual Property</h2>
            <p>All content on this website, including text, graphics, logos, images, and software, is the property of ZIMA Solutions Limited or its content suppliers and is protected by Tanzanian and international intellectual property laws.</p>
            <p>You may not:</p>
            <ul style="margin: 15px 0; padding-left: 25px;">
                <li>Copy, reproduce, or distribute our content without written permission</li>
                <li>Use our trademarks without authorization</li>
                <li>Create derivative works from our content</li>
            </ul>

            <h2 style="font-family: 'Roboto Slab', serif; font-size: 24px; color: #1F3B8D; margin: 40px 0 20px; padding-top: 20px; border-top: 1px solid #eee;">6. Service Agreements</h2>
            <p>Specific services provided by ZIMA Solutions are governed by separate service agreements. These Terms of Service apply to general website use and do not supersede any specific contractual agreements between ZIMA Solutions and its clients.</p>

            <h2 style="font-family: 'Roboto Slab', serif; font-size: 24px; color: #1F3B8D; margin: 40px 0 20px; padding-top: 20px; border-top: 1px solid #eee;">7. Disclaimer of Warranties</h2>
            <p>The website and its content are provided "as is" without warranties of any kind, either express or implied. ZIMA Solutions does not warrant that:</p>
            <ul style="margin: 15px 0; padding-left: 25px;">
                <li>The website will be uninterrupted or error-free</li>
                <li>Defects will be corrected</li>
                <li>The website is free of viruses or harmful components</li>
            </ul>

            <h2 style="font-family: 'Roboto Slab', serif; font-size: 24px; color: #1F3B8D; margin: 40px 0 20px; padding-top: 20px; border-top: 1px solid #eee;">8. Limitation of Liability</h2>
            <p>To the fullest extent permitted by law, ZIMA Solutions Limited shall not be liable for any indirect, incidental, special, consequential, or punitive damages arising from:</p>
            <ul style="margin: 15px 0; padding-left: 25px;">
                <li>Your use of or inability to use the website</li>
                <li>Any errors or omissions in the content</li>
                <li>Unauthorized access to your information</li>
                <li>Any third-party content or conduct</li>
            </ul>

            <h2 style="font-family: 'Roboto Slab', serif; font-size: 24px; color: #1F3B8D; margin: 40px 0 20px; padding-top: 20px; border-top: 1px solid #eee;">9. Indemnification</h2>
            <p>You agree to indemnify, defend, and hold harmless ZIMA Solutions Limited, its officers, directors, employees, and agents from any claims, damages, losses, or expenses arising from your violation of these Terms of Service or your use of the website.</p>

            <h2 style="font-family: 'Roboto Slab', serif; font-size: 24px; color: #1F3B8D; margin: 40px 0 20px; padding-top: 20px; border-top: 1px solid #eee;">10. Third-Party Links</h2>
            <p>Our website may contain links to third-party websites. These links are provided for convenience only. ZIMA Solutions does not endorse or assume responsibility for the content, privacy policies, or practices of any third-party sites.</p>

            <h2 style="font-family: 'Roboto Slab', serif; font-size: 24px; color: #1F3B8D; margin: 40px 0 20px; padding-top: 20px; border-top: 1px solid #eee;">11. Modifications to Terms</h2>
            <p>ZIMA Solutions reserves the right to modify these Terms of Service at any time. Changes will be effective immediately upon posting to the website. Your continued use of the website after any changes constitutes acceptance of the modified terms.</p>

            <h2 style="font-family: 'Roboto Slab', serif; font-size: 24px; color: #1F3B8D; margin: 40px 0 20px; padding-top: 20px; border-top: 1px solid #eee;">12. Governing Law</h2>
            <p>These Terms of Service shall be governed by and construed in accordance with the laws of the United Republic of Tanzania. Any disputes arising from these terms shall be subject to the exclusive jurisdiction of the courts of Tanzania.</p>

            <h2 style="font-family: 'Roboto Slab', serif; font-size: 24px; color: #1F3B8D; margin: 40px 0 20px; padding-top: 20px; border-top: 1px solid #eee;">13. Severability</h2>
            <p>If any provision of these Terms of Service is found to be unenforceable or invalid, that provision shall be limited or eliminated to the minimum extent necessary, and the remaining provisions shall remain in full force and effect.</p>

            <h2 style="font-family: 'Roboto Slab', serif; font-size: 24px; color: #1F3B8D; margin: 40px 0 20px; padding-top: 20px; border-top: 1px solid #eee;">14. Contact Information</h2>
            <p>If you have any questions about these Terms of Service, please contact us:</p>
            <div style="background: #f8f9fa; padding: 25px; border-radius: 10px; margin-top: 20px;">
                <p style="margin: 0 0 10px;"><strong>ZIMA Solutions Limited</strong></p>
                <p style="margin: 0 0 10px;">Makongo, Near Ardhi University<br>Kinondoni, Dar es Salaam, Tanzania</p>
                <p style="margin: 0 0 10px;">Email: <a href="mailto:info@zima.co.tz" style="color: #1F3B8D;">info@zima.co.tz</a></p>
                <p style="margin: 0;">Phone: <a href="tel:+255692410353" style="color: #1F3B8D;">+255 69 241 0353</a></p>
            </div>
        </div>
    </section>
</div>
@endsection
