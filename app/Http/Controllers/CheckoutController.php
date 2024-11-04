<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function __construct()
    {
        // Menggunakan middleware auth untuk semua metode di controller ini
        $this->middleware('auth');
    }

    public function show()
    {
        // Tampilkan halaman checkout
        return view('checkout');
    }

    public function process(Request $request)
    {
        // Proses checkout
        // ...
    }
}




