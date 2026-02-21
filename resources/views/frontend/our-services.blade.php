@extends('layouts.web')

@section('title', 'Our Services – RTGS, TIPS, GePG, NIDA, API, Loan, SMS | ZIMA Solutions')
@section('meta_title', 'Our Services – RTGS, TIPS, GePG, NIDA, API, Loan, SMS | ZIMA Solutions')
@section('meta_description', 'Nine ZIMA services: RTGS, TIPS, GePG, API Gateway, Loan Management, NIDA integration, Mobile Push, SMS, and Membership Referral System. Connect to BOT and national infrastructure in Tanzania.')
@section('meta_keywords', 'RTGS integration, TIPS integration, GePG gateway, NIDA integration Tanzania, API gateway, loan management, SMS service, SACCO referral, integration services')
@section('og_title', 'Our Services – RTGS, TIPS, GePG, NIDA, API | ZIMA Solutions')
@section('og_description', 'Nine services: RTGS, TIPS, GePG, API Gateway, Loan Management, NIDA, Mobile Push, SMS, Membership Referral. Tanzania.')

@section('structured_data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "Our Services",
    "description": "Nine ZIMA services: RTGS, TIPS, GePG, API Gateway, Loan Management, NIDA integration, Mobile Push, SMS, and Membership Referral System. Connect to BOT and national infrastructure in Tanzania.",
    "url": "{{ url('/our-services') }}",
    "breadcrumb": {
        "@type": "BreadcrumbList",
        "itemListElement": [
            {"@type": "ListItem", "position": 1, "name": "Home", "item": "{{ url('/') }}"},
            {"@type": "ListItem", "position": 2, "name": "Services", "item": "{{ url('/our-services') }}"}
        ]
    }
}
</script>
@endsection

@section('body-section')
{{-- Font Awesome loaded in header component --}}
<section class="services-grid-page" style="background: linear-gradient(135deg, #1F3B8D 0%, #2a4a9e 100%); color: #fff; padding: 100px 24px 60px; text-align: center;">
    <div style="max-width: 1200px; margin: 0 auto;">
        <nav aria-label="Breadcrumb" style="margin-bottom: 20px;">
            <ol style="list-style: none; padding: 0; display: flex; justify-content: center; gap: 10px; font-size: 14px; opacity: 0.9; color: #fff;">
                <li><a href="/" style="color: #fff; text-decoration: none;">Home</a></li>
                <li style="color: #fff;">/</li>
                <li style="color: #fff;">Services</li>
            </ol>
        </nav>
        <h1 style="font-family: 'Roboto Slab', serif; font-size: 42px; font-weight: 700; margin-bottom: 16px; color: #fff;">Our Services</h1>
        <p style="font-size: 18px; line-height: 1.6; opacity: 0.9; max-width: 600px; margin: 0 auto; color: #fff;">Integration, installation, and consultation. We connect your systems to national infrastructure and formal banking.</p>
    </div>
</section>

