<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>ZIMA Solutions - Strategic Partnership Opportunity</title>
    <style>
        @page {
            margin: 0;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'DejaVu Sans', Arial, sans-serif;
            font-size: 10.5px;
            line-height: 1.5;
            color: #1A1A1A;
        }

        .page {
            padding: 35px 45px;
            page-break-after: always;
            min-height: 100%;
        }

        .page:last-child {
            page-break-after: avoid;
        }

        /* Brand Colors */
        .primary { color: #1F3B8D; }
        .secondary { color: #FF621B; }
        .bg-primary { background-color: #1F3B8D; }
        .bg-secondary { background-color: #FF621B; }

        /* Header */
        .header {
            display: table;
            width: 100%;
            margin-bottom: 20px;
            border-bottom: 3px solid #FF621B;
            padding-bottom: 12px;
        }

        .header-logo {
            display: table-cell;
            vertical-align: middle;
            width: 120px;
        }

        .header-logo img {
            width: 100px;
            height: auto;
        }

        .header-title {
            display: table-cell;
            vertical-align: middle;
            text-align: right;
        }

        .header-title h1 {
            font-size: 20px;
            color: #1F3B8D;
            margin-bottom: 2px;
            font-weight: bold;
        }

        .header-title p {
            font-size: 11px;
            color: #FF621B;
            font-weight: bold;
        }

        /* Cover Page */
        .cover-page {
            background: linear-gradient(135deg, #1F3B8D 0%, #2a4fa3 100%);
            color: white;
            text-align: center;
            padding: 0;
            position: relative;
        }

        .cover-content {
            padding: 60px 50px;
        }

        .cover-logo {
            margin-bottom: 30px;
        }

        .cover-logo img {
            width: 180px;
            height: auto;
        }

        .cover-title {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 12px;
            color: #FF621B;
        }

        .cover-subtitle {
            font-size: 18px;
            margin-bottom: 40px;
            color: #FEFFFF;
        }

        .cover-tagline {
            font-size: 24px;
            color: #FF621B;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .cover-tagline-sub {
            font-size: 24px;
            color: #FEFFFF;
            margin-bottom: 30px;
            font-weight: bold;
        }

        .cover-description {
            font-size: 13px;
            line-height: 1.8;
            max-width: 480px;
            margin: 0 auto 20px;
            color: #FEFFFF;
        }

        .cover-highlight {
            font-size: 14px;
            color: #FF621B;
            font-weight: bold;
            margin-bottom: 40px;
        }

        .cover-cta {
            background: #FF621B;
            color: white;
            padding: 14px 35px;
            font-size: 15px;
            font-weight: bold;
            display: inline-block;
            border-radius: 5px;
        }

        .cover-footer {
            position: absolute;
            bottom: 30px;
            left: 0;
            right: 0;
            font-size: 10px;
            color: rgba(255,255,255,0.8);
        }

        /* Section Titles */
        h2 {
            font-size: 16px;
            color: #1F3B8D;
            margin-bottom: 10px;
            padding-bottom: 4px;
            border-bottom: 2px solid #FF621B;
        }

        h3 {
            font-size: 13px;
            color: #1F3B8D;
            margin-bottom: 6px;
            margin-top: 12px;
        }

        h4 {
            font-size: 11px;
            color: #FF621B;
            margin-bottom: 4px;
            margin-top: 8px;
        }

        /* Tables */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 10px 0;
        }

        table th {
            background: #1F3B8D;
            color: white;
            padding: 8px;
            text-align: left;
            font-size: 10px;
        }

        table td {
            padding: 7px 8px;
            border-bottom: 1px solid #ddd;
            font-size: 10px;
        }

        table tr:nth-child(even) {
            background: #f8f9fa;
        }

        /* Highlight Box */
        .highlight-box {
            background: #FFF5F0;
            border-left: 4px solid #FF621B;
            padding: 12px;
            margin: 12px 0;
        }

        .highlight-box.blue {
            background: #F0F4FF;
            border-left-color: #1F3B8D;
        }

        /* Two Column Layout */
        .two-columns {
            display: table;
            width: 100%;
        }

        .column {
            display: table-cell;
            width: 48%;
            vertical-align: top;
            padding-right: 12px;
        }

        .column:last-child {
            padding-right: 0;
            padding-left: 12px;
        }

        /* Lists */
        ul {
            margin: 6px 0;
            padding-left: 18px;
        }

        ul li {
            margin-bottom: 3px;
        }

        /* Process Steps */
        .process-step {
            display: table;
            width: 100%;
            margin-bottom: 6px;
        }

        .step-number {
            display: table-cell;
            width: 26px;
            height: 26px;
            background: #FF621B;
            color: white;
            text-align: center;
            vertical-align: middle;
            font-weight: bold;
            font-size: 11px;
            border-radius: 50%;
        }

        .step-content {
            display: table-cell;
            padding-left: 10px;
            vertical-align: middle;
        }

        .step-title {
            font-weight: bold;
            color: #1F3B8D;
        }

        /* Ideas List */
        .ideas-list {
            display: table;
            width: 100%;
        }

        .ideas-column {
            display: table-cell;
            width: 50%;
            vertical-align: top;
            padding-right: 10px;
        }

        .ideas-column:last-child {
            padding-right: 0;
            padding-left: 10px;
        }

        .idea-item {
            padding: 4px 0;
            border-bottom: 1px dotted #ddd;
            font-size: 10px;
        }

        .idea-bullet {
            color: #FF621B;
            font-weight: bold;
            margin-right: 5px;
        }

        /* Contact Section */
        .contact-section {
            background: #1F3B8D;
            color: white;
            padding: 20px;
            margin-top: 15px;
            text-align: center;
        }

        .contact-section h2 {
            color: #FF621B;
            border-bottom: none;
            margin-bottom: 12px;
        }

        .contact-grid {
            display: table;
            width: 100%;
            margin-top: 12px;
        }

        .contact-item {
            display: table-cell;
            width: 25%;
            text-align: center;
            padding: 8px;
        }

        .contact-label {
            font-size: 9px;
            color: #FF621B;
            margin-bottom: 4px;
        }

        .contact-value {
            font-size: 10px;
            color: white;
        }

        /* Stats */
        .stats-row {
            display: table;
            width: 100%;
            margin: 12px 0;
        }

        .stat-item {
            display: table-cell;
            width: 25%;
            text-align: center;
            padding: 8px;
        }

        .stat-number {
            font-size: 22px;
            font-weight: bold;
            color: #FF621B;
        }

        .stat-label {
            font-size: 9px;
            color: #666;
        }

        /* Checkmark list */
        .check-list {
            list-style: none;
            padding-left: 0;
        }

        .check-list li {
            padding-left: 18px;
            position: relative;
            margin-bottom: 4px;
        }

        .check-list li:before {
            content: "\2713";
            color: #FF621B;
            font-weight: bold;
            position: absolute;
            left: 0;
        }

        /* Comparison Table */
        .comparison-table td:first-child {
            background: #fee;
        }

        .comparison-table td:last-child {
            background: #efe;
        }

        .small-text {
            font-size: 9px;
            color: #666;
        }

        .text-center {
            text-align: center;
        }

        .mb-8 { margin-bottom: 8px; }
        .mb-12 { margin-bottom: 12px; }
        .mb-15 { margin-bottom: 15px; }
        .mt-10 { margin-top: 10px; }
        .mt-12 { margin-top: 12px; }

        .emphasis {
            font-style: italic;
            color: #666;
        }

        .bold-orange {
            color: #FF621B;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <!-- Cover Page -->
    <div class="page cover-page">
        <div class="cover-content">
            <div class="cover-logo">
                <img src="{{ public_path('vf/zim2a.png') }}" alt="ZIMA Solutions">
            </div>

            <div class="cover-title">STRATEGIC PARTNERSHIP OPPORTUNITY</div>
            <div class="cover-subtitle">Build Together. Share Risk. Share Success.</div>

            <div class="cover-tagline">YOUR IDEA + OUR TECHNOLOGY</div>
            <div class="cover-tagline-sub">= A SCALABLE BUSINESS</div>

            <div class="cover-description">
                <strong>ZIMA Solutions Limited</strong> invites visionary entrepreneurs, companies, and institutions to form <strong>true strategic partnerships</strong>.
                If you have a strong business idea or a growing project that needs world-class technology, we offer a <strong>transparent 50/50 partnership</strong> to co-invest, co-build, and co-own high-impact digital solutions.
            </div>

            <div class="cover-highlight">
                This is not a vendor relationship.<br>
                This is shared risk, shared ownership, and shared upside.
            </div>

            <div class="cover-cta">Let's Build Something That Lasts</div>

            <div class="cover-footer">
                ZIMA Solutions Limited | TIN: 181-314-605 | Registered in Tanzania<br>
                Build the Future. Together.
            </div>
        </div>
    </div>

    <!-- Page 2: Partnership Model -->
    <div class="page">
        <div class="header">
            <div class="header-logo">
                <img src="{{ public_path('vf/zim2a.png') }}" alt="ZIMA">
            </div>
            <div class="header-title">
                <h1>THE PARTNERSHIP MODEL</h1>
                <p>Fair. Transparent. Aligned.</p>
            </div>
        </div>

        <table>
            <tr>
                <th>Area</th>
                <th>You</th>
                <th>ZIMA</th>
            </tr>
            <tr>
                <td><strong>Equity Ownership</strong></td>
                <td style="text-align: center; font-weight: bold; color: #FF621B; font-size: 14px;">50%</td>
                <td style="text-align: center; font-weight: bold; color: #FF621B; font-size: 14px;">50%</td>
            </tr>
            <tr>
                <td><strong>Investment & Costs</strong></td>
                <td style="text-align: center; font-weight: bold; color: #FF621B; font-size: 14px;">50%</td>
                <td style="text-align: center; font-weight: bold; color: #FF621B; font-size: 14px;">50%</td>
            </tr>
            <tr>
                <td><strong>Revenue & Profits</strong></td>
                <td style="text-align: center; font-weight: bold; color: #FF621B; font-size: 14px;">50%</td>
                <td style="text-align: center; font-weight: bold; color: #FF621B; font-size: 14px;">50%</td>
            </tr>
            <tr>
                <td><strong>Strategic Decisions</strong></td>
                <td style="text-align: center;">Joint</td>
                <td style="text-align: center;">Joint</td>
            </tr>
        </table>

        <div class="highlight-box">
            <strong style="color: #FF621B;">No hidden charges. No vendor lock-in. No one-sided contracts.</strong><br>
            Only long-term collaboration built on trust and results.
        </div>

        <h2>WHAT ZIMA BRINGS</h2>
        <h3>Proven Technology. Real Execution.</h3>
        <p>We have built and deployed <strong class="bold-orange">26+ production-ready solutions</strong> across fintech, enterprise, and public-sector systems.</p>

        <div class="two-columns mt-10">
            <div class="column">
                <h4>Financial Technology & Payments</h4>
                <ul>
                    <li>Bank of Tanzania integrations (RTGS, TIPS, GePG)</li>
                    <li>Payment gateways & merchant systems</li>
                    <li>Loan & credit management platforms</li>
                    <li>Mobile money integrations (M-Pesa, Airtel, Tigo)</li>
                    <li>TanQR merchant & payment solutions</li>
                </ul>

                <h4>Enterprise & Business Systems</h4>
                <ul>
                    <li>ERP & Business Management Systems</li>
                    <li>HR, Payroll & Compliance platforms</li>
                    <li>Inventory, procurement & asset management</li>
                    <li>Secure document management with e-signatures</li>
                </ul>
            </div>
            <div class="column">
                <h4>Sector-Focused Platforms</h4>
                <ul>
                    <li>Healthcare & clinic management systems</li>
                    <li>School & education management solutions</li>
                    <li>Agricultural financing & farmer platforms</li>
                    <li>SACCOS, MFI & VICOBA digitization</li>
                    <li>Cooperative & member-based systems</li>
                </ul>

                <h4>Advanced & Emerging Technology</h4>
                <ul>
                    <li>AI-powered virtual assistants (Zona AI)</li>
                    <li>API gateways & open banking platforms</li>
                    <li>Real-time messaging & notification engines</li>
                    <li>Secure, cloud-native architectures</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Page 3: Why ZIMA & Ideal Partners -->
    <div class="page">
        <div class="header">
            <div class="header-logo">
                <img src="{{ public_path('vf/zim2a.png') }}" alt="ZIMA">
            </div>
            <div class="header-title">
                <h1>WHY ZIMA?</h1>
                <p>Results You Can Trust</p>
            </div>
        </div>

        <div class="stats-row">
            <div class="stat-item">
                <div class="stat-number">50+</div>
                <div class="stat-label">Clients Served</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">20+</div>
                <div class="stat-label">Enterprise Systems Live</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">99.9%</div>
                <div class="stat-label">Uptime Infrastructure</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">24/7</div>
                <div class="stat-label">Support & Monitoring</div>
            </div>
        </div>

        <h3>Technical Excellence</h3>
        <ul class="check-list">
            <li>Full-stack & scalable architectures</li>
            <li>Bank-grade security & compliance</li>
            <li>Regulatory experience (BOT & financial systems)</li>
            <li>Agile development & continuous improvement</li>
            <li>Long-term maintenance & support</li>
        </ul>

        <h2 class="mt-12">IDEAL PARTNERS</h2>

        <div class="two-columns">
            <div class="column">
                <h4>Entrepreneurs & Visionaries who have:</h4>
                <ul>
                    <li>A validated market need in Tanzania or East Africa</li>
                    <li>Clear problem-solution alignment</li>
                    <li>Industry knowledge and execution capacity</li>
                    <li>Long-term growth mindset</li>
                </ul>
            </div>
            <div class="column">
                <h4>Companies & Institutions that:</h4>
                <ul>
                    <li>Have strong ideas but limited technical capacity</li>
                    <li>Need to digitize existing services or customers</li>
                    <li>Want to scale without outsourcing ownership</li>
                    <li>Believe in shared-value partnerships</li>
                </ul>
            </div>
        </div>

        <div class="highlight-box blue mt-12">
            <strong>Priority Sectors:</strong> Financial Services & Fintech | Healthcare & Healthtech | Education & Edtech | Agriculture & Agritech | Government & Civic Tech | Retail & E-commerce | Real Estate & Property Management | Logistics & Supply Chain
        </div>

        <h2 class="mt-12">HOW WE WORK TOGETHER</h2>
        <h3>Simple. Structured. Effective.</h3>

        <div class="two-columns mt-10">
            <div class="column">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <span class="step-title">CONNECT</span> - Share your idea or project
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <span class="step-title">EVALUATE</span> - Joint feasibility & market assessment
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <span class="step-title">AGREE</span> - Clear partnership & ownership terms
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="process-step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <span class="step-title">BUILD</span> - Co-invest and co-develop
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <span class="step-title">LAUNCH</span> - Go to market together
                    </div>
                </div>
                <div class="process-step">
                    <div class="step-number">6</div>
                    <div class="step-content">
                        <span class="step-title">SCALE</span> - Grow, optimize, and expand
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page 4: Ideas & Comparison -->
    <div class="page">
        <div class="header">
            <div class="header-logo">
                <img src="{{ public_path('vf/zim2a.png') }}" alt="ZIMA">
            </div>
            <div class="header-title">
                <h1>PARTNERSHIP IDEAS</h1>
                <p>We're Ready to Build</p>
            </div>
        </div>

        <div class="ideas-list">
            <div class="ideas-column">
                <div class="idea-item"><span class="idea-bullet">></span> Digital lending platforms</div>
                <div class="idea-item"><span class="idea-bullet">></span> Healthcare appointment & payment systems</div>
                <div class="idea-item"><span class="idea-bullet">></span> School fees & parent engagement platforms</div>
                <div class="idea-item"><span class="idea-bullet">></span> Farmer-to-marketplace solutions</div>
                <div class="idea-item"><span class="idea-bullet">></span> Event ticketing & management systems</div>
            </div>
            <div class="ideas-column">
                <div class="idea-item"><span class="idea-bullet">></span> Property rental & management platforms</div>
                <div class="idea-item"><span class="idea-bullet">></span> Fleet & transport management systems</div>
                <div class="idea-item"><span class="idea-bullet">></span> Restaurant & hospitality POS</div>
                <div class="idea-item"><span class="idea-bullet">></span> Cooperative & savings group platforms</div>
                <div class="idea-item"><span class="idea-bullet">></span> Freelancer & talent marketplaces</div>
            </div>
        </div>

        <div class="highlight-box text-center mt-12">
            <strong style="color: #FF621B; font-size: 12px;">Have another idea? We are open and ready.</strong>
        </div>

        <h2 class="mt-12">WHAT MAKES THIS DIFFERENT</h2>
        <h3>Vendor Model vs Strategic Partnership</h3>

        <table class="comparison-table">
            <tr>
                <th style="background: #dc3545;">Traditional Vendor</th>
                <th style="background: #28a745;">ZIMA Partnership</th>
            </tr>
            <tr>
                <td>You pay everything</td>
                <td>We co-invest 50/50</td>
            </tr>
            <tr>
                <td>Vendor delivers & exits</td>
                <td>We stay and grow</td>
            </tr>
            <tr>
                <td>One-sided risk</td>
                <td>Shared risk & reward</td>
            </tr>
            <tr>
                <td>Fixed scope</td>
                <td>Flexible, evolving</td>
            </tr>
            <tr>
                <td>You own alone</td>
                <td>We build together</td>
            </tr>
        </table>

        <h2 class="mt-12">OUR SUCCESS TARGETS</h2>

        <table>
            <tr>
                <th>Metric</th>
                <th>Target</th>
            </tr>
            <tr>
                <td><strong>Revenue</strong></td>
                <td>Sustainable recurring revenue streams</td>
            </tr>
            <tr>
                <td><strong>Users</strong></td>
                <td>Thousands of active users across Tanzania</td>
            </tr>
            <tr>
                <td><strong>Efficiency</strong></td>
                <td>40-60% operational efficiency gains</td>
            </tr>
            <tr>
                <td><strong>Satisfaction</strong></td>
                <td>Above industry NPS scores</td>
            </tr>
            <tr>
                <td><strong>Scalability</strong></td>
                <td>Systems built to scale <strong>10x and beyond</strong></td>
            </tr>
        </table>
    </div>

    <!-- Page 5: Contact -->
    <div class="page">
        <div class="header">
            <div class="header-logo">
                <img src="{{ public_path('vf/zim2a.png') }}" alt="ZIMA">
            </div>
            <div class="header-title">
                <h1>LET'S BUILD SOMETHING THAT LASTS</h1>
                <p>Contact ZIMA Solutions Limited</p>
            </div>
        </div>

        <div class="contact-section">
            <h2>GET IN TOUCH</h2>

            <div class="contact-grid">
                <div class="contact-item">
                    <div class="contact-label">EMAIL</div>
                    <div class="contact-value">partnerships@zima.co.tz</div>
                </div>
                <div class="contact-item">
                    <div class="contact-label">PHONE</div>
                    <div class="contact-value">+255 69 241 0353</div>
                </div>
                <div class="contact-item">
                    <div class="contact-label">WEBSITE</div>
                    <div class="contact-value">https://zima.co.tz</div>
                </div>
                <div class="contact-item">
                    <div class="contact-label">LOCATION</div>
                    <div class="contact-value">Makongo, Near Ardhi University<br>Kinondoni, Dar es Salaam</div>
                </div>
            </div>
        </div>

        <h3 class="mt-12">Next Steps:</h3>
        <div class="process-step mb-8">
            <div class="step-number">1</div>
            <div class="step-content"><strong>Send us</strong> your idea or project brief</div>
        </div>
        <div class="process-step mb-8">
            <div class="step-number">2</div>
            <div class="step-content"><strong>Schedule</strong> a strategy discussion</div>
        </div>
        <div class="process-step mb-8">
            <div class="step-number">3</div>
            <div class="step-content"><strong>Meet the team</strong> and define the partnership</div>
        </div>

        <div class="highlight-box blue mt-12">
            <strong>CONFIDENTIALITY GUARANTEED</strong><br>
            All discussions are treated with strict confidentiality. NDAs can be signed before detailed disclosures.
        </div>

        <div class="text-center mt-15" style="padding: 20px; background: #f8f9fa; border-radius: 5px;">
            <p style="font-style: italic; color: #1F3B8D; font-size: 13px; margin-bottom: 8px;">
                Innovation succeeds when vision meets execution.
            </p>
            <p style="font-weight: bold; color: #FF621B; font-size: 14px;">
                Let's build meaningful businesses together.
            </p>
            <p style="font-weight: bold; color: #1F3B8D; margin-top: 10px;">— ZIMA Solutions Limited</p>
        </div>

        <div class="text-center mt-12 small-text">
            <strong>TIN:</strong> 181-314-605 | <strong>Registered in Tanzania</strong><br>
            <span style="color: #FF621B; font-weight: bold; font-size: 11px;">Build the Future. Together.</span>
        </div>
    </div>

</body>
</html>
