<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Welcome to Majenk',
            'date' => date('Y/m/d')
        ];

        // $pdf = PDF::loadView('testPDF', $data)->save('assets/pdf/SDI-Biznet Data Center Authorization Form.pdf');
        $pdf = PDF::loadView('testPDF', $data);

        return $pdf->stream('SDI-Biznet Data Center Authorization Form.pdf');
    }
}
