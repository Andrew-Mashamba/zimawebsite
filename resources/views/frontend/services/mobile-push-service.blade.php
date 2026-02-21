@extends('layouts.web')

@section('title', 'Mobile Push Payment Service Tanzania | M-Pesa, Airtel, Tigo via MNOs | ZIMA Solutions')
@section('meta_title', 'Mobile Push Payment – M-Pesa, Airtel Money, Tigo Pesa | ZIMA Solutions')
@section('meta_description', 'Accept payments via Tanzania MNOs with ZIMA Mobile Push Service. Initiate M-Pesa, Airtel Money, and Tigo Pesa payments from your app or system—customers approve on their phone. Ideal for collections, bills, and e-commerce.')
@section('meta_keywords', 'mobile push payment Tanzania, M-Pesa API, Airtel Money payment, Tigo Pesa integration, USSD push payment, mobile money collection, Dar es Salaam')
@section('og_title', 'Mobile Push Payment – M-Pesa, Airtel Money, Tigo Pesa | ZIMA Solutions')
@section('og_description', 'Facilitate payments via Vodacom, Airtel, and Tigo in Tanzania. Push payment requests to customers’ phones for instant, secure collection.')
@section('twitter_title', 'Mobile Push Payment Tanzania | ZIMA Solutions')
@section('twitter_description', 'Collect via M-Pesa, Airtel Money, Tigo Pesa. Push to customer phone. Tanzania.')

@section('structured_data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "@id": "{{ url('/services/mobile-push-service') }}#service",
    "name": "Mobile Push Payment Service",
    "serviceType": "Payment Processing",
    "description": "Payment facilitation via Tanzania mobile network operators (MNOs). Enables businesses to initiate push payment requests to customers' mobile money wallets (M-Pesa, Airtel Money, Tigo Pesa) for collections, bills, and e-commerce.",
    "provider": { "@id": "{{ url('/') }}#organization" },
    "areaServed": { "@type": "Country", "name": "Tanzania" },
    "url": "{{ url('/services/mobile-push-service') }}"
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Mobile Push Service – Payments via MNOs | ZIMA Solutions",
    "description": "Collect payments via M-Pesa, Airtel Money, Tigo Pesa in Tanzania. Customer approves on their phone. Loan repayments, bills, e-commerce.",
    "url": "{{ url('/services/mobile-push-service') }}",
    "breadcrumb": {
        "@type": "BreadcrumbList",
        "itemListElement": [
            {"@type": "ListItem", "position": 1, "name": "Home", "item": "{{ url('/') }}"},
            {"@type": "ListItem", "position": 2, "name": "Our Services", "item": "{{ url('/our-services') }}"},
            {"@type": "ListItem", "position": 3, "name": "Mobile Push Service", "item": "{{ url('/services/mobile-push-service') }}"}
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
                    <li>Mobile Push Service</li>
                </ol>
            </nav>
            <h1 style="font-family: 'Roboto Slab', serif; font-size: 48px; font-weight: 700; margin-bottom: 20px; color: #fff;">Mobile Push Service – Payments via MNOs in Tanzania</h1>
            <p style="font-size: 20px; line-height: 1.6; opacity: 0.9; max-width: 700px; margin: 0 auto 30px;">Facilitate payments through Tanzania’s mobile network operators. Send payment requests to your customers’ phones—they approve with their mobile money PIN for instant, secure collection via M-Pesa, Airtel Money, and Tigo Pesa.</p>
            <a href="{{ route('contact') }}" class="btn-primary" style="background: #FF621B; color: #fff; padding: 16px 40px; border-radius: 50px; text-decoration: none; font-weight: 600; display: inline-block;">Request Consultation</a>
        </div>
    </section>

    <section aria-label="How it works" style="padding: 60px 40px; background: #fff;">
        <div style="max-width: 1200px; margin: 0 auto;">
            <h2 style="font-family: 'Roboto Slab', serif; font-size: 28px; color: #1F3B8D; margin-bottom: 20px;">How Mobile Push Payments Work</h2>
            <p style="color: #374151; line-height: 1.8; margin-bottom: 16px;">With ZIMA’s Mobile Push Service, your system initiates a payment request to the customer’s mobile number. The customer receives a prompt (e.g. USSD or in-app) to enter their mobile money PIN and confirm. Once they approve, funds are collected in real time—no need for the customer to remember shortcodes or navigate menus. This “push” flow is ideal for bill payments, loan repayments, e-commerce checkout, donations, and any scenario where you know the customer’s mobile number and amount.</p>
            <p style="color: #374151; line-height: 1.8;">We work with Tanzania’s leading MNOs—Vodacom (M-Pesa), Airtel (Airtel Money), and Tigo (Tigo Pesa)—so you can reach the widest base of mobile money users in Tanzania through a single integration.</p>
        </div>
    </section>

    <section aria-label="Key features" style="padding: 80px 40px; background: #f8f9fa;">
        <div style="max-width: 1200px; margin: 0 auto;">
            <h2 style="text-align: center; font-family: 'Roboto Slab', serif; font-size: 36px; margin-bottom: 50px; color: #1F3B8D;">Key Features</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
                <article style="background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 2px 12px rgba(0,0,0,0.06);">
                    <h3 style="color: #1F3B8D; font-size: 20px; margin-bottom: 15px;">Multi-MNO Support</h3>
                    <p style="color: #666; line-height: 1.7;">Collect via Vodacom M-Pesa, Airtel Money, and Tigo Pesa from one integration so you reach more customers.</p>
                </article>
                <article style="background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 2px 12px rgba(0,0,0,0.06);">
                    <h3 style="color: #1F3B8D; font-size: 20px; margin-bottom: 15px;">Customer-Initiated Approval</h3>
                    <p style="color: #666; line-height: 1.7;">Customer approves the payment on their phone with their PIN—secure and compliant with MNO and regulatory practices.</p>
                </article>
                <article style="background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 2px 12px rgba(0,0,0,0.06);">
                    <h3 style="color: #1F3B8D; font-size: 20px; margin-bottom: 15px;">Real-Time Status</h3>
                    <p style="color: #666; line-height: 1.7;">Get instant success or failure responses so you can update orders, issue receipts, or trigger follow-up flows.</p>
                </article>
                <article style="background: #fff; padding: 30px; border-radius: 10px; box-shadow: 0 2px 12px rgba(0,0,0,0.06);">
                    <h3 style="color: #1F3B8D; font-size: 20px; margin-bottom: 15px;">Use Cases</h3>
                    <p style="color: #666; line-height: 1.7;">Loan repayments, bill collection, e-commerce, donations, subscription payments, and any pay-by-phone scenario.</p>
                </article>
            </div>
        </div>
    </section>

    @include('frontend.partials.explore-more')

    <section aria-label="Call to action" style="padding: 80px 40px; background: linear-gradient(135deg, #FF621B 0%, #e55516 100%); text-align: center; color: #fff;">
        <div style="max-width: 1200px; margin: 0 auto;">
            <h2 style="font-family: 'Roboto Slab', serif; font-size: 36px; margin-bottom: 20px;">Ready to Collect via Mobile Money?</h2>
            <p style="font-size: 18px; margin-bottom: 30px; opacity: 0.9;">Integrate our Mobile Push Service and start accepting M-Pesa, Airtel Money, and Tigo Pesa from your customers. Contact us to get started.</p>
            <a href="{{ route('contact') }}" style="background: #fff; color: #FF621B; padding: 16px 40px; border-radius: 50px; text-decoration: none; font-weight: 600; display: inline-block;">Contact Us Today</a>
        </div>
    </section>
</div>
@endsection
