@extends('layouts.web')

@section('title', 'NIDA Integration – Zima NIDA Gate | National ID Verification Tanzania | ZIMA Solutions')
@section('meta_title', 'NIDA Integration via Zima NIDA Gate | KYC & National ID Verification Tanzania')
@section('meta_description', 'Integrate Tanzania National Identification Authority (NIDA) with Zima NIDA Gate. Secure, compliant KYC verification using National ID (NIN) for banks, fintechs, and regulated businesses in Tanzania.')
@section('meta_keywords', 'NIDA integration Tanzania, Zima NIDA Gate, national ID verification, NIN verification API, KYC Tanzania, NIDA API integration, identity verification Dar es Salaam')
@section('og_title', 'NIDA Integration – Zima NIDA Gate | ZIMA Solutions')
@section('og_description', 'Secure NIDA integration for Tanzania. Verify citizen identity via National ID with Zima NIDA Gate—built for banks, fintechs, and regulated businesses.')
@section('twitter_title', 'NIDA Integration – Zima NIDA Gate | ZIMA Solutions')
@section('twitter_description', 'KYC & National ID verification. Zima NIDA Gate for banks, fintechs. Tanzania.')

@section('structured_data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "@id": "{{ url('/services/nida-integration') }}#service",
    "name": "NIDA Integration - Zima NIDA Gate",
    "serviceType": "Identity Verification",
    "description": "Integration with Tanzania National Identification Authority (NIDA) for secure citizen verification using National Identification Number (NIN). Enables KYC compliance for banks, fintechs, and regulated businesses.",
    "provider": { "@id": "{{ url('/') }}#organization" },
    "areaServed": { "@type": "Country", "name": "Tanzania" },
    "url": "{{ url('/services/nida-integration') }}"
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "NIDA Integration & Zima NIDA Gate | ZIMA Solutions",
    "description": "Zima NIDA Gate: gateway for NIDA integration in Tanzania. Real-time NIN verification for KYC, account opening, and compliance. Simple API for banks and MFIs.",
    "url": "{{ url('/services/nida-integration') }}",
    "breadcrumb": {
        "@type": "BreadcrumbList",
        "itemListElement": [
            {"@type": "ListItem", "position": 1, "name": "Home", "item": "{{ url('/') }}"},
            {"@type": "ListItem", "position": 2, "name": "Our Services", "item": "{{ url('/our-services') }}"},
            {"@type": "ListItem", "position": 3, "name": "NIDA Integration", "item": "{{ url('/services/nida-integration') }}"}
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
                    <li><a href="{{ route('our-services') }}" style="color: #fff; text-decoration: none;">Services</a></li>
                    <li>/</li>
                    <li>NIDA Integration</li>
                </ol>
            </nav>
            <h1 style="font-family: 'Roboto Slab', serif; font-size: 48px; font-weight: 700; margin-bottom: 20px; color: #fff;">NIDA Integration – Zima NIDA Gate</h1>
            <p style="font-size: 20px; line-height: 1.6; opacity: 0.9; max-width: 700px; margin: 0 auto 30px;">Connect to Tanzania’s National Identification Authority (NIDA) for secure, compliant KYC and identity verification using the National Identification Number (NIN).</p>
            <a href="{{ route('contact') }}" class="btn-primary" style="background: #FF621B; color: #fff; padding: 16px 40px; border-radius: 50px; text-decoration: none; font-weight: 600; display: inline-block;">Request Consultation</a>
        </div>
    </section>

    <section aria-label="Overview" style="padding: 60px 40px; background: #fff;">
        <div style="max-width: 1200px; margin: 0 auto;">
            <h2 style="font-family: 'Roboto Slab', serif; font-size: 28px; color: #1F3B8D; margin-bottom: 20px;">What is Zima NIDA Gate?</h2>
            <p style="color: #374151; line-height: 1.8; margin-bottom: 16px;">Zima NIDA Gate is ZIMA Solutions’ gateway for integrating with the National Identification Authority (NIDA) of Tanzania. It lets banks, microfinance institutions, fintechs, and other regulated businesses verify citizens in real time using the official National Identification Number (NIN), supporting KYC, account opening, and compliance with Tanzanian regulations.</p>
            <p style="color: #374151; line-height: 1.8;">Instead of managing certificates and encryption directly with NIDA, you integrate once with Zima NIDA Gate and get a simple, secure API for verification—reducing complexity and speeding up deployment.</p>
        </div>
    </section>

    <section aria-label="Key features" style="padding: 80px 40px; background: #f8f9fa;">
        <div style="max-width: 1200px; margin: 0 auto;">
            <h2 style="text-align: center; font-family: 'Roboto Slab', serif; font-size: 36px; margin-bottom: 50px; color: #1F3B8D;">Key Features</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
                <article style="background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 2px 12px rgba(0,0,0,0.06);">
                    <h3 style="color: #1F3B8D; font-size: 20px; margin-bottom: 15px;">NIN Verification</h3>
                    <p style="color: #666; line-height: 1.7;">Verify National ID numbers against NIDA’s official database and receive validated citizen details for KYC and onboarding.</p>
                </article>
                <article style="background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 2px 12px rgba(0,0,0,0.06);">
                    <h3 style="color: #1F3B8D; font-size: 20px; margin-bottom: 15px;">Secure & Compliant</h3>
                    <p style="color: #666; line-height: 1.7;">Built with the security and encryption required for NIDA integration, helping you meet regulatory and data-protection standards.</p>
                </article>
                <article style="background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 2px 12px rgba(0,0,0,0.06);">
                    <h3 style="color: #1F3B8D; font-size: 20px; margin-bottom: 15px;">Simple API</h3>
                    <p style="color: #666; line-height: 1.7;">One integration point instead of managing multiple certificates and NIDA-specific implementations yourself.</p>
                </article>
                <article style="background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 2px 12px rgba(0,0,0,0.06);">
                    <h3 style="color: #1F3B8D; font-size: 20px; margin-bottom: 15px;">Faster Onboarding</h3>
                    <p style="color: #666; line-height: 1.7;">Speed up account opening, loan applications, and KYC workflows with real-time identity verification.</p>
                </article>
            </div>
        </div>
    </section>

    @include('frontend.partials.explore-more')

    <section aria-label="Call to action" style="padding: 80px 40px; background: linear-gradient(135deg, #FF621B 0%, #e55516 100%); text-align: center; color: #fff;">
        <div style="max-width: 1200px; margin: 0 auto;">
            <h2 style="font-family: 'Roboto Slab', serif; font-size: 36px; margin-bottom: 20px;">Ready to Integrate NIDA?</h2>
            <p style="font-size: 18px; margin-bottom: 30px; opacity: 0.9;">Use Zima NIDA Gate for compliant, secure National ID verification. Contact us for a consultation.</p>
            <a href="{{ route('contact') }}" style="background: #fff; color: #FF621B; padding: 16px 40px; border-radius: 50px; text-decoration: none; font-weight: 600; display: inline-block;">Contact Us Today</a>
        </div>
    </section>
</div>
@endsection
