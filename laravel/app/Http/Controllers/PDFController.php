<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use PDF;
use App\employee;
class PDFController extends Controller
{
    public function getPDF()
    {
        $users=employee::all();
        $pdf=PDF::loadView('pdf.profile', ['users'=>$users]);
        return $pdf->stream('profile.pdf');
    }
}
