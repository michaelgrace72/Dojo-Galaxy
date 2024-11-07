<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Your Site Title')</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: rgb(156,35,39);
            background: linear-gradient(145deg, rgba(156,35,39,1) 7%, rgba(35,34,34,1) 96%);
            color: #F2F1EF;
        }
        
        /* Navbar styles */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #232222;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .navbar a, .navbar .user-button {
            color: #F2F1EF;
            text-decoration: none;
            margin: 0 15px;
        }

        .navbar .user-button {
            background-color: #9C2327;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .navbar .user-button:hover {
            background-color: #B62B30;
        }

        .content {
            padding: 40px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-brand">
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        </div>
        
        <!-- User button only shows when logged in -->
        <div>
            @auth
                <a href="{{ route('dashboard') }}" class="user-button">User</a>
            @else
                <a href="{{ route('login') }}" class="user-button">Login</a>
            @endauth
        </div>
    </nav>

    <!-- Page Content -->
    <div class="content">
        @yield('content')
    </div>
</body>
</html>
