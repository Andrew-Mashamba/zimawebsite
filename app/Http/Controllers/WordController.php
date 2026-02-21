<?php

namespace App\Http\Controllers;

use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\SimpleType\Jc;

class WordController extends Controller
{
    private $primary = '1F3B8D';
    private $secondary = 'FF621B';
    private $white = 'FFFFFF';
    private $gray = '666666';

    public function partnershipProposal()
    {
        $phpWord = new PhpWord();

        // Set default font
        $phpWord->setDefaultFontName('Arial');
        $phpWord->setDefaultFontSize(11);

        // ===== COVER PAGE =====
        $section = $phpWord->addSection([
            'marginTop' => 1440,
            'marginBottom' => 1440,
            'marginLeft' => 1440,
            'marginRight' => 1440,
        ]);

        $section->addTextBreak(3);

        // Title
        $section->addText(
            'STRATEGIC PARTNERSHIP OPPORTUNITY',
            ['bold' => true, 'size' => 26, 'color' => $this->secondary],
            ['alignment' => Jc::CENTER]
        );

        $section->addText(
            'Build Together. Share Risk. Share Success.',
            ['size' => 14, 'color' => $this->primary],
            ['alignment' => Jc::CENTER]
        );

        $section->addTextBreak(2);

        $section->addText(
            'YOUR IDEA + OUR TECHNOLOGY',
            ['bold' => true, 'size' => 18, 'color' => $this->secondary],
            ['alignment' => Jc::CENTER]
        );

        $section->addText(
            '= A SCALABLE BUSINESS',
            ['bold' => true, 'size' => 18, 'color' => $this->primary],
            ['alignment' => Jc::CENTER]
        );

        $section->addTextBreak(2);

        $section->addText(
            'ZIMA Solutions Limited invites visionary entrepreneurs, companies, and institutions to form true strategic partnerships. If you have a strong business idea or a growing project that needs world-class technology, we offer a transparent 50/50 partnership to co-invest, co-build, and co-own high-impact digital solutions.',
            ['size' => 11],
            ['alignment' => Jc::CENTER]
        );

        $section->addTextBreak(1);

        $section->addText(
            'This is not a vendor relationship.',
            ['bold' => true, 'size' => 12, 'color' => $this->secondary],
            ['alignment' => Jc::CENTER]
        );
        $section->addText(
            'This is shared risk, shared ownership, and shared upside.',
            ['bold' => true, 'size' => 12, 'color' => $this->secondary],
            ['alignment' => Jc::CENTER]
        );

        $section->addTextBreak(3);

        $section->addText(
            'ZIMA Solutions Limited',
            ['bold' => true, 'size' => 12, 'color' => $this->primary],
            ['alignment' => Jc::CENTER]
        );
        $section->addText(
            'TIN: 181-314-605 | Registered in Tanzania',
            ['size' => 10, 'color' => $this->gray],
            ['alignment' => Jc::CENTER]
        );

        // ===== PAGE 2: PARTNERSHIP MODEL =====
        $section = $phpWord->addSection([
            'marginTop' => 1080,
            'marginBottom' => 1080,
            'marginLeft' => 1260,
            'marginRight' => 1260,
        ]);

        $section->addText(
            'THE PARTNERSHIP MODEL',
            ['bold' => true, 'size' => 20, 'color' => $this->primary]
        );
        $section->addText(
            'Fair. Transparent. Aligned.',
            ['bold' => true, 'size' => 11, 'color' => $this->secondary]
        );
        $section->addTextBreak(1);

        // Simple table
        $table = $section->addTable(['borderSize' => 6, 'borderColor' => 'DDDDDD']);

        $table->addRow();
        $table->addCell(3000, ['bgColor' => $this->primary])->addText('Area', ['bold' => true, 'color' => $this->white]);
        $table->addCell(2500, ['bgColor' => $this->primary])->addText('You', ['bold' => true, 'color' => $this->white], ['alignment' => Jc::CENTER]);
        $table->addCell(2500, ['bgColor' => $this->primary])->addText('ZIMA', ['bold' => true, 'color' => $this->white], ['alignment' => Jc::CENTER]);

        $table->addRow();
        $table->addCell(3000)->addText('Equity Ownership', ['bold' => true]);
        $table->addCell(2500)->addText('50%', ['bold' => true, 'color' => $this->secondary, 'size' => 14], ['alignment' => Jc::CENTER]);
        $table->addCell(2500)->addText('50%', ['bold' => true, 'color' => $this->secondary, 'size' => 14], ['alignment' => Jc::CENTER]);

        $table->addRow();
        $table->addCell(3000, ['bgColor' => 'F5F5F5'])->addText('Investment & Costs', ['bold' => true]);
        $table->addCell(2500, ['bgColor' => 'F5F5F5'])->addText('50%', ['bold' => true, 'color' => $this->secondary, 'size' => 14], ['alignment' => Jc::CENTER]);
        $table->addCell(2500, ['bgColor' => 'F5F5F5'])->addText('50%', ['bold' => true, 'color' => $this->secondary, 'size' => 14], ['alignment' => Jc::CENTER]);

        $table->addRow();
        $table->addCell(3000)->addText('Revenue & Profits', ['bold' => true]);
        $table->addCell(2500)->addText('50%', ['bold' => true, 'color' => $this->secondary, 'size' => 14], ['alignment' => Jc::CENTER]);
        $table->addCell(2500)->addText('50%', ['bold' => true, 'color' => $this->secondary, 'size' => 14], ['alignment' => Jc::CENTER]);

        $table->addRow();
        $table->addCell(3000, ['bgColor' => 'F5F5F5'])->addText('Strategic Decisions', ['bold' => true]);
        $table->addCell(2500, ['bgColor' => 'F5F5F5'])->addText('Joint', [], ['alignment' => Jc::CENTER]);
        $table->addCell(2500, ['bgColor' => 'F5F5F5'])->addText('Joint', [], ['alignment' => Jc::CENTER]);

        $section->addTextBreak(1);

        $section->addText(
            'No hidden charges. No vendor lock-in. No one-sided contracts. Only long-term collaboration built on trust and results.',
            ['italic' => true, 'color' => $this->secondary]
        );

        $section->addTextBreak(1);

        // What ZIMA Brings
        $section->addText('WHAT ZIMA BRINGS', ['bold' => true, 'size' => 16, 'color' => $this->primary]);
        $section->addText('Proven Technology. Real Execution.', ['bold' => true, 'color' => $this->primary]);
        $section->addText('We have built and deployed 26+ production-ready solutions across fintech, enterprise, and public-sector systems.');

        $section->addTextBreak(1);

        $section->addText('Financial Technology & Payments', ['bold' => true, 'color' => $this->secondary]);
        $section->addListItem('Bank of Tanzania integrations (RTGS, TIPS, GePG)', 0);
        $section->addListItem('Payment gateways & merchant systems', 0);
        $section->addListItem('Loan & credit management platforms', 0);
        $section->addListItem('Mobile money integrations (M-Pesa, Airtel, Tigo)', 0);
        $section->addListItem('TanQR merchant & payment solutions', 0);

        $section->addText('Enterprise & Business Systems', ['bold' => true, 'color' => $this->secondary]);
        $section->addListItem('ERP & Business Management Systems', 0);
        $section->addListItem('HR, Payroll & Compliance platforms', 0);
        $section->addListItem('Inventory, procurement & asset management', 0);
        $section->addListItem('Secure document management with e-signatures', 0);

        $section->addText('Sector-Focused Platforms', ['bold' => true, 'color' => $this->secondary]);
        $section->addListItem('Healthcare & clinic management systems', 0);
        $section->addListItem('School & education management solutions', 0);
        $section->addListItem('Agricultural financing & farmer platforms', 0);
        $section->addListItem('SACCOS, MFI & VICOBA digitization', 0);

        $section->addText('Advanced & Emerging Technology', ['bold' => true, 'color' => $this->secondary]);
        $section->addListItem('AI-powered virtual assistants (Zona AI)', 0);
        $section->addListItem('API gateways & open banking platforms', 0);
        $section->addListItem('Real-time messaging & notification engines', 0);
        $section->addListItem('Secure, cloud-native architectures', 0);

        // ===== PAGE 3: WHY ZIMA =====
        $section = $phpWord->addSection([
            'marginTop' => 1080,
            'marginBottom' => 1080,
            'marginLeft' => 1260,
            'marginRight' => 1260,
        ]);

        $section->addText('WHY ZIMA?', ['bold' => true, 'size' => 20, 'color' => $this->primary]);
        $section->addText('Results You Can Trust', ['bold' => true, 'size' => 11, 'color' => $this->secondary]);
        $section->addTextBreak(1);

        // Stats inline
        $section->addText('50+ Clients Served  |  20+ Enterprise Systems Live  |  99.9% Uptime  |  24/7 Support',
            ['bold' => true, 'size' => 12, 'color' => $this->secondary],
            ['alignment' => Jc::CENTER]
        );

        $section->addTextBreak(1);

        $section->addText('LEADERSHIP & EXECUTION TEAM', ['bold' => true, 'size' => 16, 'color' => $this->primary]);

        $table = $section->addTable(['borderSize' => 6, 'borderColor' => 'DDDDDD']);

        $table->addRow();
        $table->addCell(2500, ['bgColor' => $this->primary])->addText('Role', ['bold' => true, 'color' => $this->white]);
        $table->addCell(2500, ['bgColor' => $this->primary])->addText('Name', ['bold' => true, 'color' => $this->white]);
        $table->addCell(3000, ['bgColor' => $this->primary])->addText('Focus', ['bold' => true, 'color' => $this->white]);

        $table->addRow();
        $table->addCell(2500)->addText('CEO', ['bold' => true]);
        $table->addCell(2500)->addText('Andrew Mashamba');
        $table->addCell(3000)->addText('Strategy, innovation, partnerships');

        $table->addRow();
        $table->addCell(2500, ['bgColor' => 'F5F5F5'])->addText('Finance & Operations', ['bold' => true]);
        $table->addCell(2500, ['bgColor' => 'F5F5F5'])->addText('Caroline Ceasar Shija');
        $table->addCell(3000, ['bgColor' => 'F5F5F5'])->addText('Financial governance & operations');

        $table->addRow();
        $table->addCell(2500)->addText('Technical Officer', ['bold' => true]);
        $table->addCell(2500)->addText('Simon Mpembee');
        $table->addCell(3000)->addText('Architecture & system integrations');

        $table->addRow();
        $table->addCell(2500, ['bgColor' => 'F5F5F5'])->addText('Business Development', ['bold' => true]);
        $table->addCell(2500, ['bgColor' => 'F5F5F5'])->addText('Khafsa Hassan Lulela');
        $table->addCell(3000, ['bgColor' => 'F5F5F5'])->addText('Market growth & partnerships');

        $section->addTextBreak(1);

        $section->addText('Technical Excellence', ['bold' => true, 'color' => $this->primary]);
        $section->addListItem('Full-stack & scalable architectures', 0);
        $section->addListItem('Bank-grade security & compliance', 0);
        $section->addListItem('Regulatory experience (BOT & financial systems)', 0);
        $section->addListItem('Agile development & continuous improvement', 0);
        $section->addListItem('Long-term maintenance & support', 0);

        $section->addTextBreak(1);

        $section->addText('IDEAL PARTNERS', ['bold' => true, 'size' => 16, 'color' => $this->primary]);

        $section->addText('Entrepreneurs & Visionaries who have:', ['bold' => true, 'color' => $this->secondary]);
        $section->addListItem('A validated market need in Tanzania or East Africa', 0);
        $section->addListItem('Clear problem-solution alignment', 0);
        $section->addListItem('Industry knowledge and execution capacity', 0);
        $section->addListItem('Long-term growth mindset', 0);

        $section->addText('Companies & Institutions that:', ['bold' => true, 'color' => $this->secondary]);
        $section->addListItem('Have strong ideas but limited technical capacity', 0);
        $section->addListItem('Need to digitize existing services or customers', 0);
        $section->addListItem('Want to scale without outsourcing ownership', 0);
        $section->addListItem('Believe in shared-value partnerships', 0);

        $section->addTextBreak(1);
        $section->addText('Priority Sectors:', ['bold' => true, 'color' => $this->secondary]);
        $section->addText('Financial Services | Healthcare | Education | Agriculture | Government | Retail | Real Estate | Logistics', ['size' => 10]);

        // ===== PAGE 4: HOW WE WORK =====
        $section = $phpWord->addSection([
            'marginTop' => 1080,
            'marginBottom' => 1080,
            'marginLeft' => 1260,
            'marginRight' => 1260,
        ]);

        $section->addText('HOW WE WORK TOGETHER', ['bold' => true, 'size' => 20, 'color' => $this->primary]);
        $section->addText('Simple. Structured. Effective.', ['bold' => true, 'size' => 11, 'color' => $this->secondary]);
        $section->addTextBreak(1);

        $steps = [
            ['1', 'CONNECT', 'Share your idea or project'],
            ['2', 'EVALUATE', 'Joint feasibility & market assessment'],
            ['3', 'AGREE', 'Clear partnership & ownership terms'],
            ['4', 'BUILD', 'Co-invest and co-develop'],
            ['5', 'LAUNCH', 'Go to market together'],
            ['6', 'SCALE', 'Grow, optimize, and expand'],
        ];

        foreach ($steps as $step) {
            $section->addText(
                $step[0] . '. ' . $step[1] . ' - ' . $step[2],
                ['size' => 11]
            );
        }

        $section->addTextBreak(1);

        $section->addText('PARTNERSHIP IDEAS WE\'RE READY TO BUILD', ['bold' => true, 'size' => 16, 'color' => $this->primary]);

        $ideas = [
            'Digital lending platforms',
            'Healthcare appointment & payment systems',
            'School fees & parent engagement platforms',
            'Farmer-to-marketplace solutions',
            'Event ticketing & management systems',
            'Property rental & management platforms',
            'Fleet & transport management systems',
            'Restaurant & hospitality POS',
            'Cooperative & savings group platforms',
            'Freelancer & talent marketplaces',
        ];

        foreach ($ideas as $idea) {
            $section->addListItem($idea, 0);
        }

        $section->addTextBreak(1);
        $section->addText('Have another idea? We are open and ready.', ['bold' => true, 'color' => $this->secondary], ['alignment' => Jc::CENTER]);

        $section->addTextBreak(1);

        $section->addText('WHAT MAKES THIS DIFFERENT', ['bold' => true, 'size' => 16, 'color' => $this->primary]);

        $table = $section->addTable(['borderSize' => 6, 'borderColor' => 'DDDDDD']);

        $table->addRow();
        $table->addCell(4000, ['bgColor' => 'DC3545'])->addText('Traditional Vendor', ['bold' => true, 'color' => $this->white], ['alignment' => Jc::CENTER]);
        $table->addCell(4000, ['bgColor' => '28A745'])->addText('ZIMA Partnership', ['bold' => true, 'color' => $this->white], ['alignment' => Jc::CENTER]);

        $comparisons = [
            ['You pay everything', 'We co-invest 50/50'],
            ['Vendor delivers & exits', 'We stay and grow'],
            ['One-sided risk', 'Shared risk & reward'],
            ['Fixed scope', 'Flexible, evolving'],
            ['You own alone', 'We build together'],
        ];

        foreach ($comparisons as $comp) {
            $table->addRow();
            $table->addCell(4000, ['bgColor' => 'FFEEEE'])->addText($comp[0]);
            $table->addCell(4000, ['bgColor' => 'EEFFEE'])->addText($comp[1]);
        }

        // ===== PAGE 5: SUCCESS & CONTACT =====
        $section = $phpWord->addSection([
            'marginTop' => 1080,
            'marginBottom' => 1080,
            'marginLeft' => 1260,
            'marginRight' => 1260,
        ]);

        $section->addText('OUR SUCCESS TARGETS', ['bold' => true, 'size' => 20, 'color' => $this->primary]);
        $section->addText('What We Aim to Achieve Together', ['bold' => true, 'size' => 11, 'color' => $this->secondary]);
        $section->addTextBreak(1);

        $section->addListItem('Sustainable recurring revenue', 0);
        $section->addListItem('Thousands of active users', 0);
        $section->addListItem('40-60% operational efficiency gains', 0);
        $section->addListItem('High customer satisfaction (above industry NPS)', 0);
        $section->addListItem('Systems built to scale 10x and beyond', 0);

        $section->addTextBreak(2);

        $section->addText('GET IN TOUCH', ['bold' => true, 'size' => 16, 'color' => $this->secondary], ['alignment' => Jc::CENTER]);
        $section->addTextBreak(1);

        $section->addText('Email: partnerships@zima.co.tz', [], ['alignment' => Jc::CENTER]);
        $section->addText('Phone: +255 69 241 0353', [], ['alignment' => Jc::CENTER]);
        $section->addText('Website: https://zima.co.tz', [], ['alignment' => Jc::CENTER]);
        $section->addText('Location: Makongo, Near Ardhi University, Kinondoni, Dar es Salaam, Tanzania', [], ['alignment' => Jc::CENTER]);

        $section->addTextBreak(2);

        $section->addText('NEXT STEPS', ['bold' => true, 'size' => 16, 'color' => $this->primary]);
        $section->addText('1. Send us your idea or project brief');
        $section->addText('2. Schedule a strategy discussion');
        $section->addText('3. Meet the team and define the partnership');

        $section->addTextBreak(1);

        $section->addText('CONFIDENTIALITY GUARANTEED', ['bold' => true, 'color' => $this->secondary]);
        $section->addText('All discussions are treated with strict confidentiality. NDAs can be signed before detailed disclosures.');

        $section->addTextBreak(2);

        $section->addText('Innovation succeeds when vision meets execution.', ['italic' => true, 'color' => $this->primary], ['alignment' => Jc::CENTER]);
        $section->addText('Let\'s build meaningful businesses together.', ['bold' => true, 'size' => 14, 'color' => $this->secondary], ['alignment' => Jc::CENTER]);
        $section->addTextBreak(1);
        $section->addText('- ZIMA Solutions Limited', ['bold' => true, 'color' => $this->primary], ['alignment' => Jc::CENTER]);

        $section->addTextBreak(2);
        $section->addText('TIN: 181-314-605 | Registered in Tanzania', ['size' => 9, 'color' => $this->gray], ['alignment' => Jc::CENTER]);
        $section->addText('Build the Future. Together.', ['bold' => true, 'color' => $this->secondary], ['alignment' => Jc::CENTER]);

        // Save files
        $filename = 'ZIMA-Partnership-Proposal.docx';

        if (!file_exists(public_path('documents'))) {
            mkdir(public_path('documents'), 0755, true);
        }

        $publicPath = public_path('documents/' . $filename);
        $docsPath = base_path('docs/' . $filename);

        $objWriter = IOFactory::createWriter($phpWord, 'Word2007');
        $objWriter->save($publicPath);
        $objWriter->save($docsPath);

        return response()->download($publicPath, $filename);
    }
}
