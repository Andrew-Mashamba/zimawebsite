<div>
    <style>
        /* About Section - ZIMA Brand */
        .about-gradient {
            background: linear-gradient(to bottom right, #FF621B 0%, #ffffff 15%, #ffffff 100%);
        }

        .about-section {
            padding: 80px 0;
        }

        .section-label {
            color: #FF621B;
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .section-title {
            color: #1F3B8D;
            font-family: 'Roboto Slab', serif;
            font-weight: 700;
            font-size: 42px;
            margin-bottom: 30px;
            line-height: 1.2;
        }

        .section-description {
            color: #2c3e50;
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 18px;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .highlight-text {
            color: #1F3B8D;
            font-weight: 600;
        }

        /* Value Props */
        .value-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 8px;
            transition: all 0.3s ease;
            border-left: 3px solid #FF621B;
        }

        .value-item:hover {
            transform: translateX(5px);
            box-shadow: 0 4px 15px rgba(31, 59, 141, 0.1);
        }

        .value-icon {
            width: 40px;
            height: 40px;
            min-width: 40px;
            background: linear-gradient(135deg, #1F3B8D, #3559af);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
        }

        .value-icon svg {
            width: 20px;
            height: 20px;
            fill: #ffffff;
        }

        .value-content h4 {
            color: #1F3B8D;
            font-family: 'Roboto Slab', serif;
            font-weight: 600;
            font-size: 16px;
            margin-bottom: 5px;
        }

        .value-content p {
            color: #6B7280;
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 14px;
            margin: 0;
            line-height: 1.5;
        }

        /* Stats Section */
        .stats-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
            margin-top: 50px;
            padding: 40px;
            background: linear-gradient(135deg, #1F3B8D, #2a4a9e);
            border-radius: 16px;
        }

        .stat-item {
            text-align: center;
            color: #ffffff;
        }

        .stat-number {
            font-family: 'Roboto Slab', serif;
            font-size: 48px;
            font-weight: 700;
            color: #FF621B;
            margin-bottom: 5px;
        }

        .stat-label {
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 1px;
            opacity: 0.9;
        }

        /* Leadership Section */
        .leadership-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
            margin-top: 40px;
        }

        .leader-card {
            background: #ffffff;
            border-radius: 12px;
            padding: 25px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border-top: 3px solid #1F3B8D;
        }

        .leader-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 30px rgba(31, 59, 141, 0.15);
        }

        .leader-avatar {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #1F3B8D, #FF621B);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            font-family: 'Roboto Slab', serif;
            font-size: 28px;
            font-weight: 700;
            color: #ffffff;
        }

        .leader-name {
            font-family: 'Roboto Slab', serif;
            font-weight: 600;
            font-size: 18px;
            color: #1F3B8D;
            margin-bottom: 5px;
        }

        .leader-title {
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 13px;
            color: #FF621B;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 10px;
        }

        .leader-desc {
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 13px;
            color: #6B7280;
            line-height: 1.5;
        }

        @media (max-width: 992px) {
            .stats-container {
                grid-template-columns: repeat(2, 1fr);
            }
            .leadership-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 576px) {
            .stats-container {
                grid-template-columns: 1fr;
            }
            .leadership-grid {
                grid-template-columns: 1fr;
            }
            .section-title {
                font-size: 32px;
            }
        }
    </style>

    <section class="about-gradient" aria-label="About ZIMA Solutions Limited">
        <div class="about-section" style="max-width: 1400px; margin: 0 auto; padding: 80px 40px;">

            <!-- Section Header -->
            <header style="margin-bottom: 50px;">
                <p class="section-label">Who We Are</p>
                <h2 class="section-title">Transforming Digital Futures</h2>
            </header>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px;">
                <!-- Left Column: Description -->
                <div>
                    <p class="section-description">
                        <span class="highlight-text">Zima Solutions Limited</span> is a forward-thinking technology and business innovation company specializing in digital transformation for financial institutions, government agencies, and enterprises.
                    </p>
                    <p class="section-description">
                        We design and implement <span class="highlight-text">secure, scalable, and intelligent systems</span> that drive operational efficiency, compliance, and superior customer experience.
                    </p>
                    <p class="section-description">
                        Our focus is to empower organizations through automation, data-driven decision-making, and digital inclusion, helping clients achieve sustainable growth in an evolving digital economy.
                    </p>

                    <a href="{{ route('contact') }}" style="display: inline-block; margin-top: 20px; padding: 14px 32px; background: #FF621B; color: #fff; text-decoration: none; border-radius: 50px; font-family: 'Source Sans Pro', sans-serif; font-weight: 600; transition: all 0.3s ease;">
                        Partner With Us
                    </a>
                </div>

                <!-- Right Column: Value Props -->
                <div>
                    <div class="value-item">
                        <div class="value-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                            </svg>
                        </div>
                        <div class="value-content">
                            <h4>Enterprise Integration</h4>
                            <p>Seamless connectivity with RTGS, TIPS, GePG, and mobile money platforms for real-time transactions.</p>
                        </div>
                    </div>

                    <div class="value-item">
                        <div class="value-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <div class="value-content">
                            <h4>Regulatory Compliance</h4>
                            <p>BOT-compliant reporting systems with automated real-time supervisory information.</p>
                        </div>
                    </div>

                    <div class="value-item">
                        <div class="value-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <div class="value-content">
                            <h4>Automation & AI</h4>
                            <p>AI-powered solutions for customer support, predictive analytics, and intelligent decision-making.</p>
                        </div>
                    </div>

                    <div class="value-item">
                        <div class="value-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </div>
                        <div class="value-content">
                            <h4>Digital Inclusion</h4>
                            <p>VICOBA integration and microfinance solutions connecting unbanked populations to formal banking.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Section -->
            <div class="stats-container">
                <div class="stat-item">
                    <div class="stat-number">20+</div>
                    <div class="stat-label">Enterprise Projects</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">50+</div>
                    <div class="stat-label">Client Organizations</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">4</div>
                    <div class="stat-label">BOT Integrations</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">99.9%</div>
                    <div class="stat-label">System Uptime</div>
                </div>
            </div>

            <!-- Leadership Section -->
            <aside style="margin-top: 80px;" aria-label="ZIMA Solutions Leadership Team">
                <p class="section-label">Leadership Team</p>
                <h3 class="section-title" style="font-size: 32px;">Driven by Excellence</h3>
                <p class="section-description" style="max-width: 700px;">
                    Led by a dynamic and experienced team that combines technical excellence, strategic insight, and operational efficiency to drive innovation and impact.
                </p>

                <div class="leadership-grid">
                    <div class="leader-card">
                        <div class="leader-avatar" aria-hidden="true">AM</div>
                        <h4 class="leader-name">Andrew Mashamba</h4>
                        <p class="leader-title">Founder & CEO</p>
                        <p class="leader-desc">Strategic leadership, company direction, innovation, and client partnerships.</p>
                    </div>

                    <div class="leader-card">
                        <div class="leader-avatar" aria-hidden="true">CS</div>
                        <h4 class="leader-name">Caroline Ceasar Shija</h4>
                        <p class="leader-title">Finance & Operations</p>
                        <p class="leader-desc">Financial planning, budgeting, compliance, and operational efficiency.</p>
                    </div>

                    <div class="leader-card">
                        <div class="leader-avatar" aria-hidden="true">SM</div>
                        <h4 class="leader-name">Simon Mpembee</h4>
                        <p class="leader-title">Technical Officer</p>
                        <p class="leader-desc">Software development, system architecture, and technical integrations.</p>
                    </div>

                    <div class="leader-card">
                        <div class="leader-avatar" aria-hidden="true">KL</div>
                        <h4 class="leader-name">Khafsa Hassan Lulela</h4>
                        <p class="leader-title">Business Development</p>
                        <p class="leader-desc">Client relations, market development, partnerships, and project acquisition.</p>
                    </div>
                </div>
            </aside>

        </div>
    </section>
</div>
