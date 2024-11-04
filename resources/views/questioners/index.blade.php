@extends('layouts.app')

@section('content')
<!-- Header -->
 <style>
    /* Global Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif;
    background: linear-gradient(to bottom, #e0f7fa, #ffffff);
    color: #333;
    line-height: 1.6;
    overflow-x: hidden;
}

.container {
    width: 90%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

/* Header */
header, .container-header {
    background-color: #ffffff;
    padding: 20px 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    position: fixed;
    width: 100%;
    top: 0;
    z-index: 1000;
}

.logo img {
    max-height: 30px;
}

nav ul {
    list-style: none;
    display: flex;
    gap: 20px;
}

nav ul li a {
    text-decoration: none;
    color: #333;
    font-weight: bold;
    transition: color 0.3s ease;
}

nav ul li a:hover {
    color: #28a745;
}

/* Buttons */
.btn {
    padding: 10px 20px;
    border-radius: 5px;
    font-size: 14px;
    text-decoration: none;
    display: inline-block;
}

.btn-login {
    background-color: #ffffff;
    color: #333;
    border: 1px solid #ddd;
}

.btn-name {
    background-color: #28a745;
    color: #333;
}

.btn-signup {
    background-color: #28a745;
    color: white;
    border: none;
}

.btn-signup:hover {
    background-color: #218838;
}

.btn-primary {
    background-color: #28a745;
    color: white;
    border: none;
}

.btn-primary:hover {
    background-color: #218838;
}

.btn-home {
    background-color: #007bff;
    border-color: #007bff;
    color: #ffffff;
}

.btn-home:hover {
    background-color: #0056b3;
    border-color: #004085;
}

/* Hero Section */
.hero {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 120px 0 60px;
    background-image: url('https://i0.wp.com/muhammadiyah.or.id/wp-content/uploads/2023/07/gedung-UMY.jpg?fit=1024%2C500&ssl=1');
    background-size: cover;
    background-position: center;
    margin-top: 100px;
}

.hero-content {
    max-width: 600px;
}

.hero-content h1 {
    font-size: 48px;
    font-weight: bold;
    margin-bottom: 20px;
    line-height: 1.2;
}

.hero-content p {
    font-size: 18px;
    margin-bottom: 30px;
    color: #555;
}

.hero-image {
    position: relative;
}

.hero-image img {
    max-width: 100%;
    height: auto;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.info-box {
    position: absolute;
    bottom: -20px;
    right: 30px;
    background-color: white;
    padding: 10px 20px;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.info-box p {
    margin: 0;
    font-weight: bold;
    color: #28a745;
}

/* Features */
.features {
    text-align: center;
    padding: 60px 0;
    background-color: #f8f9fa;
}

.features h2 {
    font-size: 32px;
    margin-bottom: 10px;
    color: #333;
}

.features p {
    font-size: 18px;
    margin-bottom: 40px;
    color: #777;
}

.features-content {
    display: flex;
    justify-content: center;
    gap: 40px;
}

.feature-item {
    background-color: #ffffff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    width: 300px;
    text-align: center;
    transition: transform 0.3s ease;
}

.feature-item:hover {
    transform: translateY(-10px);
}

.feature-item img {
    width: 50px;
    margin-bottom: 20px;
}

.feature-item h3 {
    font-size: 20px;
    margin-bottom: 15px;
    color: #333;
}

.feature-item p {
    font-size: 16px;
    margin-bottom: 20px;
    color: #555;
}

.btn-secondary {
    background-color: #6c757d;
    color: white;
    border: none;
    padding: 10px 20px;
    text-decoration: none;
    display: inline-block;
    border-radius: 5px;
    font-size: 14px;
    transition: background-color 0.3s ease;
}

.btn-secondary:hover {
    background-color: #5a6268;
}

/* About Section */
.about {
    padding: 60px 0;
    text-align: center;
    background-color: #ffffff;
}

.about-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
    max-width: 90%;
    margin: 0 auto;
}

.about-text {
    flex: 1;
    max-width: 600px;
}

.about-text h2 {
    font-size: 32px;
    margin-bottom: 20px;
    color: #333;
}

.about-text p {
    font-size: 16px;
    line-height: 1.8;
    color: #555;
}

.about-image {
    flex: 1;
    text-align: right;
}

.about-image img {
    max-width: 100%;
    height: auto;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba
}

/* conteiner */
/* Container Questioner */
.container-questioner {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 80vh; /* Minimum height to keep it centered on larger screens */
    padding: 20px;
    background-color: #f8f9fa; /* Light grey background for contrast */
    border-radius: 8px; /* Rounded corners for a modern look */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Soft shadow for depth */
}

.login-box {
    background-color: #ffffff; /* White background for the box */
    border-radius: 8px; /* Rounded corners for the box */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Soft shadow for depth */
    padding: 20px;
    width: 100%;
    max-width: 600px; /* Maximum width for the login box */
    text-align: center; /* Center text inside the box */
}

.login-header {
    color: #28a745; /* Green color for the header */
    margin-bottom: 20px;
    font-size: 24px; /* Slightly larger font size for emphasis */
}

.ul-question {
    list-style-type: none; /* Remove default list styling */
    padding: 0;
}

.ul-question li {
    background-color: #ffffff; 
    margin-top: 12px;
    margin-bottom: 10px; 
    padding: 15px; 
    border-radius: 8px; 
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); 
    font-size: 16px; 
    color: #333; 
}

