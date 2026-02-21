@extends('layouts.web')

@section('title', 'RTGS Integration Services - Real-Time Gross Settlement | ZIMA Solutions')
@section('meta_title', 'RTGS Integration with Bank of Tanzania | ZIMA Solutions Limited')
@section('meta_description', 'Expert RTGS integration services connecting your banking system to Bank of Tanzania for instant high-value interbank transfers. MT message support, ISO 20022 compliance, 99.9% uptime.')
@section('meta_keywords', 'RTGS integration Tanzania, Bank of Tanzania RTGS, real-time gross settlement, high-value payments, MT messages, ISO 20022, interbank transfers Tanzania')
@section('og_title', 'RTGS Integration with Bank of Tanzania | ZIMA Solutions')
@section('og_description', 'Connect your financial institution to BOT RTGS for instant, secure high-value interbank transfers with 99.9% uptime guarantee.')
@section('twitter_title', 'RTGS Integration with Bank of Tanzania | ZIMA Solutions')
@section('twitter_description', 'Expert RTGS integration for BOT. MT messages, ISO 20022, 99.9% uptime. Tanzania.')

@section('structured_data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "@id": "{{ url('/services/rtgs-integration') }}#service",
    "name": "RTGS Integration with Bank of Tanzania",
    "serviceType": "Payment System Integration",
    "description": "Real-Time Gross Settlement system integration connecting financial institutions to Bank of Tanzania for instant high-value interbank transfers with MT message support and ISO 20022 compliance.",
    "provider": {
        "@id": "{{ url('/') }}#organization"
    },
    "areaServed": {
        "@type": "Country",
        "name": "Tanzania"
    },
    "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "RTGS Integration Services",
        "itemListElement": [
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "RTGS Core Integration",
                    "description": "Direct connection to BOT RTGS infrastructure"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "MT-MX Conversion",
                    "description": "ISO 20022 message format conversion"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "RTGS Monitoring Dashboard",
                    "description": "Real-time transaction monitoring and reporting"
                }
            }
        ]
    },
    "url": "{{ url('/services/rtgs-integration') }}",
    "image": "{{ asset('/vf/zima.png') }}"
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "RTGS Integration with Bank of Tanzania | ZIMA Solutions",
    "description": "Expert RTGS integration connecting your banking system to Bank of Tanzania for instant high-value interbank transfers. MT message support, ISO 20022 compliance.",
    "url": "{{ url('/services/rtgs-integration') }}",
    "breadcrumb": {
        "@type": "BreadcrumbList",
        "itemListElement": [
            {"@type": "ListItem", "position": 1, "name": "Home", "item": "{{ url('/') }}"},
            {"@type": "ListItem", "position": 2, "name": "Our Services", "item": "{{ url('/our-services') }}"},
            {"@type": "ListItem", "position": 3, "name": "RTGS Integration", "item": "{{ url('/services/rtgs-integration') }}"}
        ]
    }
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "What is RTGS and why do banks need it?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "RTGS (Real-Time Gross Settlement) is a funds transfer system where money moves from one bank to another in real-time and on a gross basis (transaction by transaction). Banks in Tanzania need RTGS integration to process high-value interbank transfers instantly, comply with Bank of Tanzania regulations, and reduce settlement risk."
            }
        },
        {
            "@type": "Question",
            "name": "How long does RTGS integration take?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "RTGS integration typically takes 4-8 weeks depending on your existing infrastructure. This includes requirements analysis, development, testing in BOT sandbox environment, and production deployment with staff training."
            }
        },
        {
            "@type": "Question",
            "name": "What MT message types does ZIMA support?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "ZIMA Solutions supports all standard SWIFT MT message types used in RTGS including MT103 (Customer Credit Transfer), MT202 (Bank-to-Bank Transfer), MT900/910 (Confirmation of Debit/Credit), and MT950 (Statement Message). We also provide MT-MX conversion for ISO 20022 compliance."
            }
        }
    ]
}
</script>
@endsection

