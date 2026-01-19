@extends('layouts.web')

@section('title', 'API Gateway Solutions - Enterprise Integration Platform | ZIMA Solutions')
@section('meta_title', 'API Gateway Tanzania - Secure API Management | ZIMA Solutions Limited')
@section('meta_description', 'Enterprise API Gateway solutions for secure, scalable system integration. Rate limiting, authentication, analytics, and seamless third-party connectivity for financial institutions.')
@section('meta_keywords', 'API Gateway Tanzania, enterprise integration, API management, secure APIs, system integration, microservices, financial API, banking integration')
@section('og_title', 'API Gateway Solutions - ZIMA Solutions')
@section('og_description', 'Secure, scalable API Gateway solutions for enterprise system integration and third-party connectivity.')

@section('structured_data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "@id": "{{ url('/services/api-gateway') }}#service",
    "name": "Enterprise API Gateway Solutions",
    "serviceType": "API Management Platform",
    "description": "Enterprise API Gateway solutions providing secure, scalable system integration with rate limiting, authentication, analytics, and seamless third-party connectivity for financial institutions and enterprises.",
    "provider": {
        "@id": "{{ url('/') }}#organization"
    },
    "areaServed": {
        "@type": "Country",
        "name": "Tanzania"
    },
    "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "API Gateway Services",
        "itemListElement": [
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "API Security & Authentication",
                    "description": "OAuth 2.0, JWT, API keys, and certificate-based authentication"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "Rate Limiting & Throttling",
                    "description": "Protect your APIs with configurable rate limits and quotas"
                }
            },
            {
                "@type": "Offer",
                "itemOffered": {
                    "@type": "Service",
                    "name": "API Analytics & Monitoring",
                    "description": "Real-time analytics, logging, and performance monitoring"
                }
            }
        ]
    },
    "url": "{{ url('/services/api-gateway') }}",
    "image": "{{ asset('/vf/zima.png') }}"
}
</script>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "API Gateway Solutions",
    "description": "Enterprise API Gateway solutions for system integration in Tanzania",
    "url": "{{ url('/services/api-gateway') }}",
    "breadcrumb": {
        "@type": "BreadcrumbList",
        "itemListElement": [
            {"@type": "ListItem", "position": 1, "name": "Home", "item": "{{ url('/') }}"},
            {"@type": "ListItem", "position": 2, "name": "Services", "item": "{{ url('/service') }}"},
            {"@type": "ListItem", "position": 3, "name": "API Gateway", "item": "{{ url('/services/api-gateway') }}"}
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
            "name": "What is an API Gateway?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "An API Gateway is a server that acts as the single entry point for all API requests. It handles authentication, rate limiting, request routing, load balancing, and monitoring. For financial institutions, it provides secure connectivity between core banking systems, mobile apps, and third-party services."
            }
        },
        {
            "@type": "Question",
            "name": "Why do banks need an API Gateway?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Banks need API Gateways to securely expose their services to mobile banking apps, third-party fintechs, and partner systems while maintaining control over access, monitoring usage, and ensuring compliance with regulations. It simplifies integration and enhances security."
            }
        },
        {
            "@type": "Question",
            "name": "What security features does ZIMA's API Gateway provide?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "ZIMA's API Gateway includes OAuth 2.0 and JWT authentication, API key management, IP whitelisting, SSL/TLS encryption, request validation, SQL injection prevention, rate limiting to prevent DDoS attacks, and comprehensive audit logging for compliance."
            }
        }
    ]
}
</script>
@endsection

