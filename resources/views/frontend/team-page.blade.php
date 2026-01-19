@extends('layouts.web')

@section('title', 'Our Projects - Enterprise Solutions Portfolio | ZIMA Solutions Limited')
@section('meta_title', 'Projects & Case Studies - ZIMA Solutions Enterprise Portfolio')
@section('meta_description', 'Explore ZIMA Solutions project portfolio: core banking systems, loan management platforms, mobile banking apps, government payment integrations, and more across Tanzania.')
@section('meta_keywords', 'ZIMA Solutions projects, enterprise software portfolio, banking software Tanzania, loan management system projects, fintech case studies, digital transformation projects')
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