.btn-primary,
.btn-home {
    display: inline-block;
    margin: 10px 5px; /* Margin around buttons */
}

/* Button styles */
.btn-square {
    display: inline-block;
    width: 100px; /* Fixed width for square shape */
    height: 100px; /* Fixed height for square shape */
    text-align: center;
    line-height: 100px; /* Vertically center text */
    border-radius: 8px; /* Rounded corners for the button */
    font-size: 16px; /* Font size for readability */
    color: white; /* Text color */
    font-weight: bold;
    text-decoration: none;
    transition: background-color 0.3s ease, transform 0.3s ease; /* Smooth transitions */
}

.btn-add-question {
    background-color: #28a745; /* Green background */
    border-color: #28a745;
    color: #ffffff;
    padding: 10px 15px;
    border-radius: 4px;
    width: 100%;
    text-align: center;
    font-size: 1rem;
    margin-top: 10px; /* Jarak atas tombol */
}

.btn-add-question:hover {
    background-color: #218838; /* Darker green on hover */
}

.btn-back-home {
    background-color: #dc3545; /* Red background */
    border-color: #28a745;
    color: #ffffff;
    padding: 10px 15px;
    border-radius: 4px;
    width: 100%;
    text-align: center;
    font-size: 1rem;
    margin-top: 10px; /* Jarak atas tombol */
}

.btn-back-home:hover {
    background-color: #c82333; /* Darker red on hover */
}

 </style>
<header>
    <div class="container-header">
        <div class="logo">
            <img src="{{ asset('umy.png') }}" alt="University Logo">
        </div>
        <nav>
            <ul>
                <li><a href="/home">Home</a></li>
                <li><a href="/questioners">Kuesioner</a></li>
                <li><a href="#">Kontak</a></li>
            </ul>
        </nav>
        @guest
        <div class="auth-buttons">
            <a href="/login" class="btn btn-login">Login</a>
            <a href="/register" class="btn btn-signup">Sign Up</a>
        </div>
        @else
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        <div class="auth-buttons">
            <a href="#" class="btn btn-name">{{ Auth::user()->name }}</a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" class="btn btn-signup">
                {{ __('Logout') }}
            </a>
        </div>
        @endguest
    </div>
</header>

<div class="container-questioner">
    <div class="login-box">
        <h1 class="login-header">Your Questions</h1>
        <a href="{{ route('questioners.create') }}" class="btn-add-question">Add Question</a>
        <a href="{{ url('/home') }}" class="btn-back-home">Back to Home</a>

        <ul class="ul-question">
            @forelse ($questioners as $questioner)
                <li>{{ $questioner->question }}</li>
            @empty
                <li>No questions found.</li>
            @endforelse
        </ul>
    </div>
</div>
@endsection
