@extends('layouts.app')

@section('content')
<style>
    /* public/css/app.css */
/* body {
    background-color: #f0f2f5; 
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    margin: 0;
} */

.container {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100%;
    margin-top: 60px;
}

.login-box {
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    width: 100%;
    max-width: 400px; /* Lebar maksimal kotak pendaftaran */
}

.login-header {
    color: #28a745; /* Hijau untuk header */
    text-align: center;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

.form-control {
    border-radius: 4px;
    border: 1px solid #ced4da;
    padding: 10px;
    width: 100%;
}

.form-control.is-invalid {
    border-color: #dc3545;
}

.invalid-feedback {
    color: #dc3545;
    font-size: 0.875rem;
}

.form-check {
    margin-bottom: 15px;
}

.form-check-label {
    margin-left: 5px;
}

.btn-primary {
    background-color: #28a745;
    border-color: #28a745;
    color: #ffffff;
    padding: 10px 15px;
    border-radius: 4px;
    width: 100%;
    text-align: center;
    font-size: 1rem;
    margin-top: 10px; /* Jarak atas tombol */
}

.btn-primary:hover {
    background-color: #218838;
    border-color: #1e7e34;
}

.btn-link {
    color: #007bff;
    text-decoration: none;
    display: block;
    text-align: center;
    margin-top: 10px; /* Jarak atas link */
}

.btn-link:hover {
    color: #0056b3;
    text-decoration: underline;
}
</style>
<div class="container">
    <div class="login-box">
        <h2 class="login-header">Daftar Akun Baru</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required>
                @error('name')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Alamat Email</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                @error('email')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Kata Sandi</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                @error('password')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <div class="form-check">
                    <input id="newsletter" type="checkbox" class="form-check-input" name="newsletter">
                    <label for="newsletter" class="form-check-label">Saya ingin menerima berita dan pembaruan.</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Daftar</button>
            <a href="{{ route('login') }}" class="btn btn-link">Sudah punya akun? Masuk di sini.</a>
        </form>
    </div>
</div>
@endsection
