<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Anda bisa menambahkan logika atau data yang diperlukan untuk dashboard di sini
        return view('/home');
    }
}

