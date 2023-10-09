<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

class PDFController extends Controller
{
    //
    public function generatepdf() {
        $user = Auth::user();
        $pdf = PDF::loadView('pdf.certificate', compact('user'));
        return $pdf->stream();
        // return $pdf->download('certificate.pdf');
    }

    public function formver(){
        $user = Auth::user();
        return view('pdf.certificate', compact('user'));
    }
}
