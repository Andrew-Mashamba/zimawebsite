@extends('layouts.web')

@section('title', 'Bulk SMS Service Tanzania | Lowest Cost SMS API & Gateway | ZIMA Solutions')
@section('meta_title', 'SMS Service Tanzania – Low-Cost Bulk SMS API & Gateway | ZIMA Solutions')
@section('meta_description', 'Send bulk SMS in Tanzania at the lowest cost. ZIMA SMS Service offers HTTP/SMPP API, delivery reports, sender ID, and support for all Tanzanian networks. OTP, alerts, and marketing SMS for businesses.')
@section('meta_keywords', 'bulk SMS Tanzania, SMS gateway Tanzania, low cost SMS API, SMPP Tanzania, OTP SMS, Vodacom Airtel Tigo SMS, Dar es Salaam')
@section('og_title', 'SMS Service Tanzania – Low-Cost Bulk SMS API | ZIMA Solutions')
@section('og_description', 'Bulk SMS at the lowest cost in Tanzania. Reliable API, delivery reports, and coverage across all major networks.')
@section('twitter_title', 'SMS Service Tanzania – Lowest Cost | ZIMA Solutions')
@section('twitter_description', 'Bulk SMS API & gateway. OTP, alerts, marketing. All Tanzanian networks. Tanzania.')

@section('structured_data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "@id": "{{ url('/services/sms-service') }}#service",
    "name": "SMS Service - Lowest Cost in Tanzania",
    "serviceType": "SMS Gateway",
    "description": "Bulk and transactional SMS service in Tanzania at competitive low cost. HTTP and SMPP API with delivery reports, sender ID branding, and coverage across Vodacom, Airtel, Tigo, Halotel, and TTCL.",
    "provider": { "@id": "{{ url('/') }}#organization" },
    "areaServed": { "@type": "Country", "name": "Tanzania" },
    "url": "{{ url('/services/sms-service') }}"
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "SMS Service – Lowest Cost in Tanzania | ZIMA Solutions",
    "description": "Bulk and transactional SMS in Tanzania at the lowest cost. HTTP and SMPP API, all networks, delivery reports, sender ID. OTP, alerts, campaigns.",
    "url": "{{ url('/services/sms-service') }}",
    "breadcrumb": {
        "@type": "BreadcrumbList",
        "itemListElement": [
            {"@type": "ListItem", "position": 1, "name": "Home", "item": "{{ url('/') }}"},
            {"@type": "ListItem", "position": 2, "name": "Our Services", "item": "{{ url('/our-services') }}"},
            {"@type": "ListItem", "position": 3, "name": "SMS Service", "item": "{{ url('/services/sms-service') }}"}
        ]
    }
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
                    <li><a href="{{ route('our-products') }}" style="color: #fff; text-decoration: none;">Products</a></li>
                    <li>/</li>
                    <li>SMS Service</li>
                </ol>
            </nav>
            <h1 style="font-family: 'Roboto Slab', serif; font-size: 48px; font-weight: 700; margin-bottom: 20px; color: #fff;">SMS Service – Lowest Cost in Tanzania</h1>
            <p style="font-size: 20px; line-height: 1.6; opacity: 0.9; max-width: 700px; margin: 0 auto 30px;">Send bulk and transactional SMS across Tanzania at the lowest cost. Reliable API, delivery reports, and coverage on all major networks—Vodacom, Airtel, Tigo, Halotel, and TTCL.</p>
            <a href="{{ route('contact') }}" class="btn-primary" style="background: #FF621B; color: #fff; padding: 16px 40px; border-radius: 50px; text-decoration: none; font-weight: 600; display: inline-block;">Request Consultation</a>
        </div>
    </section>

    <section aria-label="Overview" style="padding: 60px 40px; background: #fff;">
        <div style="max-width: 1200px; margin: 0 auto;">
            <h2 style="font-family: 'Roboto Slab', serif; font-size: 28px; color: #1F3B8D; margin-bottom: 20px;">Why Choose ZIMA SMS Service?</h2>
            <p style="color: #374151; line-height: 1.8; margin-bottom: 16px;">ZIMA Solutions’ SMS Service is built for Tanzanian businesses that need to reach customers reliably and affordably. We offer competitive per-SMS pricing so you can run OTP verification, transaction alerts, appointment reminders, and marketing campaigns without high messaging costs. Our gateway connects to all major Tanzanian mobile networks, so your messages reach Vodacom, Airtel, Tigo, Halotel, and TTCL subscribers with high delivery rates.</p>
            <p style="color: #374151; line-height: 1.8;">Integrate via simple HTTP REST API or SMPP for high-volume use. Get delivery reports, use your own sender ID (where approved), and send in English or Swahili. Whether you’re a bank, MFI, clinic, school, or retailer, our SMS service scales from hundreds to millions of messages at the lowest cost in Tanzania.</p>
        </div>
    </section>

    <section aria-label="Key features" style="padding: 80px 40px; background: #f8f9fa;">
        <div style="max-width: 1200px; margin: 0 auto;">
            <h2 style="text-align: center; font-family: 'Roboto Slab', serif; font-size: 36px; margin-bottom: 50px; color: #1F3B8D;">Key Features</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
                <article style="background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 2px 12px rgba(0,0,0,0.06);">
                    <h3 style="color: #1F3B8D; font-size: 20px; margin-bottom: 15px;">Lowest Cost per SMS</h3>
                    <p style="color: #666; line-height: 1.7;">Competitive pricing so you can run OTP, alerts, and campaigns at the lowest cost in Tanzania.</p>
                </article>
                <article style="background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 2px 12px rgba(0,0,0,0.06);">
                    <h3 style="color: #1F3B8D; font-size: 20px; margin-bottom: 15px;">HTTP & SMPP API</h3>
                    <p style="color: #666; line-height: 1.7;">REST API for quick integration; SMPP for high-volume and enterprise use with real-time delivery status.</p>
                </article>
                <article style="background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 2px 12px rgba(0,0,0,0.06);">
                    <h3 style="color: #1F3B8D; font-size: 20px; margin-bottom: 15px;">All Tanzanian Networks</h3>
                    <p style="color: #666; line-height: 1.7;">Delivery across Vodacom, Airtel, Tigo, Halotel, and TTCL for maximum reach.</p>
                </article>
                <article style="background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 2px 12px rgba(0,0,0,0.06);">
                    <h3 style="color: #1F3B8D; font-size: 20px; margin-bottom: 15px;">Delivery Reports & Sender ID</h3>
                    <p style="color: #666; line-height: 1.7;">Real-time delivery reports and optional sender ID branding for trust and recognition.</p>
                </article>
            </div>
        </div>
    </section>

    @include('frontend.partials.explore-more')

    <section aria-label="Call to action" style="padding: 80px 40px; background: linear-gradient(135deg, #FF621B 0%, #e55516 100%); text-align: center; color: #fff;">
        <div style="max-width: 1200px; margin: 0 auto;">
            <h2 style="font-family: 'Roboto Slab', serif; font-size: 36px; margin-bottom: 20px;">Start Sending SMS at the Lowest Cost</h2>
            <p style="font-size: 18px; margin-bottom: 30px; opacity: 0.9;">Get competitive rates and reliable delivery across Tanzania. Contact us for pricing and API access.</p>
            <a href="{{ route('contact') }}" style="background: #fff; color: #FF621B; padding: 16px 40px; border-radius: 50px; text-decoration: none; font-weight: 600; display: inline-block;">Contact Us Today</a>
        </div>
    </section>
</div>
@endsection
