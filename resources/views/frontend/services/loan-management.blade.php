@extends('layouts.web')

@section('title', 'Loan Management System - Digital Lending Platform | ZIMA Solutions')
@section('meta_title', 'Loan Management System Tanzania - Digital Lending | ZIMA Solutions Limited')
@section('meta_description', 'Complete loan management system for banks, MFIs, and SACCOs in Tanzania. Loan origination, credit scoring, disbursement, collection management, and regulatory reporting.')
@section('meta_keywords', 'loan management system Tanzania, digital lending platform, loan origination, credit scoring, MFI software, SACCO software, microfinance system, loan tracking')
@section('og_title', 'Loan Management System Tanzania – Digital Lending | ZIMA Solutions')
@section('og_description', 'Digital lending platform with loan origination, credit scoring, and collection management for financial institutions.')
@section('twitter_title', 'Loan Management System Tanzania | ZIMA Solutions')
@section('twitter_description', 'Loan origination, credit scoring, disbursement, collection. Banks, MFIs, SACCOs. Tanzania.')

@section('structured_data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "@id": "{{ url('/services/loan-management') }}#service",
    "name": "Loan Management System",
    "serviceType": "Digital Lending Platform",
    "description": "Complete loan management system for banks, MFIs, and SACCOs featuring loan origination, credit scoring, automated disbursement, collection management, and regulatory reporting.",
    "provider": {
        "@id": "{{ url('/') }}#organization"
    },
    "areaServed": {
        "@type": "Country",
        "name": "Tanzania"
    },
    "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Loan Management Services",
        "itemListElement": [
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Loan Origination System",
                    "description": "Digital loan application, document management, and approval workflows"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Credit Scoring Engine",
                    "description": "Automated credit assessment using multiple data sources"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Collection Management",
                    "description": "Automated reminders, payment tracking, and recovery workflows"
                }
            }
        ]
    },
    "url": "{{ url('/services/loan-management') }}",
    "image": "{{ asset('/vf/zima.png') }}"
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Loan Management System | ZIMA Solutions",
    "description": "Digital lending platform for banks, MFIs, and SACCOS in Tanzania. Loan origination, credit scoring, disbursement, collection, BOT-compliant reporting.",
    "url": "{{ url('/services/loan-management') }}",
    "breadcrumb": {
        "@type": "BreadcrumbList",
        "itemListElement": [
            {"@type": "ListItem", "position": 1, "name": "Home", "item": "{{ url('/') }}"},
            {"@type": "ListItem", "position": 2, "name": "Our Services", "item": "{{ url('/our-services') }}"},
            {"@type": "ListItem", "position": 3, "name": "Loan Management", "item": "{{ url('/services/loan-management') }}"}
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
            "name": "What types of loans does the system support?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "ZIMA's Loan Management System supports all loan types including personal loans, business loans, salary advance, asset financing, agricultural loans, group loans, and overdrafts. Each loan type can have customized parameters, interest calculations, and repayment schedules."
            }
        },
        {
            "@type": "Question",
            "name": "Can the system integrate with credit bureaus?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, our system integrates with Tanzania's credit reference bureaus including Creditinfo and Dun & Bradstreet for credit checks. It also supports integration with mobile money providers for alternative credit scoring based on transaction history."
            }
        },
        {
            "@type": "Question",
            "name": "Is the system compliant with BOT regulations?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes, the Loan Management System is fully compliant with Bank of Tanzania regulations. It includes built-in regulatory reporting, interest rate caps enforcement, and audit trails required for compliance with Tanzanian banking laws."
            }
        }
    ]
}
</script>
@endsection