@section('body-section')
<div class="service-page-container" style="padding: 0;">
    <section class="service-hero" aria-label="Service overview" style="background: linear-gradient(135deg, #1F3B8D 0%, #2a4a9e 100%); color: #fff; padding: 120px 40px 80px; text-align: center;">
        <div style="max-width: 1200px; margin: 0 auto;">
            <nav aria-label="Breadcrumb" style="margin-bottom: 20px;">
                <ol style="list-style: none; padding: 0; display: flex; justify-content: center; gap: 10px; font-size: 14px; opacity: 0.8;">
                    <li><a href="/" style="color: #fff; text-decoration: none;">Home</a></li>
                    <li>/</li>
                    <li><a href="{{ route('our-services') }}" style="color: #fff; text-decoration: none;">Services</a></li>
                    <li>/</li>
                    <li>RTGS Integration</li>
                </ol>
            </nav>
            <h1 style="font-family: 'Roboto Slab', serif; font-size: 48px; font-weight: 700; margin-bottom: 20px; color: #fff;">RTGS Integration with Bank of Tanzania</h1>
            <p style="font-size: 20px; line-height: 1.6; opacity: 0.9; max-width: 700px; margin: 0 auto 30px;">Connect your financial institution to Tanzania's Real-Time Gross Settlement system for instant, secure high-value interbank transfers.</p>
            <a href="{{ route('contact') }}" class="btn-primary" style="background: #FF621B; color: #fff; padding: 16px 40px; border-radius: 50px; text-decoration: none; font-weight: 600; display: inline-block;">Request Consultation</a>
        </div>
    </section>

    <section aria-label="Key features" style="padding: 80px 40px; background: #fff;">
        <div style="max-width: 1200px; margin: 0 auto;">
            <h2 style="text-align: center; font-family: 'Roboto Slab', serif; font-size: 36px; margin-bottom: 50px; color: #1F3B8D;">Key Features</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
                <article style="background: #f8f9fa; padding: 30px; border-radius: 10px;">
                    <h3 style="color: #1F3B8D; font-size: 20px; margin-bottom: 15px;">Real-Time Processing</h3>
                    <p style="color: #666; line-height: 1.7;">Instant settlement of high-value transactions with sub-second processing times and 99.9% uptime guarantee.</p>
                </article>
                <article style="background: #f8f9fa; padding: 30px; border-radius: 10px;">
                    <h3 style="color: #1F3B8D; font-size: 20px; margin-bottom: 15px;">MT Message Support</h3>
                    <p style="color: #666; line-height: 1.7;">Full support for SWIFT MT103, MT202, MT900/910, MT950 message types with automatic validation.</p>
                </article>
                <article style="background: #f8f9fa; padding: 30px; border-radius: 10px;">
                    <h3 style="color: #1F3B8D; font-size: 20px; margin-bottom: 15px;">ISO 20022 Ready</h3>
                    <p style="color: #666; line-height: 1.7;">Built-in MT-MX conversion for seamless migration to ISO 20022 messaging standards.</p>
                </article>
                <article style="background: #f8f9fa; padding: 30px; border-radius: 10px;">
                    <h3 style="color: #1F3B8D; font-size: 20px; margin-bottom: 15px;">BOT Compliance</h3>
                    <p style="color: #666; line-height: 1.7;">Fully compliant with Bank of Tanzania regulations and reporting requirements.</p>
                </article>
                <article style="background: #f8f9fa; padding: 30px; border-radius: 10px;">
                    <h3 style="color: #1F3B8D; font-size: 20px; margin-bottom: 15px;">Monitoring Dashboard</h3>
                    <p style="color: #666; line-height: 1.7;">Real-time transaction monitoring, alerts, and comprehensive reporting tools.</p>
                </article>
                <article style="background: #f8f9fa; padding: 30px; border-radius: 10px;">
                    <h3 style="color: #1F3B8D; font-size: 20px; margin-bottom: 15px;">24/7 Support</h3>
                    <p style="color: #666; line-height: 1.7;">Round-the-clock technical support with dedicated account management.</p>
                </article>
            </div>
        </div>
    </section>

    @include('frontend.partials.explore-more')

    <section aria-label="Call to action" style="padding: 80px 40px; background: linear-gradient(135deg, #FF621B 0%, #e55516 100%); text-align: center; color: #fff;">
        <div style="max-width: 1200px; margin: 0 auto;">
            <h2 style="font-family: 'Roboto Slab', serif; font-size: 36px; margin-bottom: 20px;">Ready to Connect to RTGS?</h2>
            <p style="font-size: 18px; margin-bottom: 30px; opacity: 0.9;">Get a free consultation and learn how ZIMA Solutions can integrate your systems with Bank of Tanzania's RTGS infrastructure.</p>
            <a href="{{ route('contact') }}" style="background: #fff; color: #FF621B; padding: 16px 40px; border-radius: 50px; text-decoration: none; font-weight: 600; display: inline-block;">Contact Us Today</a>
        </div>
    </section>
</div>
@endsection
