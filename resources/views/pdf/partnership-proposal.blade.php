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
            font-size: 11px;
            line-height: 1.4;
            color: #1A1A1A;
        }

        .page {
            padding: 40px 50px;
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
            margin-bottom: 25px;
            border-bottom: 3px solid #FF621B;
            padding-bottom: 15px;
        }

        .header-logo {
            display: table-cell;
            vertical-align: middle;
            width: 150px;
        }

        .header-logo img {
            width: 130px;
            height: auto;
        }

        .header-title {
            display: table-cell;
            vertical-align: middle;
            text-align: right;
        }

        .header-title h1 {
            font-size: 22px;
            color: #1F3B8D;
            margin-bottom: 3px;
            font-weight: bold;
        }

        .header-title p {
            font-size: 12px;
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
            padding: 80px 60px;
        }

        .cover-logo {
            margin-bottom: 40px;
        }

        .cover-logo img {
            width: 200px;
            height: auto;
        }

        .cover-title {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 15px;
            color: #FF621B;
        }

        .cover-subtitle {
            font-size: 20px;
            margin-bottom: 50px;
            color: #FEFFFF;
        }

        .cover-tagline {
            font-size: 28px;
            color: #FF621B;
            margin-bottom: 30px;
            font-weight: bold;
        }

        .cover-description {
            font-size: 14px;
            line-height: 1.8;
            max-width: 500px;
            margin: 0 auto 50px;
            color: #FEFFFF;
        }

        .cover-cta {
            background: #FF621B;
            color: white;
            padding: 15px 40px;
            font-size: 16px;
            font-weight: bold;
            display: inline-block;
            border-radius: 5px;
        }

        .cover-footer {
            position: absolute;
            bottom: 40px;
            left: 0;
            right: 0;
            font-size: 11px;
            color: rgba(255,255,255,0.8);
        }

        /* Section Titles */
        h2 {
            font-size: 18px;
            color: #1F3B8D;
            margin-bottom: 12px;
            padding-bottom: 5px;
            border-bottom: 2px solid #FF621B;
        }

        h3 {
            font-size: 14px;
            color: #1F3B8D;
            margin-bottom: 8px;
            margin-top: 15px;
        }

        h4 {
            font-size: 12px;
            color: #FF621B;
            margin-bottom: 5px;
            margin-top: 10px;
        }

        /* Tables */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 12px 0;
        }

        table th {
            background: #1F3B8D;
            color: white;
            padding: 10px;
            text-align: left;
            font-size: 11px;
        }

        table td {
            padding: 8px 10px;
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
            padding: 15px;
            margin: 15px 0;
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
            padding-right: 15px;
        }

        .column:last-child {
            padding-right: 0;
            padding-left: 15px;
        }

        /* Lists */
        ul {
            margin: 8px 0;
            padding-left: 20px;
        }

        ul li {
            margin-bottom: 4px;
        }

        /* Process Steps */
        .process-step {
            display: table;
            width: 100%;
            margin-bottom: 8px;
        }

        .step-number {
            display: table-cell;
            width: 30px;
            height: 30px;
            background: #FF621B;
            color: white;
            text-align: center;
            vertical-align: middle;
            font-weight: bold;
            border-radius: 50%;
        }

        .step-content {
            display: table-cell;
            padding-left: 12px;
            vertical-align: middle;
        }

        .step-title {
            font-weight: bold;
            color: #1F3B8D;
        }

        /* Ideas Grid */
        .ideas-grid {
            display: table;
            width: 100%;
        }

        .idea-item {
            display: table-cell;
            width: 50%;
            padding: 8px;
            vertical-align: top;
        }

        .idea-number {
            display: inline-block;
            width: 22px;
            height: 22px;
            background: #FF621B;
            color: white;
            text-align: center;
            border-radius: 50%;
            font-size: 10px;
            line-height: 22px;
            margin-right: 8px;
        }

        /* Contact Section */
        .contact-section {
            background: #1F3B8D;
            color: white;
            padding: 25px;
            margin-top: 20px;
            text-align: center;
        }

        .contact-section h2 {
            color: #FF621B;
            border-bottom: none;
            margin-bottom: 15px;
        }

        .contact-grid {
            display: table;
            width: 100%;
            margin-top: 15px;
        }

        .contact-item {
            display: table-cell;
            width: 25%;
            text-align: center;
            padding: 10px;
        }

        .contact-label {
            font-size: 10px;
            color: #FF621B;
            margin-bottom: 5px;
        }

        .contact-value {
            font-size: 11px;
            color: white;
        }

        /* Footer */
        .page-footer {
            position: fixed;
            bottom: 20px;
            left: 50px;
            right: 50px;
            font-size: 9px;
            color: #666;
            text-align: center;
            border-top: 1px solid #ddd;
            padding-top: 10px;
        }

        /* Comparison Table */
        .comparison-table td:first-child {
            background: #fee;
        }

        .comparison-table td:last-child {
            background: #efe;
        }

        /* Stats */
        .stats-row {
            display: table;
            width: 100%;
            margin: 15px 0;
        }

        .stat-item {
            display: table-cell;
            width: 25%;
            text-align: center;
            padding: 10px;
        }

        .stat-number {
            font-size: 24px;
            font-weight: bold;
            color: #FF621B;
        }

        .stat-label {
            font-size: 10px;
            color: #666;
        }

        /* Checkmark list */
        .check-list {
            list-style: none;
            padding-left: 0;
        }

        .check-list li {
            padding-left: 20px;
            position: relative;
            margin-bottom: 6px;
        }

        .check-list li:before {
            content: "\2713";
            color: #FF621B;
            font-weight: bold;
            position: absolute;
            left: 0;
        }

        .small-text {
            font-size: 9px;
            color: #666;
        }

        .text-center {
            text-align: center;
        }

        .mb-10 { margin-bottom: 10px; }
        .mb-15 { margin-bottom: 15px; }
        .mb-20 { margin-bottom: 20px; }
        .mt-15 { margin-top: 15px; }
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
            <div class="cover-subtitle">Build Together. Share Success. Grow Together.</div>

            <div class="cover-tagline">YOUR IDEA + OUR TECHNOLOGY = SHARED SUCCESS</div>

            <div class="cover-description">
                ZIMA Solutions Limited is actively seeking visionary partners with innovative business ideas
                or projects that require technical expertise. We're offering a unique 50/50 partnership model
                where we co-invest, co-build, and co-own transformative digital solutions.
            </div>

            <div class="cover-cta">Let's Build the Future Together</div>

            <div class="cover-footer">
                ZIMA Solutions Limited | TIN: 181-314-605 | Registered in Tanzania<br>
                Build Your Future. Together.
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
                <p>Equal Investment. Equal Ownership. Equal Returns.</p>
            </div>
        </div>

        <table>
            <tr>
                <th>What We Share</th>
                <th>Your Contribution</th>
                <th>ZIMA's Contribution</th>
            </tr>
            <tr>
                <td><strong>Ownership</strong></td>
                <td style="text-align: center; font-weight: bold; color: #FF621B;">50%</td>
                <td style="text-align: center; font-weight: bold; color: #FF621B;">50%</td>
            </tr>
            <tr>
                <td><strong>Project Costs</strong></td>
                <td style="text-align: center; font-weight: bold; color: #FF621B;">50%</td>
                <td style="text-align: center; font-weight: bold; color: #FF621B;">50%</td>
            </tr>
            <tr>
                <td><strong>Revenue & Profits</strong></td>
                <td style="text-align: center; font-weight: bold; color: #FF621B;">50%</td>
                <td style="text-align: center; font-weight: bold; color: #FF621B;">50%</td>
            </tr>
            <tr>
                <td><strong>Decision Making</strong></td>
                <td style="text-align: center;">Joint</td>
                <td style="text-align: center;">Joint</td>
            </tr>
        </table>

        <div class="highlight-box">
            <strong style="color: #FF621B;">No Hidden Fees. No Complicated Terms. True Partnership.</strong>
        </div>

        <h2>WHAT ZIMA BRINGS TO THE TABLE</h2>
        <h3>World-Class Technical Capabilities</h3>
        <p><strong style="color: #FF621B;">26+ Proven Solutions</strong> across fintech, enterprise systems, and digital transformation:</p>

        <div class="two-columns mt-15">
            <div class="column">
                <h4>Financial Technology Expertise</h4>
                <ul>
                    <li>Bank of Tanzania integrations (RTGS, TIPS, GePG)</li>
                    <li>Payment gateway development</li>
                    <li>Loan management systems</li>
                    <li>Mobile money integrations (M-Pesa, Airtel, Tigo)</li>
                    <li>TanQR merchant systems</li>
                </ul>

                <h4>Enterprise Systems</h4>
                <ul>
                    <li>ERP & business management platforms</li>
                    <li>HR & payroll systems</li>
                    <li>Inventory & asset management</li>
                    <li>Document management with e-signatures</li>
                </ul>
            </div>
            <div class="column">
                <h4>Sector-Specific Solutions</h4>
                <ul>
                    <li>Healthcare facility management</li>
                    <li>School management systems</li>
                    <li>Agricultural financing platforms</li>
                    <li>SACCOS & microfinance systems</li>
                    <li>VICOBA digitization</li>
                </ul>

                <h4>Cutting-Edge Technology</h4>
                <ul>
                    <li>AI-powered virtual assistants (Zona AI)</li>
                    <li>API gateway & open banking platforms</li>
                    <li>Real-time notification engines</li>
                    <li>Cloud-native architectures</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Page 3: Why Partner & Track Record -->
    <div class="page">
        <div class="header">
            <div class="header-logo">
                <img src="{{ public_path('vf/zim2a.png') }}" alt="ZIMA">
            </div>
            <div class="header-title">
                <h1>WHY PARTNER WITH ZIMA?</h1>
                <p>Proven Track Record & Experienced Team</p>
            </div>
        </div>

        <div class="stats-row">
            <div class="stat-item">
                <div class="stat-number">50+</div>
                <div class="stat-label">Clients Served</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">20+</div>
                <div class="stat-label">Enterprise Projects</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">99.9%</div>
                <div class="stat-label">System Uptime</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">24/7</div>
                <div class="stat-label">Technical Support</div>
            </div>
        </div>

        <h3>Experienced Leadership Team</h3>
        <table>
            <tr>
                <th>Role</th>
                <th>Name</th>
                <th>Expertise</th>
            </tr>
            <tr>
                <td><strong>CEO</strong></td>
                <td>Andrew Mashamba</td>
                <td>Strategic leadership, innovation, partnerships</td>
            </tr>
            <tr>
                <td><strong>Finance & Operations</strong></td>
                <td>Caroline Ceasar Shija</td>
                <td>Financial planning, compliance, operations</td>
            </tr>
            <tr>
                <td><strong>Technical Officer</strong></td>
                <td>Simon Mpembee</td>
                <td>Software architecture, system integrations</td>
            </tr>
            <tr>
                <td><strong>Business Development</strong></td>
                <td>Khafsa Hassan Lulela</td>
                <td>Client relations, market development</td>
            </tr>
        </table>

        <h3>Technical Excellence</h3>
        <ul class="check-list">
            <li>Full-stack development capabilities</li>
            <li>Bank-grade security standards</li>
            <li>BOT regulatory compliance expertise</li>
            <li>Agile development methodology</li>
            <li>Continuous support & maintenance</li>
        </ul>

        <h2 class="mt-15">IDEAL PARTNER PROFILE</h2>

        <div class="two-columns">
            <div class="column">
                <h4>Business Visionaries with:</h4>
                <ul>
                    <li>Validated market opportunities in Tanzania or East Africa</li>
                    <li>Clear problem-solution fit</li>
                    <li>Domain expertise in their industry</li>
                    <li>Commitment to long-term growth</li>
                </ul>
            </div>
            <div class="column">
                <h4>Companies with:</h4>
                <ul>
                    <li>Projects requiring technical development</li>
                    <li>Existing customer base needing digital solutions</li>
                    <li>Products ready for scale but lacking tech capacity</li>
                    <li>Ideas aligned with digital transformation trends</li>
                </ul>
            </div>
        </div>

        <div class="highlight-box blue mt-15">
            <strong>Priority Sectors:</strong> Financial Services & Fintech | Healthcare & Healthtech | Education & Edtech | Agriculture & Agritech | Government & Civic Tech | Retail & E-commerce | Real Estate & Property Management | Logistics & Supply Chain
        </div>
    </div>

    <!-- Page 4: Process & Opportunities -->
    <div class="page">
        <div class="header">
            <div class="header-logo">
                <img src="{{ public_path('vf/zim2a.png') }}" alt="ZIMA">
            </div>
            <div class="header-title">
                <h1>PARTNERSHIP PROCESS</h1>
                <p>Simple. Transparent. Efficient.</p>
            </div>
        </div>

        <div class="mb-20">
            <div class="process-step">
                <div class="step-number">1</div>
                <div class="step-content">
                    <span class="step-title">CONNECT</span> - Share your idea or project with us
                </div>
            </div>
            <div class="process-step">
                <div class="step-number">2</div>
                <div class="step-content">
                    <span class="step-title">EVALUATE</span> - Joint assessment of feasibility & market potential
                </div>
            </div>
            <div class="process-step">
                <div class="step-number">3</div>
                <div class="step-content">
                    <span class="step-title">AGREE</span> - Sign partnership agreement with clear terms
                </div>
            </div>
            <div class="process-step">
                <div class="step-number">4</div>
                <div class="step-content">
                    <span class="step-title">BUILD</span> - Co-develop the solution with shared resources
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
                    <span class="step-title">GROW</span> - Scale and share the success equally
                </div>
            </div>
        </div>

        <h2>READY-TO-BUILD IDEAS WE'RE EXCITED ABOUT</h2>

        <table>
            <tr>
                <td><span class="idea-number">1</span> <strong>Digital Lending Platform</strong> for underserved markets</td>
                <td><span class="idea-number">2</span> <strong>Healthcare Appointment & Payment System</strong> for clinics</td>
            </tr>
            <tr>
                <td><span class="idea-number">3</span> <strong>School Fees Collection Platform</strong> with parent engagement</td>
                <td><span class="idea-number">4</span> <strong>Farmer Marketplace</strong> connecting producers to buyers</td>
            </tr>
            <tr>
                <td><span class="idea-number">5</span> <strong>Event Ticketing & Management Platform</strong></td>
                <td><span class="idea-number">6</span> <strong>Property Rental Platform</strong> for Tanzania</td>
            </tr>
            <tr>
                <td><span class="idea-number">7</span> <strong>Fleet Management System</strong> for transport companies</td>
                <td><span class="idea-number">8</span> <strong>Restaurant & Hospitality POS System</strong></td>
            </tr>
            <tr>
                <td><span class="idea-number">9</span> <strong>Cooperative Management Platform</strong> for savings groups</td>
                <td><span class="idea-number">10</span> <strong>Freelancer Marketplace</strong> for East Africa</td>
            </tr>
        </table>

        <div class="highlight-box text-center">
            <strong style="color: #FF621B; font-size: 14px;">Have a different idea? We want to hear it!</strong>
        </div>

        <h2 class="mt-15">TRADITIONAL VENDOR VS. ZIMA PARTNERSHIP</h2>

        <table class="comparison-table">
            <tr>
                <th style="background: #dc3545;">Traditional Approach</th>
                <th style="background: #28a745;">ZIMA Partnership</th>
            </tr>
            <tr>
                <td>You pay 100% upfront</td>
                <td>We share costs 50/50</td>
            </tr>
            <tr>
                <td>Vendor profits, you take risk</td>
                <td>We share risk AND reward</td>
            </tr>
            <tr>
                <td>Limited commitment post-delivery</td>
                <td>We're invested in long-term success</td>
            </tr>
            <tr>
                <td>You own, they disappear</td>
                <td>Joint ownership, ongoing collaboration</td>
            </tr>
            <tr>
                <td>Fixed scope, change = more cost</td>
                <td>Flexible, evolving together</td>
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
                <h1>LET'S BUILD THE FUTURE TOGETHER</h1>
                <p>Ready to Partner?</p>
            </div>
        </div>

        <h2>SUCCESS METRICS WE TARGET</h2>

        <table>
            <tr>
                <th>Metric</th>
                <th>Target</th>
            </tr>
            <tr>
                <td><strong>Revenue Growth</strong></td>
                <td>Build solutions that generate sustainable income</td>
            </tr>
            <tr>
                <td><strong>Market Impact</strong></td>
                <td>Reach thousands of users across Tanzania</td>
            </tr>
            <tr>
                <td><strong>Operational Efficiency</strong></td>
                <td>40-60% reduction in manual processes</td>
            </tr>
            <tr>
                <td><strong>Customer Satisfaction</strong></td>
                <td>NPS scores above industry average</td>
            </tr>
            <tr>
                <td><strong>Scalability</strong></td>
                <td>Solutions built to grow 10x</td>
            </tr>
        </table>

        <div class="contact-section">
            <h2>CONTACT ZIMA SOLUTIONS LIMITED TODAY</h2>

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

        <h3 class="mt-15">Next Steps:</h3>
        <div class="process-step">
            <div class="step-number">1</div>
            <div class="step-content"><strong>Email us</strong> your idea or project brief</div>
        </div>
        <div class="process-step">
            <div class="step-number">2</div>
            <div class="step-content"><strong>Schedule a call</strong> to discuss the opportunity</div>
        </div>
        <div class="process-step">
            <div class="step-number">3</div>
            <div class="step-content"><strong>Meet our team</strong> for a detailed partnership discussion</div>
        </div>

        <div class="highlight-box blue mt-15">
            <strong>CONFIDENTIALITY ASSURED</strong><br>
            All ideas and discussions are treated with strict confidentiality. We're happy to sign NDAs before detailed conversations.
        </div>

        <div class="text-center mt-15" style="padding: 20px; background: #f8f9fa; border-radius: 5px;">
            <p style="font-style: italic; color: #1F3B8D; font-size: 14px; margin-bottom: 10px;">
                "Innovation thrives when visionaries and builders unite.<br>Let's create something remarkable together."
            </p>
            <p style="font-weight: bold; color: #FF621B;">— ZIMA Solutions Limited</p>
        </div>

        <div class="text-center mt-15 small-text">
            <strong>TIN:</strong> 181-314-605 | <strong>Registered in Tanzania</strong><br>
            <span style="color: #FF621B; font-weight: bold;">Build Your Future. Together.</span>
        </div>
    </div>

</body>
</html>
