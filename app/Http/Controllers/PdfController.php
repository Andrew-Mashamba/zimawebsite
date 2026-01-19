<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    /**
     * Generate Partnership Proposal PDF
     */
    public function partnershipProposal()
    {
        $pdf = Pdf::loadView('pdf.partnership-proposal');

        // Set paper size to A4
        $pdf->setPaper('a4', 'portrait');

        // Set options for better rendering
        $pdf->setOptions([
            'isHtml5ParserEnabled' => true,
            'isRemoteEnabled' => true,
            'defaultFont' => 'DejaVu Sans',
        ]);

        // Return the PDF for download
        return $pdf->download('ZIMA-Partnership-Proposal.pdf');
    }

    /**
     * Stream Partnership Proposal PDF (view in browser)
     */
    public function viewPartnershipProposal()
    {
        $pdf = Pdf::loadView('pdf.partnership-proposal');

        $pdf->setPaper('a4', 'portrait');

        $pdf->setOptions([
            'isHtml5ParserEnabled' => true,
            'isRemoteEnabled' => true,
            'defaultFont' => 'DejaVu Sans',
        ]);

        // Return the PDF to view in browser
        return $pdf->stream('ZIMA-Partnership-Proposal.pdf');
    }

    /**
     * Save Partnership Proposal PDF to storage
     */
    public function savePartnershipProposal()
    {
        $pdf = Pdf::loadView('pdf.partnership-proposal');

        $pdf->setPaper('a4', 'portrait');

        $pdf->setOptions([
            'isHtml5ParserEnabled' => true,
            'isRemoteEnabled' => true,
            'defaultFont' => 'DejaVu Sans',
        ]);

        // Save to public folder
        $filename = 'ZIMA-Partnership-Proposal.pdf';
        $path = public_path('documents/' . $filename);

        // Create documents directory if it doesn't exist
        if (!file_exists(public_path('documents'))) {
            mkdir(public_path('documents'), 0755, true);
        }

        $pdf->save($path);

        return response()->json([
            'success' => true,
            'message' => 'PDF saved successfully',
            'path' => '/documents/' . $filename,
            'full_path' => $path
        ]);
    }
}