@section('body-section')
<div class="service-page-container" style="padding: 0;">
    <!-- Hero Section -->
    <section class="service-hero" aria-label="Service overview" style="background: linear-gradient(135deg, #1F3B8D 0%, #2a4a9e 100%); color: #fff; padding: 120px 40px 80px; text-align: center;">
        <div style="max-width: 1200px; margin: 0 auto;">
            <nav aria-label="Breadcrumb" style="margin-bottom: 20px;">
                <ol style="list-style: none; padding: 0; display: flex; justify-content: center; gap: 10px; font-size: 14px; opacity: 0.8;">
                    <li><a href="/" style="color: #fff; text-decoration: none;">Home</a></li>
                    <li>/</li>
                    <li><a href="{{ route('our-products') }}" style="color: #fff; text-decoration: none;">Products</a></li>
                    <li>/</li>
                    <li>Loan Management</li>
                </ol>
            </nav>
            <h1 style="font-family: 'Roboto Slab', serif; font-size: 48px; font-weight: 700; margin-bottom: 20px; color: #fff;">Loan Management System</h1>
            <p style="font-size: 20px; line-height: 1.6; opacity: 0.9; max-width: 700px; margin: 0 auto 30px;">Complete digital lending platform for banks, MFIs, and SACCOs with loan origination, credit scoring, and collection management.</p>
            <a href="{{ route('contact') }}" class="btn-primary" style="background: #FF621B; color: #fff; padding: 16px 40px; border-radius: 50px; text-decoration: none; font-weight: 600; display: inline-block;">Request Demo</a>
        </div>
    </section>

    <section aria-label="System features" style="padding: 80px 40px; background: #fff;">
        <div style="max-width: 1200px; margin: 0 auto;">
            <h2 style="text-align: center; font-family: 'Roboto Slab', serif; font-size: 36px; margin-bottom: 50px; color: #1F3B8D;">System Features</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
                <article style="background: #f8f9fa; padding: 30px; border-radius: 10px;">
                    <h3 style="color: #1F3B8D; font-size: 20px; margin-bottom: 15px;">Loan Origination</h3>
                    <p style="color: #666; line-height: 1.7;">Digital application forms, document upload, KYC verification, and configurable approval workflows with multi-level authorization.</p>
                </article>
                <article style="background: #f8f9fa; padding: 30px; border-radius: 10px;">
                    <h3 style="color: #1F3B8D; font-size: 20px; margin-bottom: 15px;">Credit Scoring</h3>
                    <p style="color: #666; line-height: 1.7;">Automated credit assessment using bureau data, income verification, and alternative data sources like mobile money history.</p>
                </article>
                <article style="background: #f8f9fa; padding: 30px; border-radius: 10px;">
                    <h3 style="color: #1F3B8D; font-size: 20px; margin-bottom: 15px;">Disbursement</h3>
                    <p style="color: #666; line-height: 1.7;">Automated disbursement to bank accounts or mobile wallets via TIPS/EFT integration with real-time confirmation.</p>
                </article>
                <article style="background: #f8f9fa; padding: 30px; border-radius: 10px;">
                    <h3 style="color: #1F3B8D; font-size: 20px; margin-bottom: 15px;">Repayment Management</h3>
                    <p style="color: #666; line-height: 1.7;">Flexible repayment schedules, auto-debit, mobile money collection, and real-time payment reconciliation.</p>
                </article>
                <article style="background: #f8f9fa; padding: 30px; border-radius: 10px;">
                    <h3 style="color: #1F3B8D; font-size: 20px; margin-bottom: 15px;">Collection Management</h3>
                    <p style="color: #666; line-height: 1.7;">Automated SMS/email reminders, collection officer assignment, recovery tracking, and write-off management.</p>
                </article>
                <article style="background: #f8f9fa; padding: 30px; border-radius: 10px;">
                    <h3 style="color: #1F3B8D; font-size: 20px; margin-bottom: 15px;">Regulatory Reporting</h3>
                    <p style="color: #666; line-height: 1.7;">BOT-compliant reports, credit bureau submissions, portfolio analysis, and audit trail for regulatory examinations.</p>
                </article>
            </div>
        </div>
    </section>

    <section aria-label="Loan types" style="padding: 80px 40px; background: #f8f9fa;">
        <div style="max-width: 1200px; margin: 0 auto;">
            <h2 style="text-align: center; font-family: 'Roboto Slab', serif; font-size: 36px; margin-bottom: 50px; color: #1F3B8D;">Supported Loan Products</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px;">
                <article style="background: #fff; padding: 20px; border-radius: 10px; text-align: center;">
                    <h3 style="color: #1F3B8D; font-size: 16px;">Personal Loans</h3>
                </article>
                <article style="background: #fff; padding: 20px; border-radius: 10px; text-align: center;">
                    <h3 style="color: #1F3B8D; font-size: 16px;">Salary Advance</h3>
                </article>
                <article style="background: #fff; padding: 20px; border-radius: 10px; text-align: center;">
                    <h3 style="color: #1F3B8D; font-size: 16px;">Business Loans</h3>
                </article>
                <article style="background: #fff; padding: 20px; border-radius: 10px; text-align: center;">
                    <h3 style="color: #1F3B8D; font-size: 16px;">Asset Financing</h3>
                </article>
                <article style="background: #fff; padding: 20px; border-radius: 10px; text-align: center;">
                    <h3 style="color: #1F3B8D; font-size: 16px;">Agricultural Loans</h3>
                </article>
                <article style="background: #fff; padding: 20px; border-radius: 10px; text-align: center;">
                    <h3 style="color: #1F3B8D; font-size: 16px;">Group Loans</h3>
                </article>
                <article style="background: #fff; padding: 20px; border-radius: 10px; text-align: center;">
                    <h3 style="color: #1F3B8D; font-size: 16px;">Overdrafts</h3>
                </article>
                <article style="background: #fff; padding: 20px; border-radius: 10px; text-align: center;">
                    <h3 style="color: #1F3B8D; font-size: 16px;">Mortgage Loans</h3>
                </article>
            </div>
        </div>
    </section>

    @include('frontend.partials.explore-more')

    <section aria-label="Call to action" style="padding: 80px 40px; background: linear-gradient(135deg, #FF621B 0%, #e55516 100%); text-align: center; color: #fff;">
        <div style="max-width: 1200px; margin: 0 auto;">
            <h2 style="font-family: 'Roboto Slab', serif; font-size: 36px; margin-bottom: 20px;">Ready to Digitize Your Lending Operations?</h2>
            <p style="font-size: 18px; margin-bottom: 30px; opacity: 0.9;">Get a customized loan management solution designed for your institution's needs.</p>
            <a href="{{ route('contact') }}" style="background: #fff; color: #FF621B; padding: 16px 40px; border-radius: 50px; text-decoration: none; font-weight: 600; display: inline-block;">Schedule a Demo</a>
        </div>
    </section>
</div>
@endsection
