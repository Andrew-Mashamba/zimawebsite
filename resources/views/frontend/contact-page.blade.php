@extends('layouts.web')

@section('title', 'Contact Us - ZIMA Solutions Limited | Dar es Salaam, Tanzania')
@section('meta_title', 'Contact ZIMA Solutions - Get in Touch for Enterprise Solutions')
@section('meta_description', 'Contact ZIMA Solutions Limited in Dar es Salaam, Tanzania. Phone: +255 69 241 0353, Email: info@zima.co.tz. Office: Makongo, Near Ardhi University, Kinondoni.')
@section('meta_keywords', 'contact ZIMA Solutions, ZIMA Solutions phone, ZIMA Solutions email, fintech company Dar es Salaam, technology company Tanzania contact')
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
        "email": "info@zima.co.tz"
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


 {{-- welcome page --}}

  <livewire:frontend.components.welcome-contact />



  {{-- ofice contact listing  --}}


 <livewire:frontend.components.contact-list />

@endsection
