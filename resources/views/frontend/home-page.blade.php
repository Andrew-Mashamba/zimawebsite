@extends('layouts.web')

@section('title', 'ZIMA Solutions – Payment Gateway & Fintech | Tanzania')
@section('meta_title', 'ZIMA Solutions – Payment Gateway & Fintech | Tanzania')
@section('meta_description', 'ZIMA Solutions: payment gateway Tanzania, GePG, RTGS, TIPS, and fintech for banks and businesses. Government electronic payment gateway, M-Pesa, API gateways, AI agents. Dar es Salaam.')
@section('meta_keywords', 'ZIMA Solutions, payment gateway Tanzania, Tanzania payment gateway, government electronic payment gateway, GePG, RTGS, TIPS, fintech Tanzania, Dar es Salaam')
@section('og_title', 'ZIMA Solutions – Payment Gateway & Fintech | Tanzania')
@section('og_description', 'Payment gateway Tanzania, GePG, RTGS, TIPS, M-Pesa integration. ZIMA Solutions – fintech and digital transformation for banks and businesses.')
@section('twitter_title', 'ZIMA Solutions – Payment Gateway & Fintech | Tanzania')
@section('twitter_description', 'Payment gateway Tanzania, GePG, RTGS, TIPS. ZIMA Solutions – fintech for banks and businesses in Tanzania.')

@section('structured_data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "ZIMA Solutions Limited - Home",
    "description": "Digital transformation and enterprise integration solutions for financial institutions and government agencies in Tanzania",
    "url": "{{ url('/') }}",
    "mainEntity": {
        "@type": "Organization",
        "name": "ZIMA Solutions Limited"
    },
    "breadcrumb": {
        "@type": "BreadcrumbList",
        "itemListElement": [{
            "@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "{{ url('/') }}"
        }]
    }
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "ItemList",
    "name": "ZIMA Solutions Services",
    "itemListElement": [
        {"@type": "Service", "position": 1, "name": "RTGS Integration", "description": "Real-Time Gross Settlement system integration for instant high-value interbank transfers"},
        {"@type": "Service", "position": 2, "name": "TIPS Integration", "description": "Tanzania Instant Payment System for real-time retail payments and mobile money connectivity"},
        {"@type": "Service", "position": 3, "name": "GePG Gateway", "description": "Government electronic Payment Gateway integration for compliant government transactions"},
        {"@type": "Service", "position": 4, "name": "API Gateway Service", "description": "Unified platform connecting banks, mobile money operators, and third-party services"}
    ]
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {"@type": "Question", "name": "What is RTGS integration and why do banks need it?", "acceptedAnswer": {"@type": "Answer", "text": "RTGS integration connects your banking system to the Bank of Tanzania's settlement infrastructure for instant, high-value interbank transfers. Banks need it for BOT compliance, faster settlement, and reduced operational risk."}},
        {"@type": "Question", "name": "What is TIPS integration in Tanzania?", "acceptedAnswer": {"@type": "Answer", "text": "TIPS (Tanzania Instant Payment System) enables real-time retail payments including Bank-to-Wallet, Wallet-to-Bank, and TanQR. ZIMA provides seamless TIPS integration for financial institutions."}},
        {"@type": "Question", "name": "What industries does ZIMA Solutions serve?", "acceptedAnswer": {"@type": "Answer", "text": "ZIMA serves financial institutions (banks, MFIs, SACCOS), government agencies, cooperatives, fintechs, and enterprises across Tanzania with payment integration, loan management, and digital transformation."}}
    ]
}
</script>
@endsection

