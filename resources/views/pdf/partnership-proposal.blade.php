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
            font-size: 11pt;
            line-height: 1.6;
            color: #1A1A1A;
        }

        .page {
            padding: 50px 60px;
            min-height: 100%;
        }

        .page-break {
            page-break-after: always;
        }

        /* Colors */
        .primary { color: #1F3B8D; }
        .secondary { color: #FF621B; }

        /* Cover Page - Full bleed */
        .cover {
            background: #1F3B8D;
            color: white;
            text-align: center;
            padding: 80px 70px;
            min-height: 100vh;
        }

        .cover img {
            width: 160px;
            margin-bottom: 40px;
        }

        .cover h1 {
            font-size: 28pt;
            color: #FF621B;
            margin-bottom: 10px;
        }

        .cover .subtitle {
            font-size: 14pt;
            margin-bottom: 50px;
        }

        .cover .tagline {
            font-size: 18pt;
            color: #FF621B;
            margin-bottom: 5px;
        }

        .cover .tagline-sub {
            font-size: 18pt;
            margin-bottom: 40px;
        }

        .cover .description {
            font-size: 11pt;
            line-height: 1.8;
            max-width: 420px;
            margin: 0 auto 30px;
        }

        .cover .highlight {
            font-size: 11pt;
            color: #FF621B;
            margin-bottom: 40px;
        }

        .cover .cta {
            background: #FF621B;
            color: white;
            padding: 12px 30px;
            font-size: 12pt;
            font-weight: bold;
            display: inline-block;
        }

        .cover .footer {
            position: absolute;
            bottom: 40px;
            left: 0;
            right: 0;
            font-size: 9pt;
            color: rgba(255,255,255,0.7);
        }

        /* Page Header */
        .header {
            border-bottom: 3px solid #1F3B8D;
            padding-bottom: 15px;
            margin-bottom: 30px;
        }

        .header img {
            width: 80px;
            float: left;
        }

        .header-text {
            text-align: right;
        }

        .header h1 {
            font-size: 18pt;
            color: #1F3B8D;
            margin-bottom: 3px;
        }

        .header p {
            font-size: 10pt;
            color: #FF621B;
            font-weight: bold;
        }

        .clearfix::after {
            content: "";
            display: table;
            clear: both;
        }

        /* Section Titles */
        h2 {
            font-size: 14pt;
            color: #1F3B8D;
            margin: 25px 0 15px 0;
            padding-bottom: 5px;
            border-bottom: 2px solid #FF621B;
        }

        h2:first-of-type {
            margin-top: 0;
        }

        h3 {
            font-size: 12pt;
            color: #1F3B8D;
            margin: 20px 0 10px 0;
        }

        h4 {
            font-size: 11pt;
            color: #FF621B;
            margin: 15px 0 8px 0;
        }

        /* Paragraphs */
        p {
            margin-bottom: 10px;
        }

        /* Tables */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 15px 0;
        }

        th {
            background: #1F3B8D;
            color: white;
            padding: 10px 15px;
            text-align: left;
            font-size: 10pt;
        }

        td {
            padding: 10px 15px;
            border-bottom: 1px solid #ddd;
            font-size: 10pt;
        }

        tr:nth-child(even) {
            background: #f5f5f5;
        }

        .big-number {
            font-size: 14pt;
            font-weight: bold;
            color: #FF621B;
            text-align: center;
        }

        /* Highlight Box */
        .box {
            background: #FFF5F0;
            border-left: 4px solid #FF621B;
            padding: 15px 20px;
            margin: 20px 0;
        }

        .box.blue {
            background: #F0F4FF;
            border-left-color: #1F3B8D;
        }

        .box strong {
            color: #FF621B;
        }

        /* Lists */
        ul {
            margin: 10px 0 10px 25px;
        }

        li {
            margin-bottom: 6px;
        }

        /* Two Columns */
        .row {
            width: 100%;
        }

        .col {
            width: 48%;
            display: inline-block;
            vertical-align: top;
        }

        .col:first-child {
            margin-right: 3%;
        }

        /* Stats Row */
        .stats {
            text-align: center;
            margin: 20px 0;
        }

        .stat {
            display: inline-block;
            width: 24%;
            text-align: center;
        }

        .stat-num {
            font-size: 22pt;
            font-weight: bold;
            color: #FF621B;
        }

        .stat-label {
            font-size: 9pt;
            color: #666;
        }

        /* Process Steps */
        .step {
            margin-bottom: 12px;
        }

        .step-num {
            display: inline-block;
            width: 24px;
            height: 24px;
            background: #FF621B;
            color: white;
            text-align: center;
            line-height: 24px;
            font-weight: bold;
            font-size: 10pt;
            border-radius: 50%;
            margin-right: 10px;
        }

        .step-text {
            display: inline;
        }

        .step-title {
            font-weight: bold;
            color: #1F3B8D;
        }

        /* Ideas Grid */
        .idea {
            padding: 8px 0;
            border-bottom: 1px dotted #ccc;
        }

        .idea-bullet {
            color: #FF621B;
            font-weight: bold;
            margin-right: 8px;
        }

        /* Comparison Table */
        .compare-bad {
            background: #FFEEEE !important;
        }

        .compare-good {
            background: #EEFFEE !important;
        }

        /* Contact Section */
        .contact-box {
            background: #1F3B8D;
            color: white;
            padding: 25px 30px;
            text-align: center;
            margin: 25px 0;
        }

        .contact-box h2 {
            color: #FF621B;
            border: none;
            margin: 0 0 15px 0;
            font-size: 14pt;
        }

        .contact-item {
            display: inline-block;
            width: 24%;
            text-align: center;
            vertical-align: top;
        }

        .contact-label {
            font-size: 9pt;
            color: #FF621B;
            margin-bottom: 3px;
        }

        .contact-value {
            font-size: 10pt;
        }

        /* Checkmarks */
        .check {
            color: #FF621B;
            font-weight: bold;
            margin-right: 8px;
        }

        /* Footer Quote */
        .quote-box {
            background: #f8f8f8;
            padding: 20px;
            text-align: center;
            margin-top: 25px;
        }

        .quote {
            font-style: italic;
            color: #1F3B8D;
            font-size: 11pt;
            margin-bottom: 8px;
        }

        .quote-author {
            font-weight: bold;
            color: #FF621B;
            font-size: 12pt;
        }

        .tin {
            text-align: center;
            font-size: 9pt;
            color: #666;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<!-- PAGE 1: Cover -->
<div class="cover">
    <img src="{{ public_path('vf/zim2a.png') }}" alt="ZIMA Solutions">

    <h1>STRATEGIC PARTNERSHIP OPPORTUNITY</h1>
    <div class="subtitle">Build Together. Share Risk. Share Success.</div>

    <div class="tagline">YOUR IDEA + OUR TECHNOLOGY</div>
    <div class="tagline-sub">= A SCALABLE BUSINESS</div>

    <div class="description">
        <strong>ZIMA Solutions Limited</strong> invites visionary entrepreneurs, companies, and institutions to form <strong>true strategic partnerships</strong>. If you have a strong business idea or a growing project that needs world-class technology, we offer a <strong>transparent 50/50 partnership</strong> to co-invest, co-build, and co-own high-impact digital solutions.
    </div>

    <div class="highlight">
        This is not a vendor relationship.<br>
        This is shared risk, shared ownership, and shared upside.
    </div>

    <div class="cta">Let's Build Something That Lasts</div>

    <div class="footer">
        ZIMA Solutions Limited | TIN: 181-314-605 | Registered in Tanzania<br>
        Build the Future. Together.
    </div>
</div>

<div class="page-break"></div>

<!-- PAGE 2: Partnership Model & What ZIMA Brings -->
<div class="page">
    <div class="header clearfix">
        <img src="{{ public_path('vf/zim2a.png') }}" alt="ZIMA">
        <div class="header-text">
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
            <td class="big-number">50%</td>
            <td class="big-number">50%</td>
        </tr>
        <tr>
            <td><strong>Investment & Costs</strong></td>
            <td class="big-number">50%</td>
            <td class="big-number">50%</td>
        </tr>
        <tr>
            <td><strong>Revenue & Profits</strong></td>
            <td class="big-number">50%</td>
            <td class="big-number">50%</td>
        </tr>
        <tr>
            <td><strong>Strategic Decisions</strong></td>
            <td style="text-align:center;">Joint</td>
            <td style="text-align:center;">Joint</td>
        </tr>
    </table>

    <div class="box">
        <strong>No hidden charges. No vendor lock-in. No one-sided contracts.</strong><br>
        Only long-term collaboration built on trust and results.
    </div>

    <h2>WHAT ZIMA BRINGS</h2>
    <h3>Proven Technology. Real Execution.</h3>
    <p>We have built and deployed <strong class="secondary">26+ production-ready solutions</strong> across fintech, enterprise, and public-sector systems.</p>

    <div class="row">
        <div class="col">
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
        <div class="col">
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

<div class="page-break"></div>

<!-- PAGE 3: Why ZIMA & Ideal Partners -->
<div class="page">
    <div class="header clearfix">
        <img src="{{ public_path('vf/zim2a.png') }}" alt="ZIMA">
        <div class="header-text">
            <h1>WHY ZIMA?</h1>
            <p>Results You Can Trust</p>
        </div>
    </div>

    <div class="stats">
        <div class="stat">
            <div class="stat-num">50+</div>
            <div class="stat-label">Clients Served</div>
        </div>
        <div class="stat">
            <div class="stat-num">20+</div>
            <div class="stat-label">Enterprise Systems Live</div>
        </div>
        <div class="stat">
            <div class="stat-num">99.9%</div>
            <div class="stat-label">Uptime Infrastructure</div>
        </div>
        <div class="stat">
            <div class="stat-num">24/7</div>
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

    <h3>Technical Excellence</h3>
    <p>
        <span class="check">&#10003;</span>Full-stack & scalable architectures<br>
        <span class="check">&#10003;</span>Bank-grade security & compliance<br>
        <span class="check">&#10003;</span>Regulatory experience (BOT & financial systems)<br>
        <span class="check">&#10003;</span>Agile development & continuous improvement<br>
        <span class="check">&#10003;</span>Long-term maintenance & support
    </p>

    <h2>IDEAL PARTNERS</h2>

    <div class="row">
        <div class="col">
            <h4>Entrepreneurs & Visionaries who have:</h4>
            <ul>
                <li>A validated market need in Tanzania or East Africa</li>
                <li>Clear problem-solution alignment</li>
                <li>Industry knowledge and execution capacity</li>
                <li>Long-term growth mindset</li>
            </ul>
        </div>
        <div class="col">
            <h4>Companies & Institutions that:</h4>
            <ul>
                <li>Have strong ideas but limited technical capacity</li>
                <li>Need to digitize existing services or customers</li>
                <li>Want to scale without outsourcing ownership</li>
                <li>Believe in shared-value partnerships</li>
            </ul>
        </div>
    </div>

    <h4>Priority Sectors:</h4>
    <div class="box blue">
        Financial Services & Fintech | Healthcare & Healthtech | Education & Edtech | Agriculture & Agritech | Government & Civic Tech | Retail & E-commerce | Real Estate & Property Management | Logistics & Supply Chain
    </div>
</div>

<div class="page-break"></div>

<!-- PAGE 4: How We Work & Partnership Ideas -->
<div class="page">
    <div class="header clearfix">
        <img src="{{ public_path('vf/zim2a.png') }}" alt="ZIMA">
        <div class="header-text">
            <h1>HOW WE WORK TOGETHER</h1>
            <p>Simple. Structured. Effective.</p>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="step">
                <span class="step-num">1</span>
                <span class="step-text"><span class="step-title">CONNECT</span> - Share your idea or project</span>
            </div>
            <div class="step">
                <span class="step-num">2</span>
                <span class="step-text"><span class="step-title">EVALUATE</span> - Joint feasibility & market assessment</span>
            </div>
            <div class="step">
                <span class="step-num">3</span>
                <span class="step-text"><span class="step-title">AGREE</span> - Clear partnership & ownership terms</span>
            </div>
        </div>
        <div class="col">
            <div class="step">
                <span class="step-num">4</span>
                <span class="step-text"><span class="step-title">BUILD</span> - Co-invest and co-develop</span>
            </div>
            <div class="step">
                <span class="step-num">5</span>
                <span class="step-text"><span class="step-title">LAUNCH</span> - Go to market together</span>
            </div>
            <div class="step">
                <span class="step-num">6</span>
                <span class="step-text"><span class="step-title">SCALE</span> - Grow, optimize, and expand</span>
            </div>
        </div>
    </div>

    <h2>PARTNERSHIP IDEAS WE'RE READY TO BUILD</h2>

    <div class="row">
        <div class="col">
            <div class="idea"><span class="idea-bullet">&rsaquo;</span> Digital lending platforms</div>
            <div class="idea"><span class="idea-bullet">&rsaquo;</span> Healthcare appointment & payment systems</div>
            <div class="idea"><span class="idea-bullet">&rsaquo;</span> School fees & parent engagement platforms</div>
            <div class="idea"><span class="idea-bullet">&rsaquo;</span> Farmer-to-marketplace solutions</div>
            <div class="idea"><span class="idea-bullet">&rsaquo;</span> Event ticketing & management systems</div>
        </div>
        <div class="col">
            <div class="idea"><span class="idea-bullet">&rsaquo;</span> Property rental & management platforms</div>
            <div class="idea"><span class="idea-bullet">&rsaquo;</span> Fleet & transport management systems</div>
            <div class="idea"><span class="idea-bullet">&rsaquo;</span> Restaurant & hospitality POS</div>
            <div class="idea"><span class="idea-bullet">&rsaquo;</span> Cooperative & savings group platforms</div>
            <div class="idea"><span class="idea-bullet">&rsaquo;</span> Freelancer & talent marketplaces</div>
        </div>
    </div>

    <div class="box" style="text-align:center;">
        <strong>Have another idea? We are open and ready.</strong>
    </div>

    <h2>WHAT MAKES THIS DIFFERENT</h2>
    <h3>Vendor Model vs Strategic Partnership</h3>

    <table>
        <tr>
            <th style="background:#dc3545;">Traditional Vendor</th>
            <th style="background:#28a745;">ZIMA Partnership</th>
        </tr>
        <tr>
            <td class="compare-bad">You pay everything</td>
            <td class="compare-good">We co-invest 50/50</td>
        </tr>
        <tr>
            <td class="compare-bad">Vendor delivers & exits</td>
            <td class="compare-good">We stay and grow</td>
        </tr>
        <tr>
            <td class="compare-bad">One-sided risk</td>
            <td class="compare-good">Shared risk & reward</td>
        </tr>
        <tr>
            <td class="compare-bad">Fixed scope</td>
            <td class="compare-good">Flexible, evolving</td>
        </tr>
        <tr>
            <td class="compare-bad">You own alone</td>
            <td class="compare-good">We build together</td>
        </tr>
    </table>
</div>

<div class="page-break"></div>

<!-- PAGE 5: Success Targets & Contact -->
<div class="page">
    <div class="header clearfix">
        <img src="{{ public_path('vf/zim2a.png') }}" alt="ZIMA">
        <div class="header-text">
            <h1>OUR SUCCESS TARGETS</h1>
            <p>What We Aim to Achieve Together</p>
        </div>
    </div>

    <p style="font-size: 12pt;">
        <span class="check">&#10003;</span> Sustainable recurring revenue<br><br>
        <span class="check">&#10003;</span> Thousands of active users<br><br>
        <span class="check">&#10003;</span> 40-60% operational efficiency gains<br><br>
        <span class="check">&#10003;</span> High customer satisfaction (above industry NPS)<br><br>
        <span class="check">&#10003;</span> Systems built to scale <strong>10x and beyond</strong>
    </p>

    <div class="contact-box">
        <h2>GET IN TOUCH</h2>
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
            <div class="contact-value">Makongo, Kinondoni<br>Dar es Salaam</div>
        </div>
    </div>

    <h2>NEXT STEPS</h2>
    <div class="step">
        <span class="step-num">1</span>
        <span class="step-text"><strong>Send us</strong> your idea or project brief</span>
    </div>
    <div class="step">
        <span class="step-num">2</span>
        <span class="step-text"><strong>Schedule</strong> a strategy discussion</span>
    </div>
    <div class="step">
        <span class="step-num">3</span>
        <span class="step-text"><strong>Meet the team</strong> and define the partnership</span>
    </div>

    <div class="box blue" style="margin-top: 25px;">
        <strong>CONFIDENTIALITY GUARANTEED</strong><br>
        All discussions are treated with strict confidentiality. NDAs can be signed before detailed disclosures.
    </div>

    <div class="quote-box">
        <div class="quote">Innovation succeeds when vision meets execution.</div>
        <div class="quote-author">Let's build meaningful businesses together.</div>
        <p style="margin-top: 10px; font-weight: bold; color: #1F3B8D;">— ZIMA Solutions Limited</p>
    </div>

    <div class="tin">
        <strong>TIN:</strong> 181-314-605 | <strong>Registered in Tanzania</strong><br>
        <span style="color: #FF621B; font-weight: bold;">Build the Future. Together.</span>
    </div>
</div>

</body>
</html>
