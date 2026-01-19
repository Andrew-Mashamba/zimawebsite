<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>ZIMA Solutions - Strategic Partnership Opportunity</title>
    <style>
        @page {
            margin: 25px 35px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'DejaVu Sans', Arial, sans-serif;
            font-size: 9.5px;
            line-height: 1.4;
            color: #1A1A1A;
        }

        /* Brand Colors - Primary is Dark Blue */
        .primary { color: #1F3B8D; }
        .secondary { color: #FF621B; }
        .bg-primary { background-color: #1F3B8D; }
        .bg-secondary { background-color: #FF621B; }

        /* Header */
        .header {
            display: table;
            width: 100%;
            margin-bottom: 12px;
            border-bottom: 2px solid #1F3B8D;
            padding-bottom: 8px;
        }

        .header-logo {
            display: table-cell;
            vertical-align: middle;
            width: 80px;
        }

        .header-logo img {
            width: 70px;
            height: auto;
        }

        .header-title {
            display: table-cell;
            vertical-align: middle;
            text-align: right;
        }

        .header-title h1 {
            font-size: 16px;
            color: #1F3B8D;
            margin-bottom: 2px;
            font-weight: bold;
        }

        .header-title p {
            font-size: 9px;
            color: #FF621B;
            font-weight: bold;
        }

        /* Cover Page */
        .cover-page {
            background: #1F3B8D;
            color: white;
            text-align: center;
            padding: 40px 35px;
            min-height: 700px;
            position: relative;
        }

        .cover-logo {
            margin-bottom: 25px;
        }

        .cover-logo img {
            width: 140px;
            height: auto;
        }

        .cover-title {
            font-size: 26px;
            font-weight: bold;
            margin-bottom: 8px;
            color: #FF621B;
        }

        .cover-subtitle {
            font-size: 14px;
            margin-bottom: 30px;
            color: #FEFFFF;
        }

        .cover-tagline {
            font-size: 18px;
            color: #FF621B;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .cover-tagline-sub {
            font-size: 18px;
            color: #FEFFFF;
            margin-bottom: 25px;
            font-weight: bold;
        }

        .cover-description {
            font-size: 11px;
            line-height: 1.7;
            max-width: 420px;
            margin: 0 auto 15px;
            color: #FEFFFF;
        }

        .cover-highlight {
            font-size: 11px;
            color: #FF621B;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .cover-cta {
            background: #FF621B;
            color: white;
            padding: 10px 25px;
            font-size: 12px;
            font-weight: bold;
            display: inline-block;
            border-radius: 4px;
        }

        .cover-footer {
            position: absolute;
            bottom: 25px;
            left: 0;
            right: 0;
            font-size: 8px;
            color: rgba(255,255,255,0.8);
        }

        /* Section Titles */
        h2 {
            font-size: 13px;
            color: #1F3B8D;
            margin-bottom: 6px;
            padding-bottom: 3px;
            border-bottom: 2px solid #FF621B;
        }

        h3 {
            font-size: 10px;
            color: #1F3B8D;
            margin-bottom: 4px;
            margin-top: 8px;
        }

        h4 {
            font-size: 9px;
            color: #FF621B;
            margin-bottom: 3px;
            margin-top: 6px;
        }

        /* Tables */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 6px 0;
        }

        table th {
            background: #1F3B8D;
            color: white;
            padding: 5px;
            text-align: left;
            font-size: 8px;
        }

        table td {
            padding: 4px 5px;
            border-bottom: 1px solid #ddd;
            font-size: 8px;
        }

        table tr:nth-child(even) {
            background: #f8f9fa;
        }

        /* Highlight Box */
        .highlight-box {
            background: #FFF5F0;
            border-left: 3px solid #FF621B;
            padding: 8px;
            margin: 8px 0;
            font-size: 8px;
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
            padding-right: 8px;
        }

        .column:last-child {
            padding-right: 0;
            padding-left: 8px;
        }

        /* Lists */
        ul {
            margin: 4px 0;
            padding-left: 14px;
        }

        ul li {
            margin-bottom: 2px;
            font-size: 8px;
        }

        /* Process Steps */
        .process-step {
            display: table;
            width: 100%;
            margin-bottom: 4px;
        }

        .step-number {
            display: table-cell;
            width: 18px;
            height: 18px;
            background: #FF621B;
            color: white;
            text-align: center;
            vertical-align: middle;
            font-weight: bold;
            font-size: 8px;
            border-radius: 50%;
        }

        .step-content {
            display: table-cell;
            padding-left: 6px;
            vertical-align: middle;
            font-size: 8px;
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
            padding-right: 8px;
        }

        .ideas-column:last-child {
            padding-right: 0;
            padding-left: 8px;
        }

        .idea-item {
            padding: 2px 0;
            border-bottom: 1px dotted #ddd;
            font-size: 8px;
        }

        .idea-bullet {
            color: #FF621B;
            font-weight: bold;
            margin-right: 3px;
        }

        /* Contact Section */
        .contact-section {
            background: #1F3B8D;
            color: white;
            padding: 12px;
            margin-top: 10px;
            text-align: center;
        }

        .contact-section h2 {
            color: #FF621B;
            border-bottom: none;
            margin-bottom: 8px;
            font-size: 12px;
        }

        .contact-grid {
            display: table;
            width: 100%;
            margin-top: 8px;
        }

        .contact-item {
            display: table-cell;
            width: 25%;
            text-align: center;
            padding: 5px;
        }

        .contact-label {
            font-size: 7px;
            color: #FF621B;
            margin-bottom: 2px;
        }

        .contact-value {
            font-size: 8px;
            color: white;
        }

        /* Stats */
        .stats-row {
            display: table;
            width: 100%;
            margin: 8px 0;
        }

        .stat-item {
            display: table-cell;
            width: 25%;
            text-align: center;
            padding: 5px;
        }

        .stat-number {
            font-size: 16px;
            font-weight: bold;
            color: #FF621B;
        }

        .stat-label {
            font-size: 7px;
            color: #666;
        }

        /* Checkmark list */
        .check-list {
            list-style: none;
            padding-left: 0;
        }

        .check-list li {
            padding-left: 12px;
            position: relative;
            margin-bottom: 2px;
            font-size: 8px;
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
            font-size: 7px;
            color: #666;
        }

        .text-center {
            text-align: center;
        }

        .mb-4 { margin-bottom: 4px; }
        .mb-6 { margin-bottom: 6px; }
        .mb-8 { margin-bottom: 8px; }
        .mt-6 { margin-top: 6px; }
        .mt-8 { margin-top: 8px; }

        .bold-orange {
            color: #FF621B;
            font-weight: bold;
        }

        .page-break {
            page-break-after: always;
        }

        .section-spacing {
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <!-- Cover Page -->
    <div class="cover-page">
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

    <div class="page-break"></div>

    <!-- Page 2: Partnership Model & What ZIMA Brings -->
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
            <td style="text-align: center; font-weight: bold; color: #FF621B; font-size: 11px;">50%</td>
            <td style="text-align: center; font-weight: bold; color: #FF621B; font-size: 11px;">50%</td>
        </tr>
        <tr>
            <td><strong>Investment & Costs</strong></td>
            <td style="text-align: center; font-weight: bold; color: #FF621B; font-size: 11px;">50%</td>
            <td style="text-align: center; font-weight: bold; color: #FF621B; font-size: 11px;">50%</td>
        </tr>
        <tr>
            <td><strong>Revenue & Profits</strong></td>
            <td style="text-align: center; font-weight: bold; color: #FF621B; font-size: 11px;">50%</td>
            <td style="text-align: center; font-weight: bold; color: #FF621B; font-size: 11px;">50%</td>
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

    <h2 class="mt-6">WHAT ZIMA BRINGS</h2>
    <h3>Proven Technology. Real Execution.</h3>
    <p style="font-size: 8px;">We have built and deployed <strong class="bold-orange">26+ production-ready solutions</strong> across fintech, enterprise, and public-sector systems.</p>

    <div class="two-columns mt-6">
        <div class="column">
            <h4>Financial Technology & Payments</h4>
            <ul>
                <li>Bank of Tanzania integrations (RTGS, TIPS, GePG)</li>
                <li>Payment gateways & merchant systems</li>
                <li>Loan & credit management platforms</li>
                <li>Mobile money integrations (M-Pesa, Airtel Money, Tigo Pesa)</li>
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

    <div class="page-break"></div>

    <!-- Page 3: Why ZIMA & Leadership Team -->
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

    <h2>LEADERSHIP & EXECUTION TEAM</h2>
    <table>
        <tr>
            <th>Role</th>
            <th>Name</th>
            <th>Focus</th>
        </tr>
        <tr>
            <td><strong>CEO</strong></td>
            <td>Andrew Mashamba</td>
            <td>Strategy, innovation, partnerships</td>
        </tr>
        <tr>
            <td><strong>Finance & Operations</strong></td>
            <td>Caroline Ceasar Shija</td>
            <td>Financial governance & operations</td>
        </tr>
        <tr>
            <td><strong>Technical Officer</strong></td>
            <td>Simon Mpembee</td>
            <td>Architecture & system integrations</td>
        </tr>
        <tr>
            <td><strong>Business Development</strong></td>
            <td>Khafsa Hassan Lulela</td>
            <td>Market growth & partnerships</td>
        </tr>
    </table>

    <h3 class="mt-6">Technical Excellence</h3>
    <ul class="check-list">
        <li>Full-stack & scalable architectures</li>
        <li>Bank-grade security & compliance</li>
        <li>Regulatory experience (BOT & financial systems)</li>
        <li>Agile development & continuous improvement</li>
        <li>Long-term maintenance & support</li>
    </ul>

    <h2 class="mt-8">IDEAL PARTNERS</h2>
    <h3>We Partner With:</h3>

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

    <h4 class="mt-6">Priority Sectors:</h4>
    <div class="highlight-box blue">
        Financial Services & Fintech | Healthcare & Healthtech | Education & Edtech | Agriculture & Agritech | Government & Civic Tech | Retail & E-commerce | Real Estate & Property Management | Logistics & Supply Chain
    </div>

    <div class="page-break"></div>

    <!-- Page 4: How We Work & Partnership Ideas -->
    <div class="header">
        <div class="header-logo">
            <img src="{{ public_path('vf/zim2a.png') }}" alt="ZIMA">
        </div>
        <div class="header-title">
            <h1>HOW WE WORK TOGETHER</h1>
            <p>Simple. Structured. Effective.</p>
        </div>
    </div>

    <div class="two-columns">
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

    <h2 class="mt-8">PARTNERSHIP IDEAS WE'RE READY TO BUILD</h2>

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

    <div class="highlight-box text-center mt-6">
        <strong style="color: #FF621B;">Have another idea? We are open and ready.</strong>
    </div>

    <h2 class="mt-8">WHAT MAKES THIS DIFFERENT</h2>
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

    <h2 class="mt-8">OUR SUCCESS TARGETS</h2>

    <ul class="check-list">
        <li>Sustainable recurring revenue</li>
        <li>Thousands of active users</li>
        <li>40-60% operational efficiency gains</li>
        <li>High customer satisfaction (above industry NPS)</li>
        <li>Systems built to scale <strong>10x and beyond</strong></li>
    </ul>

    <div class="page-break"></div>

    <!-- Page 5: Contact -->
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

    <h2 class="mt-8">NEXT STEPS</h2>
    <div class="process-step mb-4">
        <div class="step-number">1</div>
        <div class="step-content"><strong>Send us</strong> your idea or project brief</div>
    </div>
    <div class="process-step mb-4">
        <div class="step-number">2</div>
        <div class="step-content"><strong>Schedule</strong> a strategy discussion</div>
    </div>
    <div class="process-step mb-4">
        <div class="step-number">3</div>
        <div class="step-content"><strong>Meet the team</strong> and define the partnership</div>
    </div>

    <div class="highlight-box blue mt-8">
        <strong>CONFIDENTIALITY GUARANTEED</strong><br>
        All discussions are treated with strict confidentiality. NDAs can be signed before detailed disclosures.
    </div>

    <div class="text-center mt-8" style="padding: 15px; background: #f8f9fa; border-radius: 4px;">
        <p style="font-style: italic; color: #1F3B8D; font-size: 10px; margin-bottom: 5px;">
            Innovation succeeds when vision meets execution.
        </p>
        <p style="font-weight: bold; color: #FF621B; font-size: 11px;">
            Let's build meaningful businesses together.
        </p>
        <p style="font-weight: bold; color: #1F3B8D; margin-top: 8px; font-size: 10px;">— ZIMA Solutions Limited</p>
    </div>

    <div class="text-center mt-8 small-text">
        <strong>TIN:</strong> 181-314-605 | <strong>Registered in Tanzania</strong><br>
        <span style="color: #FF621B; font-weight: bold; font-size: 9px;">Build the Future. Together.</span>
    </div>

</body>
</html>