@section('body-section')
    <section id="home" aria-label="Hero Section">
        <livewire:frontend.components.welcome />
    </section>

    {{-- Corporate (Motto, Mission, Vision) + Summary of main site areas --}}
    <section id="about" aria-label="About and site overview" class="home-summary-section" style="background: #fff; padding: 64px 24px 48px;">
        <div style="max-width: 1200px; margin: 0 auto;">
            {{-- Corporate block --}}
            <div style="text-align: center; margin-bottom: 48px; padding-bottom: 40px; border-bottom: 1px solid #e5e7eb;">
                <p style="font-family: 'Roboto Slab', serif; font-size: 20px; font-weight: 700; color: #B84814; margin: 0 0 8px;">Our Motto</p>
                <h2 style="font-family: 'Roboto Slab', serif; font-size: 28px; font-weight: 700; color: #1F3B8D; margin: 0 0 32px;">Build Your Future</h2>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 28px; text-align: left;">
                    <div>
                        <h3 style="font-family: 'Roboto Slab', serif; font-size: 16px; font-weight: 700; color: #1F3B8D; margin: 0 0 8px;">Mission</h3>
                        <p style="font-size: 15px; line-height: 1.65; color: #4b5563; margin: 0;">To empower organizations through secure, scalable digital systems, automation, and inclusive finance—enabling sustainable growth in an evolving digital economy.</p>
                    </div>
                    <div>
                        <h3 style="font-family: 'Roboto Slab', serif; font-size: 16px; font-weight: 700; color: #1F3B8D; margin: 0 0 8px;">Vision</h3>
                        <p style="font-size: 15px; line-height: 1.65; color: #4b5563; margin: 0;">To be the trusted partner for digital transformation and financial inclusion across Tanzania and East Africa.</p>
                    </div>
                </div>
            </div>

            {{-- Summary grid: Services, Products, AI Agents, Partnership, Invest, Financial Inclusion, Contact --}}
            <h2 style="font-family: 'Roboto Slab', serif; font-size: 22px; font-weight: 700; color: #1F3B8D; margin-bottom: 24px; text-align: center;">Explore ZIMA</h2>
            <div class="home-summary-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 20px;">
                <a href="{{ route('our-services') }}" style="background: #f8f9fa; border: 1px solid #e5e7eb; border-radius: 12px; padding: 24px; text-decoration: none; color: inherit; transition: all 0.25s ease;">
                    <h3 style="font-family: 'Roboto Slab', serif; font-size: 18px; font-weight: 700; color: #1F3B8D; margin: 0 0 8px;">Services</h3>
                    <p style="font-size: 14px; line-height: 1.55; color: #6b7280; margin: 0;">RTGS, TIPS, GePG, and NIDA integration. We connect your systems to national infrastructure.</p>
                    <span style="display: inline-block; margin-top: 12px; font-size: 13px; font-weight: 600; color: #B84814;">View services →</span>
                </a>
                <a href="{{ route('our-products') }}" style="background: #f8f9fa; border: 1px solid #e5e7eb; border-radius: 12px; padding: 24px; text-decoration: none; color: inherit; transition: all 0.25s ease;">
                    <h3 style="font-family: 'Roboto Slab', serif; font-size: 18px; font-weight: 700; color: #1F3B8D; margin: 0 0 8px;">Products</h3>
                    <p style="font-size: 14px; line-height: 1.55; color: #6b7280; margin: 0;">Software we build and sell: API Gateway, AI Agents, Loan Management, SMS, SACCO systems, and more.</p>
                    <span style="display: inline-block; margin-top: 12px; font-size: 13px; font-weight: 600; color: #B84814;">View products →</span>
                </a>
                <a href="{{ route('ai-agents') }}" style="background: #f8f9fa; border: 1px solid #e5e7eb; border-radius: 12px; padding: 24px; text-decoration: none; color: inherit; transition: all 0.25s ease;">
                    <h3 style="font-family: 'Roboto Slab', serif; font-size: 18px; font-weight: 700; color: #1F3B8D; margin: 0 0 8px;">AI Agents</h3>
                    <p style="font-size: 14px; line-height: 1.55; color: #6b7280; margin: 0;">Conversational AI for WhatsApp, web chat, and API. Industry solutions for healthcare, retail, education.</p>
                    <span style="display: inline-block; margin-top: 12px; font-size: 13px; font-weight: 600; color: #B84814;">Learn more →</span>
                </a>
                <a href="{{ route('partnership-programme') }}" style="background: #f8f9fa; border: 1px solid #e5e7eb; border-radius: 12px; padding: 24px; text-decoration: none; color: inherit; transition: all 0.25s ease;">
                    <h3 style="font-family: 'Roboto Slab', serif; font-size: 18px; font-weight: 700; color: #1F3B8D; margin: 0 0 8px;">Partnership Programme</h3>
                    <p style="font-size: 14px; line-height: 1.55; color: #6b7280; margin: 0;">50/50 strategic partnerships. Your idea + our technology. Co-invest, co-build, co-own.</p>
                    <span style="display: inline-block; margin-top: 12px; font-size: 13px; font-weight: 600; color: #B84814;">Partnership details →</span>
                </a>
                <a href="{{ route('invest-in-tanzania') }}" style="background: #f8f9fa; border: 1px solid #e5e7eb; border-radius: 12px; padding: 24px; text-decoration: none; color: inherit; transition: all 0.25s ease;">
                    <h3 style="font-family: 'Roboto Slab', serif; font-size: 18px; font-weight: 700; color: #1F3B8D; margin: 0 0 8px;">Invest in Tanzania</h3>
                    <p style="font-size: 14px; line-height: 1.55; color: #6b7280; margin: 0;">For foreign companies and individuals. Explore Tanzania’s tech sector with ZIMA as your local partner.</p>
                    <span style="display: inline-block; margin-top: 12px; font-size: 13px; font-weight: 600; color: #B84814;">Investment opportunities →</span>
                </a>
                <a href="{{ route('financial-inclusion-initiatives') }}" style="background: #f8f9fa; border: 1px solid #e5e7eb; border-radius: 12px; padding: 24px; text-decoration: none; color: inherit; transition: all 0.25s ease;">
                    <h3 style="font-family: 'Roboto Slab', serif; font-size: 18px; font-weight: 700; color: #1F3B8D; margin: 0 0 8px;">Financial Inclusion</h3>
                    <p style="font-size: 14px; line-height: 1.55; color: #6b7280; margin: 0;">Scalable digital infrastructure for banks, SACCOS, and underserved communities. Impact-driven, policy-aligned.</p>
                    <span style="display: inline-block; margin-top: 12px; font-size: 13px; font-weight: 600; color: #B84814;">Initiatives →</span>
                </a>
                <a href="{{ route('contact') }}" style="background: #f8f9fa; border: 1px solid #e5e7eb; border-radius: 12px; padding: 24px; text-decoration: none; color: inherit; transition: all 0.25s ease;">
                    <h3 style="font-family: 'Roboto Slab', serif; font-size: 18px; font-weight: 700; color: #1F3B8D; margin: 0 0 8px;">Contact</h3>
                    <p style="font-size: 14px; line-height: 1.55; color: #6b7280; margin: 0;">Get in touch for consultations, demos, or partnership discussions.</p>
                    <span style="display: inline-block; margin-top: 12px; font-size: 13px; font-weight: 600; color: #B84814;">Contact us →</span>
                </a>
            </div>
        </div>
        <style>
            .home-summary-grid a:hover { border-color: #1F3B8D; box-shadow: 0 8px 24px rgba(31, 59, 141, 0.12); }
            @media (max-width: 640px) { .home-summary-grid { grid-template-columns: 1fr; } }
        </style>
    </section>

    {{-- Short About + Stats (from original about-us, condensed) --}}
    <section aria-label="Who we are" style="background: #fff; padding: 56px 24px;">
        <div style="max-width: 1200px; margin: 0 auto;">
            <p style="color: #B84814; font-weight: 600; text-transform: uppercase; letter-spacing: 2px; font-size: 13px; margin-bottom: 8px;">Who We Are</p>
            <h2 style="font-family: 'Roboto Slab', serif; font-size: 28px; font-weight: 700; color: #1F3B8D; margin-bottom: 16px;">Transforming Digital Futures</h2>
            <p style="font-size: 16px; line-height: 1.75; color: #374151; margin-bottom: 32px;">ZIMA Solutions Limited is a technology and business innovation company specializing in digital transformation for financial institutions, government agencies, and enterprises. We design and implement secure, scalable systems that drive operational efficiency, compliance, and digital inclusion.</p>
            <div class="home-stats-grid" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px;">
                <div style="text-align: center; padding: 24px 16px; background: linear-gradient(135deg, #1F3B8D, #2a4a9e); border-radius: 12px; color: #fff;">
                    <div style="font-family: 'Roboto Slab', serif; font-size: 36px; font-weight: 700; color: #FF621B;">20+</div>
                    <div style="font-size: 13px; text-transform: uppercase; letter-spacing: 1px; opacity: 0.9;">Enterprise Projects</div>
                </div>
                <div style="text-align: center; padding: 24px 16px; background: linear-gradient(135deg, #1F3B8D, #2a4a9e); border-radius: 12px; color: #fff;">
                    <div style="font-family: 'Roboto Slab', serif; font-size: 36px; font-weight: 700; color: #FF621B;">50+</div>
                    <div style="font-size: 13px; text-transform: uppercase; letter-spacing: 1px; opacity: 0.9;">Client Organizations</div>
                </div>
                <div style="text-align: center; padding: 24px 16px; background: linear-gradient(135deg, #1F3B8D, #2a4a9e); border-radius: 12px; color: #fff;">
                    <div style="font-family: 'Roboto Slab', serif; font-size: 36px; font-weight: 700; color: #FF621B;">4</div>
                    <div style="font-size: 13px; text-transform: uppercase; letter-spacing: 1px; opacity: 0.9;">BOT Integrations</div>
                </div>
                <div style="text-align: center; padding: 24px 16px; background: linear-gradient(135deg, #1F3B8D, #2a4a9e); border-radius: 12px; color: #fff;">
                    <div style="font-family: 'Roboto Slab', serif; font-size: 36px; font-weight: 700; color: #FF621B;">99.9%</div>
                    <div style="font-size: 13px; text-transform: uppercase; letter-spacing: 1px; opacity: 0.9;">System Uptime</div>
                </div>
            </div>
        </div>
        <style>@media (max-width: 700px) { .home-stats-grid { grid-template-columns: repeat(2, 1fr); } }</style>
    </section>

    <section id="contact" aria-label="Contact Us">
        <livewire:frontend.components.services />
    </section>
@endsection
