@extends('layouts.web')

@section('title', 'Privacy Policy - ZIMA Solutions Limited')
@section('meta_title', 'Privacy Policy | ZIMA Solutions Limited')
@section('meta_description', 'Privacy Policy for ZIMA Solutions Limited. Learn how we collect, use, and protect your personal information.')
@section('meta_keywords', 'privacy policy, data protection, ZIMA Solutions, personal information')
@section('og_title', 'Privacy Policy - ZIMA Solutions')
@section('og_description', 'Learn how ZIMA Solutions collects, uses, and protects your personal information.')

@section('structured_data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Privacy Policy",
    "description": "Privacy Policy for ZIMA Solutions Limited",
    "url": "{{ url('/privacy-policy') }}",
    "breadcrumb": {
        "@type": "BreadcrumbList",
        "itemListElement": [
            {"@type": "ListItem", "position": 1, "name": "Home", "item": "{{ url('/') }}"},
            {"@type": "ListItem", "position": 2, "name": "Privacy Policy", "item": "{{ url('/privacy-policy') }}"}
        ]
    },
    "mainEntity": {
        "@type": "Article",
        "headline": "Privacy Policy",
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
                    <li>Privacy Policy</li>
                </ol>
            </nav>
            <h1 style="font-family: 'Roboto Slab', serif; font-size: 48px; font-weight: 700; margin-bottom: 10px;">Privacy Policy</h1>
            <p style="font-size: 16px; opacity: 0.8;">Last updated: January 19, 2025</p>
        </div>
    </section>

    <!-- Content Section -->
    <section style="padding: 60px 40px; background: #fff;">
        <div style="max-width: 800px; margin: 0 auto; font-family: 'Source Sans Pro', sans-serif; color: #333; line-height: 1.8;">

            <h2 style="font-family: 'Roboto Slab', serif; font-size: 24px; color: #1F3B8D; margin: 40px 0 20px; padding-top: 20px; border-top: 1px solid #eee;">1. Introduction</h2>
            <p>ZIMA Solutions Limited ("we," "our," or "us") is committed to protecting your privacy. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website zima.co.tz or use our services.</p>
            <p>By using our website or services, you agree to the collection and use of information in accordance with this policy.</p>

            <h2 style="font-family: 'Roboto Slab', serif; font-size: 24px; color: #1F3B8D; margin: 40px 0 20px; padding-top: 20px; border-top: 1px solid #eee;">2. Information We Collect</h2>
            <h3 style="font-size: 18px; color: #1F3B8D; margin: 25px 0 15px;">2.1 Personal Information</h3>
            <p>We may collect personal information that you voluntarily provide when you:</p>
            <ul style="margin: 15px 0; padding-left: 25px;">
                <li>Fill out contact forms on our website</li>
                <li>Request a consultation or demo</li>
                <li>Subscribe to our newsletter</li>
                <li>Enter into a business relationship with us</li>
            </ul>
            <p>This information may include:</p>
            <ul style="margin: 15px 0; padding-left: 25px;">
                <li>Name and job title</li>
                <li>Company name</li>
                <li>Email address</li>
                <li>Phone number</li>
                <li>Business address</li>
            </ul>

            <h3 style="font-size: 18px; color: #1F3B8D; margin: 25px 0 15px;">2.2 Automatically Collected Information</h3>
            <p>When you visit our website, we may automatically collect:</p>
            <ul style="margin: 15px 0; padding-left: 25px;">
                <li>IP address and location data</li>
                <li>Browser type and version</li>
                <li>Operating system</li>
                <li>Pages visited and time spent</li>
                <li>Referring website</li>
            </ul>

            <h2 style="font-family: 'Roboto Slab', serif; font-size: 24px; color: #1F3B8D; margin: 40px 0 20px; padding-top: 20px; border-top: 1px solid #eee;">3. How We Use Your Information</h2>
            <p>We use the collected information for:</p>
            <ul style="margin: 15px 0; padding-left: 25px;">
                <li>Responding to your inquiries and providing customer support</li>
                <li>Processing and fulfilling service requests</li>
                <li>Sending relevant updates about our services</li>
                <li>Improving our website and services</li>
                <li>Complying with legal obligations</li>
                <li>Protecting against fraudulent or unauthorized activity</li>
            </ul>

            <h2 style="font-family: 'Roboto Slab', serif; font-size: 24px; color: #1F3B8D; margin: 40px 0 20px; padding-top: 20px; border-top: 1px solid #eee;">4. Information Sharing</h2>
            <p>We do not sell, trade, or rent your personal information to third parties. We may share your information only in the following circumstances:</p>
            <ul style="margin: 15px 0; padding-left: 25px;">
                <li><strong>Service Providers:</strong> With trusted third parties who assist in operating our website and conducting our business</li>
                <li><strong>Legal Requirements:</strong> When required by law or to protect our rights</li>
                <li><strong>Business Transfers:</strong> In connection with a merger, acquisition, or sale of assets</li>
            </ul>

            <h2 style="font-family: 'Roboto Slab', serif; font-size: 24px; color: #1F3B8D; margin: 40px 0 20px; padding-top: 20px; border-top: 1px solid #eee;">5. Data Security</h2>
            <p>We implement appropriate technical and organizational measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. These measures include:</p>
            <ul style="margin: 15px 0; padding-left: 25px;">
                <li>SSL/TLS encryption for data transmission</li>
                <li>Secure data storage with access controls</li>
                <li>Regular security assessments</li>
                <li>Employee training on data protection</li>
            </ul>

            <h2 style="font-family: 'Roboto Slab', serif; font-size: 24px; color: #1F3B8D; margin: 40px 0 20px; padding-top: 20px; border-top: 1px solid #eee;">6. Cookies</h2>
            <p>Our website uses cookies to enhance your browsing experience. Cookies are small files stored on your device that help us:</p>
            <ul style="margin: 15px 0; padding-left: 25px;">
                <li>Remember your preferences</li>
                <li>Understand how you use our website</li>
                <li>Improve our services</li>
            </ul>
            <p>You can control cookies through your browser settings. Disabling cookies may affect some functionality of our website.</p>

            <h2 style="font-family: 'Roboto Slab', serif; font-size: 24px; color: #1F3B8D; margin: 40px 0 20px; padding-top: 20px; border-top: 1px solid #eee;">7. Your Rights</h2>
            <p>You have the right to:</p>
            <ul style="margin: 15px 0; padding-left: 25px;">
                <li>Access your personal information</li>
                <li>Request correction of inaccurate data</li>
                <li>Request deletion of your data</li>
                <li>Opt-out of marketing communications</li>
                <li>Lodge a complaint with relevant authorities</li>
            </ul>
            <p>To exercise these rights, please contact us using the details provided below.</p>

            <h2 style="font-family: 'Roboto Slab', serif; font-size: 24px; color: #1F3B8D; margin: 40px 0 20px; padding-top: 20px; border-top: 1px solid #eee;">8. Data Retention</h2>
            <p>We retain your personal information only for as long as necessary to fulfill the purposes outlined in this policy, unless a longer retention period is required by law.</p>

            <h2 style="font-family: 'Roboto Slab', serif; font-size: 24px; color: #1F3B8D; margin: 40px 0 20px; padding-top: 20px; border-top: 1px solid #eee;">9. Third-Party Links</h2>
            <p>Our website may contain links to third-party websites. We are not responsible for the privacy practices of these external sites. We encourage you to review the privacy policies of any website you visit.</p>

            <h2 style="font-family: 'Roboto Slab', serif; font-size: 24px; color: #1F3B8D; margin: 40px 0 20px; padding-top: 20px; border-top: 1px solid #eee;">10. Changes to This Policy</h2>
            <p>We may update this Privacy Policy from time to time. Any changes will be posted on this page with an updated revision date. We encourage you to review this policy periodically.</p>

            <h2 style="font-family: 'Roboto Slab', serif; font-size: 24px; color: #1F3B8D; margin: 40px 0 20px; padding-top: 20px; border-top: 1px solid #eee;">11. Contact Us</h2>
            <p>If you have any questions about this Privacy Policy, please contact us:</p>
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
