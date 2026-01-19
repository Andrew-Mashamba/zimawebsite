@extends('layouts.web')

@section('title', 'Enterprise Solutions & Services - ZIMA Solutions Limited')
@section('meta_title', 'Enterprise Integration Services - RTGS, TIPS, GePG, API Gateway | ZIMA Solutions')
@section('meta_description', 'Discover ZIMA Solutions enterprise services: RTGS integration, TIPS connectivity, GePG gateway, API management, loan systems, and custom software development for financial institutions in Tanzania.')
@section('meta_keywords', 'enterprise integration services Tanzania, RTGS integration service, TIPS integration Tanzania, GePG gateway service, API gateway development, loan management system, fintech services East Africa')
@section('og_title', 'Enterprise Solutions & Services - ZIMA Solutions')
@section('og_description', 'Comprehensive enterprise integration services including RTGS, TIPS, GePG, and API gateway solutions for banks and financial institutions.')

@section('structured_data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Services - ZIMA Solutions Limited",
    "description": "Enterprise integration and digital transformation services",
    "url": "{{ url('/service') }}",
    "breadcrumb": {
        "@type": "BreadcrumbList",
        "itemListElement": [
            {"@type": "ListItem", "position": 1, "name": "Home", "item": "{{ url('/') }}"},
            {"@type": "ListItem", "position": 2, "name": "Services", "item": "{{ url('/service') }}"}
        ]
    }
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "serviceType": "Enterprise Software Integration",
    "provider": {
        "@type": "Organization",
        "name": "ZIMA Solutions Limited",
        "url": "{{ url('/') }}"
    },
    "areaServed": {
        "@type": "Country",
        "name": "Tanzania"
    },
    "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Enterprise Integration Services",
        "itemListElement": [
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "RTGS Integration with BOT",
                    "description": "Real-Time Gross Settlement system integration for high-value, time-critical payments with MT message types and MT-MX conversion (ISO 20022).",
                    "serviceType": "Payment System Integration"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "TIPS Integration with BOT",
                    "description": "Tanzania Instant Payment System integration for real-time retail payments including Bank-to-Wallet, Wallet-to-Bank, and TanQR.",
                    "serviceType": "Instant Payment Integration"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "GePG Gateway (Version 2.0)",
                    "description": "Government e-Payment Gateway integration enabling customers to pay government fees through multiple bank channels.",
                    "serviceType": "Government Payment Gateway"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "API Gateway Service",
                    "description": "Secure, scalable API management platform for exposing, integrating, and monetizing banking services with fintechs and partners.",
                    "serviceType": "API Management"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Loan Management System",
                    "description": "Complete platform for loan application, risk scoring, disbursement, and collections management.",
                    "serviceType": "Financial Software"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "BOT RTSIS Reporting",
                    "description": "Automated real-time supervisory information reporting system for Bank of Tanzania compliance.",
                    "serviceType": "Regulatory Compliance"
                }
            }
        ]
    }
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "HowTo",
    "name": "How to Get Started with ZIMA Solutions Enterprise Integration",
    "description": "Step-by-step guide to implementing enterprise integration solutions with ZIMA Solutions Limited",
    "totalTime": "P30D",
    "estimatedCost": {
        "@type": "MonetaryAmount",
        "currency": "USD",
        "value": "Contact for quote"
    },
    "step": [
        {
            "@type": "HowToStep",
            "position": 1,
            "name": "Initial Consultation",
            "text": "Contact ZIMA Solutions to schedule a free consultation. Our team will assess your current systems and understand your integration requirements.",
            "url": "{{ url('/contact') }}"
        },
        {
            "@type": "HowToStep",
            "position": 2,
            "name": "Requirements Analysis",
            "text": "Our technical team conducts a detailed analysis of your infrastructure, compliance requirements, and integration points with BOT systems (RTGS, TIPS, GePG)."
        },
        {
            "@type": "HowToStep",
            "position": 3,
            "name": "Solution Design",
            "text": "We design a customized integration architecture that meets BOT compliance standards and aligns with your business objectives."
        },
        {
            "@type": "HowToStep",
            "position": 4,
            "name": "Development & Testing",
            "text": "Our developers build and rigorously test the integration in a sandbox environment, ensuring 99.9% uptime and security compliance."
        },
        {
            "@type": "HowToStep",
            "position": 5,
            "name": "Deployment & Training",
            "text": "We deploy the solution to production, provide comprehensive training to your team, and offer ongoing support and maintenance."
        }
    ],
    "tool": [
        {
            "@type": "HowToTool",
            "name": "Core Banking System"
        },
        {
            "@type": "HowToTool",
            "name": "API Documentation"
        },
        {
            "@type": "HowToTool",
            "name": "BOT Integration Credentials"
        }
    ]
}
</script>
@endsection

@section('body-section')


{{-- welcoem page  --}}
  <livewire:frontend.components.welcome-service />



  <div data-elementor-type="wp-page" data-elementor-id="7183" class="elementor elementor-7183">

  {{-- service descriptions  --}}

  <livewire:frontend.components.service-service />



       {{-- project page  --}}
       <livewire:frontend.components.about-us />




           {{-- number summary section two  --}}

           <livewire:frontend.components.number-summary-with-circle />




           {{-- product prices  --}}
           <livewire:frontend.components.pricing />

  </div>


@endsection
