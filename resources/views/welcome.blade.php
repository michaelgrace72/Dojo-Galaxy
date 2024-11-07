<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Reset styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            color: #fff;
            background: rgb(156,35,39);
background: linear-gradient(55deg, rgba(156,35,39,1) 7%, rgba(35,34,34,1) 96%);
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            padding: 20px 50px;
            background-color: #0d0d0d;
            align-items: center;
        }

        .navbar a.logo {
            font-size: 24px;
            font-weight: bold;
            color: #ff6600;
            text-decoration: none;
        }

        .navbar .nav-links a {
            margin: 0 15px;
            color: #fff;
            text-decoration: none;
            font-size: 16px;
        }

        .navbar .nav-links a:hover {
            color: #ff6600;
        }

        .navbar .auth-buttons a {
            margin: 0 10px;
            padding: 8px 15px;
            background-color: transparent;
            border: 1px solid #ff6600;
            color: #ff6600;
            border-radius: 5px;
            text-decoration: none;
        }

        .navbar .auth-buttons a:hover {
            background-color: #ff6600;
            color: #fff;
        }

        .navbar .contact-button {
            padding: 10px 20px;
            background-color: #ff6600;
            color: #fff;
            border-radius: 5px;
            text-decoration: none;
            margin-left: 10px;
        }

        .navbar .contact-button:hover {
            background-color: #ff8500;
        }

        .hero {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 50px;
            text-align: left;
            background: rgb(156,35,39);
            background: linear-gradient(145deg, rgba(156,35,39,1) 7%, rgba(35,34,34,1) 96%);
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 18px;
            color: #cccccc;
            max-width: 500px;
            margin-bottom: 30px;
        }

        .hero .cta-button {
            display: inline-block;
            padding: 15px 30px;
            background-color: #ff6600;
            color: #fff;
            font-size: 18px;
            border-radius: 5px;
            text-decoration: none;
        }

        .hero .cta-button:hover {
            background-color: #ff8500;
        }

        .hero-image {
            width: 50%;
            position: relative;
        }

        .hero-image img {
            width: 100%;
            border-radius: 10px;
        }

        .floating-cube {
            position: absolute;
            width: 50px;
            height: 50px;
            background-color: #9c2327;
            opacity: 0.8;
            transform: rotate(45deg);
            animation: float 3s infinite ease-in-out;
        }

        .floating-cube.white {
            background-color: #ffffff;
            opacity: 0.7;
        }

        .floating-cube:nth-child(1) { top: 20%; left: 10%; }
        .floating-cube:nth-child(2) { top: 40%; right: 15%; }
        .floating-cube:nth-child(3) { bottom: 30%; left: 5%; }
        .floating-cube:nth-child(4) { bottom: 10%; right: 20%; }

        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(45deg); }
            50% { transform: translateY(-20px) rotate(45deg); }
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <div class="navbar">
        <a href="#" class="logo">DOJO GALAXY</a>
        <div class="nav-links">
            <a href="#">SERVICES</a>
            <!-- <a href="#">SOLUTIONS</a> -->
            <a href="#">LOCATION</a>
            <!-- <a href="#">PORTFOLIO</a> -->
            <a href="#">INSIGHTS</a>
        </div>
        <div class="auth-buttons">
            <a href="/login">Login</a>
            <a href="/register">Register</a>
            <a href="#" class="contact-button">CONTACT US</a>
        </div>
    </div>

    <!-- Hero Section -->
    <div class="hero">
        <div>
            <h1>TOP KARATE DOJO IN YOUR AREA!</h1>
            <p>We train the strongest martial artists on the web! Our practice is designed for discipline, growth, and excellence.</p>
            <a href="#" class="cta-button">JOIN THE DOJO</a>


        </div>
        <div class="hero-image">
            <img src="https://pngimg.com/uploads/karate/karate_PNG121.png" alt="VR Person Placeholder">
            <div class="floating-cube"></div>
            <div class="floating-cube white"></div>
            <div class="floating-cube"></div>
            <div class="floating-cube white"></div>
        </div>
    </div>

</body>
</html>
