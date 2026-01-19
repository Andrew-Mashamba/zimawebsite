<div>
    <style>
        /* Impact Section - ZIMA Brand */
        .impact-section {
            background: #ffffff;
            padding: 80px 40px;
            max-width: 1400px;
            margin: 0 auto;
        }

        .impact-label {
            color: #FF621B;
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .impact-title {
            color: #1F3B8D;
            font-family: 'Roboto Slab', serif;
            font-weight: 700;
            font-size: 42px;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .impact-subtitle {
            color: #6B7280;
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 18px;
            line-height: 1.6;
            max-width: 800px;
            margin-bottom: 50px;
        }

        /* Case Studies Grid */
        .case-studies-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
        }

        .case-study-card {
            background: linear-gradient(135deg, #f8f9fa, #ffffff);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.4s ease;
            display: flex;
            flex-direction: column;
        }

        .case-study-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 40px rgba(31, 59, 141, 0.15);
        }

        .case-study-image {
            height: 200px;
            background: linear-gradient(135deg, #1F3B8D, #3559af);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .case-study-image::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,98,27,0.2) 0%, transparent 60%);
            animation: pulse 4s infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); opacity: 0.5; }
            50% { transform: scale(1.1); opacity: 0.8; }
        }

        .case-study-icon {
            width: 80px;
            height: 80px;
            background: rgba(255, 255, 255, 0.15);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1;
        }

        .case-study-icon i {
            font-size: 36px;
            color: #ffffff;
        }

        .case-study-content {
            padding: 30px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .case-study-tag {
            display: inline-block;
            padding: 5px 12px;
            background: rgba(255, 98, 27, 0.1);
            color: #FF621B;
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 12px;
            font-weight: 600;
            border-radius: 20px;
            margin-bottom: 15px;
            width: fit-content;
        }

        .case-study-card h3 {
            color: #1F3B8D;
            font-family: 'Roboto Slab', serif;
            font-weight: 700;
            font-size: 22px;
            margin-bottom: 15px;
        }

        .case-study-card p {
            color: #6B7280;
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 15px;
            line-height: 1.7;
            margin-bottom: 20px;
            flex: 1;
        }

        .impact-metrics {
            display: flex;
            gap: 25px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }

        .metric {
            text-align: center;
        }

        .metric-value {
            color: #FF621B;
            font-family: 'Roboto Slab', serif;
            font-size: 24px;
            font-weight: 700;
        }

        .metric-label {
            color: #6B7280;
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        /* Testimonial Section */
        .testimonial-section {
            margin-top: 60px;
            background: linear-gradient(135deg, #1F3B8D, #2a4a9e);
            border-radius: 16px;
            padding: 50px;
            color: #ffffff;
            position: relative;
            overflow: hidden;
        }

        .testimonial-section::before {
            content: '"';
            position: absolute;
            top: -20px;
            left: 30px;
            font-size: 200px;
            font-family: 'Roboto Slab', serif;
            color: rgba(255, 255, 255, 0.05);
            line-height: 1;
        }

        .testimonial-content {
            position: relative;
            z-index: 1;
            max-width: 800px;
            margin: 0 auto;
            text-align: center;
        }

        .testimonial-text {
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 20px;
            line-height: 1.8;
            font-style: italic;
            margin-bottom: 30px;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
        }

        .author-avatar {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #FF621B, #ff8c5a);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Roboto Slab', serif;
            font-size: 20px;
            font-weight: 700;
        }

        .author-info h4 {
            font-family: 'Roboto Slab', serif;
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .author-info p {
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 14px;
            opacity: 0.8;
            margin: 0;
        }

        @media (max-width: 992px) {
            .case-studies-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 576px) {
            .impact-title {
                font-size: 32px;
            }
            .impact-metrics {
                flex-direction: column;
                gap: 15px;
            }
        }
    </style>

    <section class="impact-section" aria-label="Case studies and client success stories">
        <!-- Section Header -->
        <p class="impact-label">Our Impact</p>
        <h2 class="impact-title">Transforming Organizations Across Tanzania</h2>
        <p class="impact-subtitle">
            From financial institutions to government agencies, our solutions drive operational efficiency, compliance, and sustainable growth in the digital economy.
        </p>

        <!-- Case Studies -->
        <div class="case-studies-grid">
            <!-- Case Study 1: Banking Integration -->
            <div class="case-study-card">
                <div class="case-study-image">
                    <div class="case-study-icon">
                        <i class="fas fa-university"></i>
                    </div>
                </div>
                <div class="case-study-content">
                    <span class="case-study-tag">Banking Integration</span>
                    <h3>BOT Payment Infrastructure</h3>
                    <p>
                        Implemented comprehensive RTGS and TIPS integration for multiple financial institutions, enabling real-time settlement and instant payments across Tanzania's banking ecosystem. Achieved BOT compliance with automated MT-MX conversion and supervisory reporting.
                    </p>
                    <div class="impact-metrics">
                        <div class="metric">
                            <div class="metric-value">99.9%</div>
                            <div class="metric-label">Uptime</div>
                        </div>
                        <div class="metric">
                            <div class="metric-value">< 2s</div>
                            <div class="metric-label">Settlement Time</div>
                        </div>
                        <div class="metric">
                            <div class="metric-value">100%</div>
                            <div class="metric-label">Compliance</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Case Study 2: Loan Management -->
            <div class="case-study-card">
                <div class="case-study-image" style="background: linear-gradient(135deg, #FF621B, #ff8c5a);">
                    <div class="case-study-icon">
                        <i class="fas fa-hand-holding-usd"></i>
                    </div>
                </div>
                <div class="case-study-content">
                    <span class="case-study-tag">Lending Solutions</span>
                    <h3>Comprehensive Loan Management</h3>
                    <p>
                        Deployed end-to-end loan management platforms for salary advances, vehicle financing, and government-backed loans. Automated credit scoring, disbursement workflows, and collection tracking reduce NPLs and improve portfolio quality.
                    </p>
                    <div class="impact-metrics">
                        <div class="metric">
                            <div class="metric-value">80%</div>
                            <div class="metric-label">Faster Processing</div>
                        </div>
                        <div class="metric">
                            <div class="metric-value">35%</div>
                            <div class="metric-label">NPL Reduction</div>
                        </div>
                        <div class="metric">
                            <div class="metric-value">24/7</div>
                            <div class="metric-label">Availability</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Case Study 3: Digital Inclusion -->
            <div class="case-study-card">
                <div class="case-study-image" style="background: linear-gradient(135deg, #10b981, #34d399);">
                    <div class="case-study-icon">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
                <div class="case-study-content">
                    <span class="case-study-tag">Digital Inclusion</span>
                    <h3>VICOBA & Agricultural Finance</h3>
                    <p>
                        Connected Village Community Banks with formal banking infrastructure and deployed agricultural financing suites for AMCOS. Farmer profiling, crop insurance, and mobile access bring financial services to rural Tanzania.
                    </p>
                    <div class="impact-metrics">
                        <div class="metric">
                            <div class="metric-value">50K+</div>
                            <div class="metric-label">Farmers Served</div>
                        </div>
                        <div class="metric">
                            <div class="metric-value">20+</div>
                            <div class="metric-label">AMCOS</div>
                        </div>
                        <div class="metric">
                            <div class="metric-value">40%</div>
                            <div class="metric-label">Cost Reduction</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Case Study 4: Government Solutions -->
            <div class="case-study-card">
                <div class="case-study-image" style="background: linear-gradient(135deg, #8b5cf6, #a78bfa);">
                    <div class="case-study-icon">
                        <i class="fas fa-landmark"></i>
                    </div>
                </div>
                <div class="case-study-content">
                    <span class="case-study-tag">Government</span>
                    <h3>GePG & eGovernment Integration</h3>
                    <p>
                        Implemented Government e-Payment Gateway integration across multiple channels - branches, ATMs, mobile, internet, and USSD. Enables seamless government fee payments while ensuring compliance with national mandates.
                    </p>
                    <div class="impact-metrics">
                        <div class="metric">
                            <div class="metric-value">5</div>
                            <div class="metric-label">Channels</div>
                        </div>
                        <div class="metric">
                            <div class="metric-value">1M+</div>
                            <div class="metric-label">Transactions</div>
                        </div>
                        <div class="metric">
                            <div class="metric-value">60%</div>
                            <div class="metric-label">Cost Savings</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonial -->
        <blockquote class="testimonial-section" aria-label="Client testimonial">
            <div class="testimonial-content">
                <p class="testimonial-text">
                    "Zima Solutions delivered a transformative loan management system that has revolutionized our operations. The automated workflows, real-time reporting, and seamless BOT integration have significantly improved our efficiency and compliance posture."
                </p>
                <footer class="testimonial-author">
                    <div class="author-avatar" aria-hidden="true">FI</div>
                    <div class="author-info">
                        <cite><strong>Financial Institution</strong></cite>
                        <p>Banking Sector Client</p>
                    </div>
                </footer>
            </div>
        </blockquote>
    </section>
</div>
