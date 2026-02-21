@extends('layouts.web')

@section('title', 'Our Projects - Enterprise Solutions Portfolio | ZIMA Solutions Limited')
@section('title', 'Projects & Case Studies – ZIMA Solutions Portfolio | Tanzania')
@section('meta_title', 'Projects & Case Studies – ZIMA Solutions Portfolio | Tanzania')
@section('meta_description', 'ZIMA Solutions project portfolio: core banking, loan management, mobile banking, government payment integrations (RTGS, GePG, TIPS), and digital transformation across Tanzania.')
@section('meta_keywords', 'ZIMA Solutions projects, enterprise software portfolio, banking software Tanzania, loan management system projects, fintech case studies, digital transformation projects')
@section('og_title', 'Projects & Case Studies – ZIMA Solutions | Tanzania')
@section('og_description', 'Core banking, loan management, mobile banking, government payment integrations, and digital transformation projects.')
@section('twitter_title', 'Projects & Case Studies – ZIMA Solutions | Tanzania')
@section('twitter_description', 'Core banking, loan management, government payment integrations, and digital transformation projects in Tanzania.')
@section('og_title', 'Our Projects - ZIMA Solutions Portfolio')
@section('og_description', 'Discover transformative enterprise solutions delivered by ZIMA Solutions for banks, microfinance institutions, and government agencies.')

@section('structured_data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "CollectionPage",
    "name": "Projects - ZIMA Solutions Limited",
    "description": "Portfolio of enterprise solutions and digital transformation projects",
    "url": "{{ url('/team') }}",
    "breadcrumb": {
        "@type": "BreadcrumbList",
        "itemListElement": [
            {"@type": "ListItem", "position": 1, "name": "Home", "item": "{{ url('/') }}"},
            {"@type": "ListItem", "position": 2, "name": "Projects", "item": "{{ url('/team') }}"}
        ]
    }
}
</script>
@endsection

@section('body-section')

    {{-- WELCOME  TEAM PAGE  --}}
   <livewire:frontend.components.welcome-team />


   {{-- team Listing  --}}
   <livewire:frontend.components.other-team />


@endsection
