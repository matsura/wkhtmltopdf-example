<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PDF;

class PdfController extends Controller
{
    
    public function test()
    {
        $pdf = PDF::loadView('welcome');
        return $pdf->download('welcome.pdf');
    }
}
