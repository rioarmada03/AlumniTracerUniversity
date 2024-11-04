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

.login-container {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100%;
    margin-top: 100px; 
}

.login-box {
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    width: 100%;
    max-width: 400px; /* Lebar maksimal kotak login */
}

.login-header {
    color: #28a745; /* Hijau untuk header */
    text-align: center;
    margin-bottom: 20px;
}

.login-body {
    padding: 10px;
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
}

.btn-primary:hover {
    background-color: #218838;
    border-color: #1e7e34;
}

.btn-link {
    color: #007bff;
    text-decoration: none;
}

.btn-link:hover {
    color: #0056b3;
    text-decoration: underline;
}

</style>
<div class="login-container">
    <div class="login-box">
        <h2 class="login-header">{{ __('Login') }}</h2>

        <div class="login-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <label for="email">{{ __('Email Address') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus>
                    @error('email')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                    @error('password')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">{{ __('Login') }}</button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
