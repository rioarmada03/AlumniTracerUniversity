<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Alumni Tracer</title>
    <style>
        /* Reset default browser styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
    font-family: 'Arial', sans-serif;
    background: linear-gradient(to bottom, #e0f7fa, #ffffff); /* Gradasi dari hijau muda ke putih */
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

        header {
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

        .auth-buttons {
            display: flex;
            gap: 10px;
        }

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

        .hero {
            display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 120px 0 60px;
   /* background: linear-gradient(to right, #e0faf0, #ffffff); /* Gradasi dari hijau muda ke putih */
    margin-top: 100px;
            background-image: url('https://i0.wp.com/muhammadiyah.or.id/wp-content/uploads/2023/07/gedung-UMY.jpg?fit=1024%2C500&ssl=1');
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

        .btn-primary {
            background-color: #28a745;
            color: white;
            border: none;
        }
        
        .btn-primary:hover {
            background-color: #218838;
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

        .about {
            padding: 60px 0;
            text-align: center;
            background-color: #ffffff;
        }

        .about h2 {
            font-size: 32px;
            margin-bottom: 20px;
            color: #333;
        }

        .about p {
            font-size: 16px;
            line-height: 1.8;
            max-width: 800px;
            margin: 0 auto;
            color: #555;
        }

        .about img {
            margin-top: 40px;
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .stats {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            padding: 40px 0;
            background-color: #f0f5f7;
            color: #333;
        }

        .stat-item {
            text-align: center;
            flex: 1;
            min-width: 150px;
            max-width: 200px;
            margin: 0 10px;
        }

        .stat-item h3 {
            font-size: 32px;
            margin-bottom: 10px;
            color: #28a745;
        }

        .stat-item p {
            font-size: 16px;
            color: #555;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
            position: relative;
            width: 100%;
            bottom: 0;
        }

        footer p {
            margin: 0;
        }

        @media (max-width: 768px) {
            .hero {
                flex-direction: column;
                text-align: center;
            }

            .hero-content, .hero-image {
                width: 100%;
            }

            .features-content {
                flex-direction: column;
                gap: 20px;
            }

            .stats {
                flex-direction: column;
                align-items: center;
            }

            .stat-item {
                margin-bottom: 20px;
            }
        }
        .container-header {
            max-width: 100%;
            display: flex;
            justify-content: space-between; /* Positions the elements at both ends */
            align-items: center; /* Centers elements vertically */
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }
        .about {
            padding: 60px 0;
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
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 768px) {
            .about-container {
                flex-direction: column;
                text-align: center;
            }

            .about-image {
                margin-top: 20px;
                text-align: center;
            }
        }
        .about-image img {
            max-width: 300px;
            height: auto;
            border-radius: 50%; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <!-- Header -->
   <!-- Header -->
   <header>
        <div class="container-header">
                <div class="logo">
                <img src="{{asset('umy.png')}}" alt="University Logo">
            </div>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
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

    <!-- Hero Section -->
    <section class="hero" >
        <div class="container">
            <div class="hero-content" style="color:white">
                <h1>Empowering Alumni With The University Alumni Tracer</h1>
                <p style="color:white">Track the success of our graduates and stay connected with the University Alumni Tracer Management Information System.</p>
                <a href="#" class="btn btn-primary" >Learn More</a>
            </div>
            <div class="hero-image">
                <!-- <img src="{{asset('.jpg')}}" alt="Hero Image"> -->
                <div class="info-box">
                    <p>50%<br>Yearly Growth</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <h2>Apa yang akan kamu dapatkan di Tracer Study ?</h2>
            <p>Start filling out the questionnaire and create your CV easily</p>
            <div class="features-content">
                <div class="feature-item">
                    <img src="{{asset('questioner.png')}}" alt="Data Kuesioner">
                    <h3>Data Kuesioner</h3>
                    <p>Manage your profile after departure from university</p>
                    <a href="#" class="btn btn-secondary">Get Started</a>
                </div>
                <div class="feature-item">
                    <img src="{{asset('cv.png')}}" alt="CV Builder">
                    <h3>CV Builder</h3>
                    <p>Priority support and multi-user access to maximize your productivity.</p>
                    <a href="#" class="btn btn-secondary">Get Started</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <!-- About Section -->
    <section class="about">
        <div class="about-container">
            <div class="about-text">
                <h2>Career Development Center UMY</h2>
                <p>The distribution of data repository information combines recruitment, skill improvement activities, career coaching, alumni tracking, graduate career updates, and graduate satisfaction surveys...</p>
                <p>In addition, CDC UMY conducts tracking of alumni to obtain information about their success after graduation and conducts surveys to obtain feedback for future UMY graduates in the job market. Finally, CDC UMY holds FGDs with graduates users such as the business world, and industries to share insights and competencies together. With the cooperation of the Career Development Center UMY, UMY students and alumni can better prepare and develop their future careers.</p>
            </div>
            <div class="about-image">
                <img src="{{asset('1.jpg')}}" alt="Career Development Center Image">
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <!-- Stats Section -->
    <section class="stats">
        <div class="stat-item">
                <h3>25%</h3>
                <p>Tracking the Pulse of Employer Needs</p>
            </div>
            <div class="stat-item">
                <h3>120</h3>
                <p>Employer Engagements</p>
            </div>
            <div class="stat-item">
                <h3>120</h3>
                <p>Services Rendered</p>
            </div>
            <div class="stat-item">
                <h3>120</h3>
                <p>CV Pool Power</p>
            </div>
            <div class="stat-item">
                <h3>120+</h3>
                <p>Opportunities Maximized</p>
            </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2024 University Alumni Tracer. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
