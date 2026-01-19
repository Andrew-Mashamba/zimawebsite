<div>
    <style>
        /* Clients Section - ZIMA Brand */
        .clients-section {
            background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
            padding: 80px 40px;
        }

        .clients-container {
            max-width: 1400px;
            margin: 0 auto;
        }

        .clients-label {
            color: #FF621B;
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .clients-title {
            color: #1F3B8D;
            font-family: 'Roboto Slab', serif;
            font-weight: 700;
            font-size: 42px;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .clients-subtitle {
            color: #6B7280;
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 18px;
            line-height: 1.6;
            max-width: 800px;
            margin-bottom: 50px;
        }

        /* Client Categories Grid */
        .client-categories {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
            margin-bottom: 60px;
        }

        .category-card {
            background: #ffffff;
            border-radius: 12px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            border-top: 3px solid #1F3B8D;
        }

        .category-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 30px rgba(31, 59, 141, 0.12);
            border-top-color: #FF621B;
        }

        .category-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, rgba(31, 59, 141, 0.1), rgba(255, 98, 27, 0.1));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            transition: all 0.3s ease;
        }

        .category-card:hover .category-icon {
            background: linear-gradient(135deg, #1F3B8D, #FF621B);
        }

        .category-icon i {
            font-size: 30px;
            color: #1F3B8D;
            transition: all 0.3s ease;
        }

        .category-card:hover .category-icon i {
            color: #ffffff;
        }

        .category-card h4 {
            color: #1F3B8D;
            font-family: 'Roboto Slab', serif;
            font-weight: 600;
            font-size: 18px;
            margin-bottom: 10px;
        }

        .category-card .count {
            color: #FF621B;
            font-family: 'Roboto Slab', serif;
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .category-card p {
            color: #6B7280;
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 14px;
            margin: 0;
        }

        /* Industries Served */
        .industries-section {
            margin-top: 40px;
        }

        .industries-grid {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 20px;
        }

        .industry-item {
            background: #ffffff;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
            transition: all 0.3s ease;
        }

        .industry-item:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 20px rgba(31, 59, 141, 0.1);
        }

        .industry-item i {
            font-size: 24px;
            color: #1F3B8D;
            margin-bottom: 10px;
            display: block;
        }

        .industry-item span {
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 13px;
            color: #6B7280;
            font-weight: 500;
        }

        /* Trust Section */
        .trust-section {
            margin-top: 60px;
            background: linear-gradient(135deg, #1F3B8D, #2a4a9e);
            border-radius: 16px;
            padding: 50px;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
        }

        .trust-item {
            text-align: center;
            color: #ffffff;
        }

        .trust-value {
            font-family: 'Roboto Slab', serif;
            font-size: 48px;
            font-weight: 700;
            color: #FF621B;
            margin-bottom: 10px;
        }

        .trust-label {
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 1px;
            opacity: 0.9;
        }

        @media (max-width: 1200px) {
            .client-categories {
                grid-template-columns: repeat(2, 1fr);
            }
            .industries-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 992px) {
            .trust-section {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 576px) {
            .client-categories {
                grid-template-columns: 1fr;
            }
            .industries-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .trust-section {
                grid-template-columns: 1fr;
            }
            .clients-title {
                font-size: 32px;
            }
        }
    </style>

    <section class="clients-section" aria-label="Our clients and industries served">
        <div class="clients-container">
            <!-- Section Header -->
            <p class="clients-label">Our Clients</p>
            <h2 class="clients-title">Trusted by Leading Organizations</h2>
            <p class="clients-subtitle">
                We partner with financial institutions, government agencies, agricultural cooperatives, and enterprises across Tanzania and beyond. Our solutions power operations for thousands of users, processing millions of transactions securely and efficiently.
            </p>

            <!-- Client Categories -->
            <div class="client-categories">
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-university"></i>
                    </div>
                    <div class="count">15+</div>
                    <h4>Financial Institutions</h4>
                    <p>Banks, MFIs & SACCOS</p>
                </div>

                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-seedling"></i>
                    </div>
                    <div class="count">20+</div>
                    <h4>Agricultural Cooperatives</h4>
                    <p>AMCOS & Farmer Groups</p>
                </div>

                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-landmark"></i>
                    </div>
                    <div class="count">5+</div>
                    <h4>Government Agencies</h4>
                    <p>Regulatory & Public Sector</p>
                </div>

                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <div class="count">25+</div>
                    <h4>Enterprises</h4>
                    <p>Corporate & SMEs</p>
                </div>
            </div>

            <!-- Industries Served -->
            <div class="industries-section">
                <h3 style="color: #1F3B8D; font-family: 'Roboto Slab', serif; font-weight: 600; font-size: 24px; margin-bottom: 30px;">Industries We Serve</h3>
                <div class="industries-grid">
                    <div class="industry-item">
                        <i class="fas fa-piggy-bank"></i>
                        <span>Banking & Finance</span>
                    </div>
                    <div class="industry-item">
                        <i class="fas fa-tractor"></i>
                        <span>Agriculture</span>
                    </div>
                    <div class="industry-item">
                        <i class="fas fa-gavel"></i>
                        <span>Legal Services</span>
                    </div>
                    <div class="industry-item">
                        <i class="fas fa-home"></i>
                        <span>Real Estate</span>
                    </div>
                    <div class="industry-item">
                        <i class="fas fa-mobile-alt"></i>
                        <span>Fintech</span>
                    </div>
                    <div class="industry-item">
                        <i class="fas fa-graduation-cap"></i>
                        <span>Education</span>
                    </div>
                    <div class="industry-item">
                        <i class="fas fa-heartbeat"></i>
                        <span>Healthcare</span>
                    </div>
                    <div class="industry-item">
                        <i class="fas fa-shopping-cart"></i>
                        <span>Retail & Commerce</span>
                    </div>
                    <div class="industry-item">
                        <i class="fas fa-truck"></i>
                        <span>Logistics</span>
                    </div>
                    <div class="industry-item">
                        <i class="fas fa-industry"></i>
                        <span>Manufacturing</span>
                    </div>
                    <div class="industry-item">
                        <i class="fas fa-users"></i>
                        <span>NGOs</span>
                    </div>
                    <div class="industry-item">
                        <i class="fas fa-hotel"></i>
                        <span>Hospitality</span>
                    </div>
                </div>
            </div>

            <!-- Trust Stats -->
            <aside class="trust-section" aria-label="Company statistics">
                <div class="trust-item">
                    <div class="trust-value">65+</div>
                    <div class="trust-label">Total Clients</div>
                </div>
                <div class="trust-item">
                    <div class="trust-value">20+</div>
                    <div class="trust-label">Enterprise Projects</div>
                </div>
                <div class="trust-item">
                    <div class="trust-value">1M+</div>
                    <div class="trust-label">Transactions Processed</div>
                </div>
                <div class="trust-item">
                    <div class="trust-value">12</div>
                    <div class="trust-label">Industries Served</div>
                </div>
            </aside>
        </div>
    </section>
</div>
