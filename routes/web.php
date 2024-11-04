<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\QuestionerController;

Route::get('/', function () {
    return redirect('/home');
});
// Auth::routes();


// Rute untuk halaman checkout yang hanya dapat diakses oleh pengguna yang terautentikasi
Route::middleware('auth')->group(function () {
    Route::get('/checkout', [CheckoutController::class, 'show'])->name('checkout.show');
    Route::post('/checkout', [CheckoutController::class, 'process'])->name('checkout.process');
});

// Rute untuk yang dapat mengakses Report hanya manajer
Route::middleware('role:manager')->group(function () {
    Route::get('/report', [ReportController::class, 'index'])->name('report.index');
});

// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

// Rute bagian Home
Route::get('/home', [HomeController::class, 'index'])->name('home.index');

// Rute untuk bagian register 
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register.index');
Route::post('register', [RegisterController::class, 'register'])->name('register');

// (link Route::get('login' ) sedangkan ( Variable ->name('login'))
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard', function () {
    // Hanya pengguna yang terautentikasi yang dapat mengakses halaman ini
})->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/questioners', [QuestionerController::class, 'index'])->name('questioners.index');
    Route::get('/questioners/create', [QuestionerController::class, 'create'])->name('questioners.create');
    Route::post('/questioners', [QuestionerController::class, 'store'])->name('questioners.store');
});
