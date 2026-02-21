@extends('layouts.web')

@section('title', 'Contact Us - ZIMA Solutions Limited | Dar es Salaam, Tanzania')
@section('title', 'Contact ZIMA Solutions – Dar es Salaam | Enterprise & Fintech')
@section('meta_title', 'Contact ZIMA Solutions – Dar es Salaam | Enterprise & Fintech')
@section('meta_description', 'Contact ZIMA Solutions in Dar es Salaam: +255 69 241 0353, info@zima.co.tz. Makongo, near Ardhi University, Kinondoni. Request a quote for RTGS, TIPS, GePG, AI agents, or products.')
@section('meta_keywords', 'contact ZIMA Solutions, ZIMA Solutions phone, ZIMA Solutions email, fintech company Dar es Salaam, technology company Tanzania contact')
@section('og_title', 'Contact ZIMA Solutions – Dar es Salaam')
@section('og_description', 'Get in touch for RTGS, TIPS, GePG, AI agents, and enterprise solutions. Dar es Salaam, Tanzania.')
@section('twitter_title', 'Contact ZIMA Solutions – Dar es Salaam')
@section('twitter_description', 'Get in touch for RTGS, TIPS, GePG, AI agents, and enterprise solutions. Tanzania.')
@section('og_title', 'Contact Us - ZIMA Solutions Limited')
@section('og_description', 'Ready to transform your operations? Contact ZIMA Solutions in Dar es Salaam for enterprise integration and digital transformation solutions.')

@section('structured_data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "ContactPage",
    "name": "Contact ZIMA Solutions",
    "description": "Contact page for ZIMA Solutions Limited",
    "url": "{{ url('/contact') }}",
    "mainEntity": {
        "@type": "Organization",
        "name": "ZIMA Solutions Limited",
        "telephone": "+255692410353",
        "email": "info@zima.co.tz",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Makongo, Near Ardhi University",
            "addressLocality": "Kinondoni",
            "addressRegion": "Dar es Salaam",
            "addressCountry": "TZ"
        },
        "openingHours": "Mo-Fr 08:00-17:00"
    },
    "breadcrumb": {
        "@type": "BreadcrumbList",
        "itemListElement": [
            {"@type": "ListItem", "position": 1, "name": "Home", "item": "{{ url('/') }}"},
            {"@type": "ListItem", "position": 2, "name": "Contact", "item": "{{ url('/contact') }}"}
        ]
    }
}
</script>
@endsection

@section('body-section')
{{-- Font Awesome loaded in header component --}}

{{-- Hero --}}
<section class="contact-page-hero" style="background: linear-gradient(135deg, #1F3B8D 0%, #2a4a9e 100%); color: #fff; padding: 100px 24px 60px; text-align: center;">
    <div style="max-width: 1200px; margin: 0 auto;">
        <nav aria-label="Breadcrumb" style="margin-bottom: 20px; font-size: 14px; opacity: 0.9;">
            <a href="/" style="color: #fff; text-decoration: none;">Home</a>
            <span style="margin: 0 8px;">/</span>
            <span style="color: #fff;">Contact</span>
        </nav>
        <h1 style="font-family: 'Roboto Slab', serif; font-size: 42px; font-weight: 700; margin-bottom: 16px; color: #fff;">Contact Us</h1>
        <p style="font-size: 18px; line-height: 1.6; opacity: 0.95; max-width: 560px; margin: 0 auto; color: #fff;">Get in touch. We're here to help with your next project.</p>
    </div>
</section>

{{-- Contact information: same as home footer --}}
<section class="contact-page-info" style="background: linear-gradient(135deg, #1a1a2e 0%, #16213e 100%); color: #ffffff; padding: 56px 24px 64px;">
    <div style="max-width: 1200px; margin: 0 auto;">
        <h2 style="font-family: 'Roboto Slab', serif; font-size: 18px; font-weight: 700; color: #FF621B; margin-bottom: 20px; padding-bottom: 10px; border-bottom: 2px solid rgba(255, 98, 27, 0.3);">Contact information</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 24px;">
            <div style="display: flex; align-items: flex-start; color: rgba(255, 255, 255, 0.9); font-family: 'Source Sans Pro', sans-serif; font-size: 15px;">
                <i class="fas fa-map-marker-alt" style="color: #FF621B; margin-right: 14px; margin-top: 4px; width: 18px;"></i>
                <span>Makongo, Near Ardhi University<br>Kinondoni, Dar es Salaam, Tanzania</span>
            </div>
            <div style="display: flex; align-items: flex-start; color: rgba(255, 255, 255, 0.9); font-family: 'Source Sans Pro', sans-serif; font-size: 15px;">
                <i class="fas fa-phone-alt" style="color: #FF621B; margin-right: 14px; margin-top: 4px; width: 18px;"></i>
                <a href="tel:+255692410353" style="color: rgba(255, 255, 255, 0.9); text-decoration: none;">+255 69 241 0353</a>
            </div>
            <div style="display: flex; align-items: flex-start; color: rgba(255, 255, 255, 0.9); font-family: 'Source Sans Pro', sans-serif; font-size: 15px;">
                <i class="fas fa-envelope" style="color: #FF621B; margin-right: 14px; margin-top: 4px; width: 18px;"></i>
                <a href="mailto:info@zima.co.tz" style="color: rgba(255, 255, 255, 0.9); text-decoration: none;">info@zima.co.tz</a>
            </div>
            <div style="display: flex; align-items: flex-start; color: rgba(255, 255, 255, 0.9); font-family: 'Source Sans Pro', sans-serif; font-size: 15px;">
                <i class="fas fa-clock" style="color: #FF621B; margin-right: 14px; margin-top: 4px; width: 18px;"></i>
                <span>Mon – Fri: 8:00 AM – 5:00 PM</span>
            </div>
        </div>
        <p style="margin-top: 28px; font-size: 13px; color: rgba(255, 255, 255, 0.6);">ZIMA Solutions Limited · TIN: 181-314-605 · Registered in Tanzania</p>
    </div>
    <style>
        .contact-page-info a:hover { color: #FF621B !important; }
    </style>
</section>

{{-- Contact form --}}
<section style="padding: 48px 24px 80px; background: #f8f9fa;">
    <div style="max-width: 1200px; margin: 0 auto;">
        <h2 style="font-family: 'Roboto Slab', serif; font-size: 24px; font-weight: 700; color: #1F3B8D; margin-bottom: 24px; text-align: center;">Send us a message</h2>
        <livewire:frontend.components.contact-form />
    </div>
</section>
@endsection