@section('body-section')
<div class="service-page-container" style="padding: 0;">
    <!-- Hero Section -->
    <section class="service-hero" style="background: linear-gradient(135deg, #1F3B8D 0%, #2a4a9e 100%); color: #fff; padding: 120px 40px 80px; text-align: center;">
        <div style="max-width: 900px; margin: 0 auto;">
            <nav aria-label="Breadcrumb" style="margin-bottom: 20px;">
                <ol style="list-style: none; padding: 0; display: flex; justify-content: center; gap: 10px; font-size: 14px; opacity: 0.8;">
                    <li><a href="/" style="color: #fff; text-decoration: none;">Home</a></li>
                    <li>/</li>
                    <li><a href="/service" style="color: #fff; text-decoration: none;">Services</a></li>
                    <li>/</li>
                    <li>API Gateway</li>
                </ol>
            </nav>
            <h1 style="font-family: 'Roboto Slab', serif; font-size: 48px; font-weight: 700; margin-bottom: 20px;">Enterprise API Gateway Solutions</h1>
            <p style="font-size: 20px; line-height: 1.6; opacity: 0.9; max-width: 700px; margin: 0 auto 30px;">Secure, scalable API management platform for seamless system integration and third-party connectivity.</p>
            <a href="/contact" class="btn-primary" style="background: #FF621B; color: #fff; padding: 16px 40px; border-radius: 50px; text-decoration: none; font-weight: 600; display: inline-block;">Request Consultation</a>
        </div>
    </section>

    <!-- Features Section -->
    <section style="padding: 80px 40px; background: #fff;">
        <div style="max-width: 1200px; margin: 0 auto;">
            <h2 style="text-align: center; font-family: 'Roboto Slab', serif; font-size: 36px; margin-bottom: 50px; color: #1F3B8D;">Gateway Features</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
                <article style="background: #f8f9fa; padding: 30px; border-radius: 10px;">
                    <h3 style="color: #1F3B8D; font-size: 20px; margin-bottom: 15px;">Authentication & Security</h3>
                    <p style="color: #666; line-height: 1.7;">OAuth 2.0, JWT tokens, API keys, and certificate-based authentication with IP whitelisting and request validation.</p>
                </article>
                <article style="background: #f8f9fa; padding: 30px; border-radius: 10px;">
                    <h3 style="color: #1F3B8D; font-size: 20px; margin-bottom: 15px;">Rate Limiting & Quotas</h3>
                    <p style="color: #666; line-height: 1.7;">Protect your APIs with configurable rate limits, throttling policies, and usage quotas per client or endpoint.</p>
                </article>
                <article style="background: #f8f9fa; padding: 30px; border-radius: 10px;">
                    <h3 style="color: #1F3B8D; font-size: 20px; margin-bottom: 15px;">Request Routing</h3>
                    <p style="color: #666; line-height: 1.7;">Intelligent routing with load balancing, failover support, and version management for seamless API evolution.</p>
                </article>
                <article style="background: #f8f9fa; padding: 30px; border-radius: 10px;">
                    <h3 style="color: #1F3B8D; font-size: 20px; margin-bottom: 15px;">Analytics & Monitoring</h3>
                    <p style="color: #666; line-height: 1.7;">Real-time dashboards, detailed logging, performance metrics, and alerting for proactive issue detection.</p>
                </article>
                <article style="background: #f8f9fa; padding: 30px; border-radius: 10px;">
                    <h3 style="color: #1F3B8D; font-size: 20px; margin-bottom: 15px;">Protocol Transformation</h3>
                    <p style="color: #666; line-height: 1.7;">Convert between REST, SOAP, and XML formats. Mediate between legacy systems and modern APIs seamlessly.</p>
                </article>
                <article style="background: #f8f9fa; padding: 30px; border-radius: 10px;">
                    <h3 style="color: #1F3B8D; font-size: 20px; margin-bottom: 15px;">Developer Portal</h3>
                    <p style="color: #666; line-height: 1.7;">Self-service portal for API documentation, sandbox testing, key management, and partner onboarding.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- Use Cases Section -->
    <section style="padding: 80px 40px; background: #f8f9fa;">
        <div style="max-width: 1200px; margin: 0 auto;">
            <h2 style="text-align: center; font-family: 'Roboto Slab', serif; font-size: 36px; margin-bottom: 50px; color: #1F3B8D;">Common Use Cases</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
                <article style="background: #fff; padding: 30px; border-radius: 10px; border-left: 4px solid #FF621B;">
                    <h3 style="color: #1F3B8D; font-size: 18px; margin-bottom: 10px;">Mobile Banking Integration</h3>
                    <p style="color: #666; line-height: 1.7;">Secure API layer between your mobile app and core banking system with transaction signing and device binding.</p>
                </article>
                <article style="background: #fff; padding: 30px; border-radius: 10px; border-left: 4px solid #FF621B;">
                    <h3 style="color: #1F3B8D; font-size: 18px; margin-bottom: 10px;">Open Banking APIs</h3>
                    <p style="color: #666; line-height: 1.7;">Expose account information and payment initiation APIs to authorized third parties securely.</p>
                </article>
                <article style="background: #fff; padding: 30px; border-radius: 10px; border-left: 4px solid #FF621B;">
                    <h3 style="color: #1F3B8D; font-size: 18px; margin-bottom: 10px;">Partner Connectivity</h3>
                    <p style="color: #666; line-height: 1.7;">Connect with insurance companies, utility providers, and other partners through standardized APIs.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section style="padding: 80px 40px; background: linear-gradient(135deg, #FF621B 0%, #e55516 100%); text-align: center; color: #fff;">
        <div style="max-width: 800px; margin: 0 auto;">
            <h2 style="font-family: 'Roboto Slab', serif; font-size: 36px; margin-bottom: 20px;">Ready to Streamline Your Integrations?</h2>
            <p style="font-size: 18px; margin-bottom: 30px; opacity: 0.9;">Get a customized API Gateway solution designed for your specific integration needs.</p>
            <a href="/contact" style="background: #fff; color: #FF621B; padding: 16px 40px; border-radius: 50px; text-decoration: none; font-weight: 600; display: inline-block;">Contact Us Today</a>
        </div>
    </section>
</div>
@endsection
