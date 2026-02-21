@extends('layouts.web')

@section('title', 'TIPS Integration Services - Tanzania Instant Payment System | ZIMA Solutions')
@section('meta_title', 'TIPS Integration Tanzania - Instant Payments | ZIMA Solutions Limited')
@section('meta_description', 'TIPS integration services for real-time retail payments in Tanzania. Bank-to-Wallet, Wallet-to-Bank, TanQR payments, and mobile money connectivity with 99.9% uptime.')
@section('meta_keywords', 'TIPS integration Tanzania, Tanzania Instant Payment System, instant payments, Bank-to-Wallet, Wallet-to-Bank, TanQR, mobile money integration, real-time payments Tanzania')
@section('og_title', 'TIPS Integration Tanzania – Instant Payments | ZIMA Solutions')
@section('og_description', 'Enable real-time retail payments with TIPS integration. Bank-to-Wallet, Wallet-to-Bank, and TanQR payment solutions.')
@section('twitter_title', 'TIPS Integration Tanzania | ZIMA Solutions')
@section('twitter_description', 'Real-time retail payments: Bank-to-Wallet, Wallet-to-Bank, TanQR. 99.9% uptime. Tanzania.')

@section('structured_data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "@id": "{{ url('/services/tips-integration') }}#service",
    "name": "TIPS Integration - Tanzania Instant Payment System",
    "serviceType": "Instant Payment Integration",
    "description": "Tanzania Instant Payment System integration enabling real-time retail payments including Bank-to-Wallet, Wallet-to-Bank, Bank-to-Bank transfers, and TanQR payments for financial institutions.",
    "provider": {
        "@id": "{{ url('/') }}#organization"
    },
    "areaServed": {
        "@type": "Country",
        "name": "Tanzania"
    },
    "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "TIPS Integration Services",
        "itemListElement": [
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Bank-to-Wallet Integration",
                    "description": "Send funds from bank accounts to mobile wallets instantly"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Wallet-to-Bank Integration",
                    "description": "Receive funds from mobile wallets to bank accounts"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "TanQR Payments",
                    "description": "QR code-based instant payments"
                }
            }
        ]
    },
    "url": "{{ url('/services/tips-integration') }}",
    "image": "{{ asset('/vf/zima.png') }}"
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "TIPS Integration | ZIMA Solutions",
    "description": "Tanzania Instant Payment System (TIPS) integration for real-time retail payments. Bank-to-wallet, wallet-to-bank, TanQR. 24/7/365.",
    "url": "{{ url('/services/tips-integration') }}",
    "breadcrumb": {
        "@type": "BreadcrumbList",
        "itemListElement": [
            {"@type": "ListItem", "position": 1, "name": "Home", "item": "{{ url('/') }}"},
            {"@type": "ListItem", "position": 2, "name": "Our Services", "item": "{{ url('/our-services') }}"},
            {"@type": "ListItem", "position": 3, "name": "TIPS Integration", "item": "{{ url('/services/tips-integration') }}"}
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
            "name": "What is TIPS in Tanzania?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "TIPS (Tanzania Instant Payment System) is a national instant payment infrastructure operated by Bank of Tanzania that enables real-time retail payments 24/7/365. It supports Bank-to-Wallet, Wallet-to-Bank, Bank-to-Bank transfers, and TanQR payments."
            }
        },
        {
            "@type": "Question",
            "name": "What payment channels does TIPS support?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "TIPS supports multiple payment channels including mobile banking apps, internet banking, USSD, ATMs, bank branches, and QR code payments (TanQR). ZIMA Solutions can integrate all these channels with your core banking system."
            }
        },
        {
            "@type": "Question",
            "name": "How fast are TIPS transactions?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "TIPS transactions are processed in real-time, typically completing within 2-5 seconds. The system operates 24/7/365, enabling instant payments at any time including weekends and holidays."
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
                    <li>TIPS Integration</li>
                </ol>
            </nav>
            <h1 style="font-family: 'Roboto Slab', serif; font-size: 48px; font-weight: 700; margin-bottom: 20px; color: #fff;">TIPS Integration - Instant Payments</h1>
            <p style="font-size: 20px; line-height: 1.6; opacity: 0.9; max-width: 700px; margin: 0 auto 30px;">Enable real-time retail payments with Tanzania Instant Payment System. Bank-to-Wallet, Wallet-to-Bank, and TanQR payments.</p>
            <a href="{{ route('contact') }}" class="btn-primary" style="background: #FF621B; color: #fff; padding: 16px 40px; border-radius: 50px; text-decoration: none; font-weight: 600; display: inline-block;">Request Consultation</a>
        </div>
    </section>

    <section aria-label="Payment types and features" style="padding: 80px 40px; background: #fff;">
        <div style="max-width: 1200px; margin: 0 auto;">
            <h2 style="text-align: center; font-family: 'Roboto Slab', serif; font-size: 36px; margin-bottom: 50px; color: #1F3B8D;">Payment Types Supported</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
                <article style="background: #f8f9fa; padding: 30px; border-radius: 10px; text-align: center;">
                    <h3 style="color: #1F3B8D; font-size: 22px; margin-bottom: 15px;">Bank-to-Wallet</h3>
                    <p style="color: #666; line-height: 1.7;">Send funds instantly from bank accounts to M-Pesa, Tigo Pesa, Airtel Money, and other mobile wallets.</p>
                </article>
                <article style="background: #f8f9fa; padding: 30px; border-radius: 10px; text-align: center;">
                    <h3 style="color: #1F3B8D; font-size: 22px; margin-bottom: 15px;">Wallet-to-Bank</h3>
                    <p style="color: #666; line-height: 1.7;">Receive funds from mobile wallets directly into bank accounts in real-time.</p>
                </article>
                <article style="background: #f8f9fa; padding: 30px; border-radius: 10px; text-align: center;">
                    <h3 style="color: #1F3B8D; font-size: 22px; margin-bottom: 15px;">Bank-to-Bank</h3>
                    <p style="color: #666; line-height: 1.7;">Instant interbank transfers for retail transactions below RTGS threshold.</p>
                </article>
                <article style="background: #f8f9fa; padding: 30px; border-radius: 10px; text-align: center;">
                    <h3 style="color: #1F3B8D; font-size: 22px; margin-bottom: 15px;">TanQR Payments</h3>
                    <p style="color: #666; line-height: 1.7;">QR code-based payments for merchant and P2P transactions using Tanzania's national QR standard.</p>
                </article>
            </div>
        </div>
    </section>

    @include('frontend.partials.explore-more')

    <section aria-label="Call to action" style="padding: 80px 40px; background: linear-gradient(135deg, #FF621B 0%, #e55516 100%); text-align: center; color: #fff;">
        <div style="max-width: 1200px; margin: 0 auto;">
            <h2 style="font-family: 'Roboto Slab', serif; font-size: 36px; margin-bottom: 20px;">Ready to Enable Instant Payments?</h2>
            <p style="font-size: 18px; margin-bottom: 30px; opacity: 0.9;">Connect your financial institution to TIPS and offer your customers real-time payment services.</p>
            <a href="{{ route('contact') }}" style="background: #fff; color: #FF621B; padding: 16px 40px; border-radius: 50px; text-decoration: none; font-weight: 600; display: inline-block;">Contact Us Today</a>
        </div>
    </section>
</div>
@endsection
