<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PdfMaker extends Controller
{
    public function gen()
    {
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML('<h1>Header without style</h1>');
        return $pdf->stream();
    }
}