<section style="padding: 60px 24px 80px; background: #f8f9fa;">
    <div style="max-width: 1200px; margin: 0 auto;">
        <div class="solution-cards-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 28px;">
            <a href="{{ route('services.rtgs') }}" class="solution-card" style="background: #fff; border-radius: 12px; padding: 32px 28px; text-align: center; text-decoration: none; color: inherit; border: 1px solid #e5e7eb; transition: all 0.3s ease; display: block;">
                <div style="width: 64px; height: 64px; background: linear-gradient(135deg, #1F3B8D, #3559af); border-radius: 14px; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                    <i class="fas fa-university" style="font-size: 26px; color: #fff;"></i>
                </div>
                <h2 style="font-family: 'Roboto Slab', serif; font-size: 22px; font-weight: 700; color: #1F3B8D; margin: 0 0 12px;">RTGS Integration</h2>
                <p style="font-size: 15px; line-height: 1.65; color: #4b5563; margin: 0;">Seamless Real-Time Gross Settlement integration with Bank of Tanzania for high-value interbank transfers. MT message types, ISO 20022, full BOT compliance and certification.</p>
                <span style="display: inline-block; margin-top: 20px; font-weight: 600; color: #FF621B; font-size: 14px;">Learn more →</span>
            </a>

            <a href="{{ route('services.tips') }}" class="solution-card" style="background: #fff; border-radius: 12px; padding: 32px 28px; text-align: center; text-decoration: none; color: inherit; border: 1px solid #e5e7eb; transition: all 0.3s ease; display: block;">
                <div style="width: 64px; height: 64px; background: linear-gradient(135deg, #1F3B8D, #3559af); border-radius: 14px; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                    <i class="fas fa-bolt" style="font-size: 26px; color: #fff;"></i>
                </div>
                <h2 style="font-family: 'Roboto Slab', serif; font-size: 22px; font-weight: 700; color: #1F3B8D; margin: 0 0 12px;">TIPS Integration</h2>
                <p style="font-size: 15px; line-height: 1.65; color: #4b5563; margin: 0;">Connect to Tanzania Instant Payment System for Bank-to-Wallet, Wallet-to-Bank, TanQR payments, and cross-border remittances. 24/7 instant payment processing.</p>
                <span style="display: inline-block; margin-top: 20px; font-weight: 600; color: #FF621B; font-size: 14px;">Learn more →</span>
            </a>

            <a href="{{ route('services.gepg') }}" class="solution-card" style="background: #fff; border-radius: 12px; padding: 32px 28px; text-align: center; text-decoration: none; color: inherit; border: 1px solid #e5e7eb; transition: all 0.3s ease; display: block;">
                <div style="width: 64px; height: 64px; background: linear-gradient(135deg, #1F3B8D, #3559af); border-radius: 14px; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                    <i class="fas fa-landmark" style="font-size: 26px; color: #fff;"></i>
                </div>
                <h2 style="font-family: 'Roboto Slab', serif; font-size: 22px; font-weight: 700; color: #1F3B8D; margin: 0 0 12px;">GePG Gateway Integration</h2>
                <p style="font-size: 15px; line-height: 1.65; color: #4b5563; margin: 0;">Government e-Payment Gateway integration for revenue collection. Pay taxes, fees, and bills via branches, ATMs, mobile, internet banking, and USSD. Ministry of Finance GePG 2.0 compliant.</p>
                <span style="display: inline-block; margin-top: 20px; font-weight: 600; color: #FF621B; font-size: 14px;">Learn more →</span>
            </a>

            <a href="{{ route('services.nida') }}" class="solution-card" style="background: #fff; border-radius: 12px; padding: 32px 28px; text-align: center; text-decoration: none; color: inherit; border: 1px solid #e5e7eb; transition: all 0.3s ease; display: block;">
                <div style="width: 64px; height: 64px; background: linear-gradient(135deg, #1F3B8D, #3559af); border-radius: 14px; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                    <i class="fas fa-id-card" style="font-size: 26px; color: #fff;"></i>
                </div>
                <h2 style="font-family: 'Roboto Slab', serif; font-size: 22px; font-weight: 700; color: #1F3B8D; margin: 0 0 12px;">NIDA Integration</h2>
                <p style="font-size: 15px; line-height: 1.65; color: #4b5563; margin: 0;">Integrate with Tanzania's National Identification Authority for KYC and identity verification via National ID (NIN). We use Zima NIDA Gate for one simple integration point.</p>
                <span style="display: inline-block; margin-top: 20px; font-weight: 600; color: #FF621B; font-size: 14px;">Learn more →</span>
            </a>

            <a href="{{ route('services.sms') }}" class="solution-card" style="background: #fff; border-radius: 12px; padding: 32px 28px; text-align: center; text-decoration: none; color: inherit; border: 1px solid #e5e7eb; transition: all 0.3s ease; display: block;">
                <div style="width: 64px; height: 64px; background: linear-gradient(135deg, #1F3B8D, #3559af); border-radius: 14px; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                    <i class="fas fa-sms" style="font-size: 26px; color: #fff;"></i>
                </div>
                <h2 style="font-family: 'Roboto Slab', serif; font-size: 22px; font-weight: 700; color: #1F3B8D; margin: 0 0 12px;">SMS Service</h2>
                <p style="font-size: 15px; line-height: 1.65; color: #4b5563; margin: 0;">Bulk and transactional SMS at the lowest cost in Tanzania. HTTP & SMPP API, all networks, delivery reports and sender ID. Also offered as a hosted service.</p>
                <span style="display: inline-block; margin-top: 20px; font-weight: 600; color: #FF621B; font-size: 14px;">Learn more →</span>
            </a>
        </div>

        <div style="text-align: center; margin-top: 48px;">
            <a href="{{ route('contact') }}" style="display: inline-block; background: #FF621B; color: #fff; padding: 16px 36px; border-radius: 50px; text-decoration: none; font-weight: 600;">Request Consultation</a>
        </div>
    </div>
</section>

<style>
.solution-card:hover {
    box-shadow: 0 12px 32px rgba(31, 59, 141, 0.12);
    border-color: rgba(31, 59, 141, 0.2);
    transform: translateY(-4px);
}
@media (max-width: 640px) {
    .solution-cards-grid { grid-template-columns: 1fr; }
}
</style>
@endsection
