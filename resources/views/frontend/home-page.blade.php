@extends('layouts.web')

@section('title', 'ZIMA Solutions Limited - Digital Transformation & Enterprise Integration in Tanzania')
@section('meta_title', 'ZIMA Solutions - Leading Fintech & Digital Transformation Company in Tanzania')
@section('meta_description', 'ZIMA Solutions Limited specializes in RTGS, TIPS, GePG integration, API gateways, and enterprise software for banks, government agencies, and businesses in Tanzania. 99.9% uptime guaranteed.')
@section('meta_keywords', 'ZIMA Solutions, digital transformation Tanzania, RTGS integration, TIPS integration, GePG gateway, API gateway, fintech Tanzania, enterprise software Tanzania, BOT compliance, mobile money integration, banking software Dar es Salaam, microfinance solutions')
@section('og_title', 'ZIMA Solutions - Build Your Digital Future')
@section('og_description', 'Transform your operations with secure, scalable enterprise solutions. RTGS, TIPS, GePG integration experts with 20+ enterprise projects and 50+ satisfied clients.')
@section('twitter_title', 'ZIMA Solutions - Digital Transformation Experts in Tanzania')
@section('twitter_description', 'Leading fintech company specializing in enterprise integration, payment solutions, and digital transformation for financial institutions in East Africa.')

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
        {
            "@type": "Service",
            "position": 1,
            "name": "RTGS Integration",
            "description": "Real-Time Gross Settlement system integration for instant high-value interbank transfers"
        },
        {
            "@type": "Service",
            "position": 2,
            "name": "TIPS Integration",
            "description": "Tanzania Instant Payment System for real-time retail payments and mobile money connectivity"
        },
        {
            "@type": "Service",
            "position": 3,
            "name": "GePG Gateway",
            "description": "Government electronic Payment Gateway integration for compliant government transactions"
        },
        {
            "@type": "Service",
            "position": 4,
            "name": "API Gateway Service",
            "description": "Unified platform connecting banks, mobile money operators, and third-party services"
        }
    ]
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "What is RTGS integration and why do banks need it?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "RTGS (Real-Time Gross Settlement) integration connects your banking system directly to the Bank of Tanzania's settlement infrastructure for instant, high-value interbank transfers. Banks need it for BOT compliance, faster settlement times, and reduced operational risks in large-value transactions."
            }
        },
        {
            "@type": "Question",
            "name": "What is TIPS integration in Tanzania?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "TIPS (Tanzania Instant Payment System) enables real-time retail payments including Bank-to-Wallet, Wallet-to-Bank, Bank-to-Bank transfers, and TanQR payments. ZIMA Solutions provides seamless TIPS integration for financial institutions to expand their digital payment ecosystem."
            }
        },
        {
            "@type": "Question",
            "name": "What is GePG and how does it work?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "GePG (Government electronic Payment Gateway) is Tanzania's official system for collecting government revenue. ZIMA Solutions integrates your banking channels (branches, ATMs, mobile, internet, USSD) with GePG, enabling customers to conveniently pay government fees and taxes through your institution."
            }
        },
        {
            "@type": "Question",
            "name": "What industries does ZIMA Solutions serve?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "ZIMA Solutions serves financial institutions (banks, MFIs, SACCOS), government agencies, agricultural cooperatives (AMCOS), fintech companies, and enterprises across Tanzania. Our solutions include payment integration, loan management, regulatory compliance, and digital transformation services."
            }
        }
    ]
}
</script>
@endsection

@section('body-section')
    <section id="home" aria-label="Hero Section">
        <livewire:frontend.components.welcome />
    </section>

    <section id="about" aria-label="About ZIMA Solutions">
        <livewire:frontend.components.about-us />
    </section>

    <section id="services" aria-label="Our Solutions and Services">
        <livewire:frontend.components.service-list />
    </section>

    <section id="impact" aria-label="Our Impact and Projects">
        <livewire:frontend.components.our-work-page />
    </section>

    <section id="clients" aria-label="Our Clients">
        <livewire:frontend.components.other-work />
    </section>

    <section id="contact" aria-label="Contact Us">
        <livewire:frontend.components.services />
    </section>
@endsection
