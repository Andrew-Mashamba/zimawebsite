<div>
    <style>
        .stats-section {
            padding: 80px 40px;
            background: linear-gradient(135deg, #1F3B8D 0%, #2a4a9e 100%);
            position: relative;
            overflow: hidden;
        }

        .stats-section::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(255, 98, 27, 0.1) 0%, transparent 70%);
            border-radius: 50%;
        }

        .stats-container {
            max-width: 1400px;
            width: 100%;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .stats-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .stats-label {
            color: #FF621B;
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .stats-title {
            color: #ffffff;
            font-family: 'Roboto Slab', serif;
            font-weight: 700;
            font-size: 38px;
            margin-bottom: 15px;
            line-height: 1.2;
        }

        .stats-subtitle {
            color: rgba(255, 255, 255, 0.8);
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 18px;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
            width: 100%;
        }

        .stat-card {
            text-align: center;
            padding: 40px 30px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 16px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
            flex: 1;
        }

        .stat-card:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-5px);
        }

        .stat-number {
            font-family: 'Roboto Slab', serif;
            font-size: 56px;
            font-weight: 800;
            color: #FF621B;
            line-height: 1;
            margin-bottom: 10px;
        }

        .stat-number span {
            font-size: 36px;
        }

        .stat-label {
            color: rgba(255, 255, 255, 0.6);
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 12px;
            margin-bottom: 5px;
        }

        .stat-title {
            color: #ffffff;
            font-family: 'Roboto Slab', serif;
            font-weight: 600;
            font-size: 20px;
            margin-bottom: 8px;
        }

        .stat-desc {
            color: rgba(255, 255, 255, 0.7);
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 14px;
            line-height: 1.5;
        }

        @media (max-width: 992px) {
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 576px) {
            .stats-grid {
                grid-template-columns: 1fr;
            }
            .stats-section {
                padding: 60px 20px;
            }
            .stats-title {
                font-size: 28px;
            }
            .stat-number {
                font-size: 48px;
            }
        }
    </style>

    <section class="stats-section">
        <div class="stats-container">
            <div class="stats-header">
                <p class="stats-label">Our Impact</p>
                <h2 class="stats-title">Driving Digital Excellence</h2>
                <p class="stats-subtitle">
                    Trusted by leading financial institutions and government agencies across Tanzania.
                </p>
            </div>

            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-number">20<span>+</span></div>
                    <p class="stat-label">Completed</p>
                    <h3 class="stat-title">Enterprise Projects</h3>
                    <p class="stat-desc">Mission-critical systems deployed and running</p>
                </div>

                <div class="stat-card">
                    <div class="stat-number">50<span>+</span></div>
                    <p class="stat-label">Satisfied</p>
                    <h3 class="stat-title">Clients Served</h3>
                    <p class="stat-desc">Banks, MFIs, and government agencies</p>
                </div>

                <div class="stat-card">
                    <div class="stat-number">99.9<span>%</span></div>
                    <p class="stat-label">System</p>
                    <h3 class="stat-title">Uptime Guarantee</h3>
                    <p class="stat-desc">Reliable infrastructure you can count on</p>
                </div>

                <div class="stat-card">
                    <div class="stat-number">24<span>/7</span></div>
                    <p class="stat-label">Available</p>
                    <h3 class="stat-title">Technical Support</h3>
                    <p class="stat-desc">Round-the-clock assistance for your operations</p>
                </div>
            </div>
        </div>
    </section>
</div>
