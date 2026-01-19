@extends('layouts.web')

@section('title', 'GePG Gateway Integration - Government e-Payment Gateway | ZIMA Solutions')
@section('meta_title', 'GePG Integration Tanzania - Government Payments | ZIMA Solutions Limited')
@section('meta_description', 'GePG Gateway integration services enabling your bank to collect government revenue through all channels - branches, ATMs, mobile banking, internet banking, and USSD.')
@section('meta_keywords', 'GePG integration Tanzania, Government e-Payment Gateway, government payments Tanzania, TRA payments, government revenue collection, bill payments Tanzania')
@section('og_title', 'GePG Gateway Integration - ZIMA Solutions')
@section('og_description', 'Enable government payment collection through all your banking channels with GePG integration.')

@section('structured_data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "@id": "{{ url('/services/gepg-gateway') }}#service",
    "name": "GePG Gateway Integration",
    "serviceType": "Government Payment Gateway",
    "description": "Government electronic Payment Gateway integration enabling financial institutions to collect government revenue through branches, ATMs, mobile banking, internet banking, and USSD channels.",
    "provider": {
        "@id": "{{ url('/') }}#organization"
    },
    "areaServed": {
        "@type": "Country",
        "name": "Tanzania"
    },
    "url": "{{ url('/services/gepg-gateway') }}",
    "image": "{{ asset('/vf/zima.png') }}"
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "GePG Gateway Integration",
    "description": "GePG integration services for financial institutions in Tanzania",
    "url": "{{ url('/services/gepg-gateway') }}",
    "breadcrumb": {
        "@type": "BreadcrumbList",
        "itemListElement": [
            {"@type": "ListItem", "position": 1, "name": "Home", "item": "{{ url('/') }}"},
            {"@type": "ListItem", "position": 2, "name": "Services", "item": "{{ url('/service') }}"},
            {"@type": "ListItem", "position": 3, "name": "GePG Gateway", "item": "{{ url('/services/gepg-gateway') }}"}
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
            "name": "What is GePG?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "GePG (Government electronic Payment Gateway) is Tanzania's official system for collecting government revenue. It connects banks and payment service providers to government agencies, enabling citizens to pay taxes, fees, and other government charges through various banking channels."
            }
        },
        {
            "@type": "Question",
            "name": "What government payments can be processed through GePG?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "GePG supports payments for TRA taxes, LATRA fees, business licenses, land fees, port charges, immigration fees, education fees, and various other government services. Any payment to a GePG-enabled government agency can be processed."
            }
        },
        {
            "@type": "Question",
            "name": "What channels support GePG payments?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "With ZIMA Solutions GePG integration, customers can make government payments through bank branches, ATMs, mobile banking apps, internet banking, USSD, and agent banking. We integrate all your channels with GePG for maximum convenience."
            }
        }
    ]
}
</script>
@endsection

@section('body-section')
<div class="service-page-container" style="padding: 0;">
    <!-- Hero Section -->
    <section class="service-hero" style="background: linear-gradient(135deg, #1F3B8D 0%, #2a4a9e 100%); color: #fff; padding: 120px 40px 80px; text-align: center;">
        <div style="max-width: 900px; margin: 0 auto;">
            <nav aria-label="Breadcrumb" style="margin-bottom: 20px;">
                <ol style="list-style: none; padding: 0; display: flex; justify-content: center; gap: 10px; font-size: 14px; opacity: 0.8;">
                    <li><a href="/" style="color: #fff; text-decoration: none;">Home</a></li>
                    <li>/</li>
                    <li><a href="/service" style="color: #fff; text-decoration: none;">Services</a></li>
                    <li>/</li>
                    <li>GePG Gateway</li>
                </ol>
            </nav>
            <h1 style="font-family: 'Roboto Slab', serif; font-size: 48px; font-weight: 700; margin-bottom: 20px;">GePG Gateway Integration</h1>
            <p style="font-size: 20px; line-height: 1.6; opacity: 0.9; max-width: 700px; margin: 0 auto 30px;">Enable your customers to pay government fees and taxes through all your banking channels with GePG Version 2.0 integration.</p>
            <a href="/contact" class="btn-primary" style="background: #FF621B; color: #fff; padding: 16px 40px; border-radius: 50px; text-decoration: none; font-weight: 600; display: inline-block;">Request Consultation</a>
        </div>
    </section>

    <!-- Channels Section -->
    <section style="padding: 80px 40px; background: #fff;">
        <div style="max-width: 1200px; margin: 0 auto;">
            <h2 style="text-align: center; font-family: 'Roboto Slab', serif; font-size: 36px; margin-bottom: 50px; color: #1F3B8D;">Supported Payment Channels</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 25px;">
                <article style="background: #f8f9fa; padding: 25px; border-radius: 10px; text-align: center;">
                    <h3 style="color: #1F3B8D; font-size: 18px; margin-bottom: 10px;">Branch Banking</h3>
                    <p style="color: #666; font-size: 14px;">Over-the-counter payments at bank branches</p>
                </article>
                <article style="background: #f8f9fa; padding: 25px; border-radius: 10px; text-align: center;">
                    <h3 style="color: #1F3B8D; font-size: 18px; margin-bottom: 10px;">ATM</h3>
                    <p style="color: #666; font-size: 14px;">Self-service payments at ATM machines</p>
                </article>
                <article style="background: #f8f9fa; padding: 25px; border-radius: 10px; text-align: center;">
                    <h3 style="color: #1F3B8D; font-size: 18px; margin-bottom: 10px;">Mobile Banking</h3>
                    <p style="color: #666; font-size: 14px;">Payments via mobile banking apps</p>
                </article>
                <article style="background: #f8f9fa; padding: 25px; border-radius: 10px; text-align: center;">
                    <h3 style="color: #1F3B8D; font-size: 18px; margin-bottom: 10px;">Internet Banking</h3>
                    <p style="color: #666; font-size: 14px;">Online payments via web portal</p>
                </article>
                <article style="background: #f8f9fa; padding: 25px; border-radius: 10px; text-align: center;">
                    <h3 style="color: #1F3B8D; font-size: 18px; margin-bottom: 10px;">USSD</h3>
                    <p style="color: #666; font-size: 14px;">Payments via USSD codes</p>
                </article>
                <article style="background: #f8f9fa; padding: 25px; border-radius: 10px; text-align: center;">
                    <h3 style="color: #1F3B8D; font-size: 18px; margin-bottom: 10px;">Agent Banking</h3>
                    <p style="color: #666; font-size: 14px;">Payments through banking agents</p>
                </article>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section style="padding: 80px 40px; background: linear-gradient(135deg, #FF621B 0%, #e55516 100%); text-align: center; color: #fff;">
        <div style="max-width: 800px; margin: 0 auto;">
            <h2 style="font-family: 'Roboto Slab', serif; font-size: 36px; margin-bottom: 20px;">Ready to Enable GePG Payments?</h2>
            <p style="font-size: 18px; margin-bottom: 30px; opacity: 0.9;">Offer your customers convenient government payment services across all channels.</p>
            <a href="/contact" style="background: #fff; color: #FF621B; padding: 16px 40px; border-radius: 50px; text-decoration: none; font-weight: 600; display: inline-block;">Contact Us Today</a>
        </div>
    </section>
</div>
@endsection
