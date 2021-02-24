<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use App\Models\Postulate;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function __construct()
    {
        /* Require haber una autenticacion para poder acceder */
        $this->middleware('auth');
    }
    public function PDF($id)
    {
        $candidatoReportPDF = Postulate::findOrFail($id);
        $pdf = PDF::loadView('report.pdf.usuaria', compact('candidatoReportPDF'))/* ->setPaper('a4', 'landscape')->setWarnings(false) */;
        return $pdf->download('report-of-' . $candidatoReportPDF->ficha . ' _ ' . time() . '.pdf');
    }
}
