<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{

    public function index()
    {
        // Tampilkan laporan 
        return view('report');
    }
}
