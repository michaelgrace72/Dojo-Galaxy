<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: rgb(156,35,39);
            background: linear-gradient(145deg, rgba(156,35,39,1) 7%, rgba(35,34,34,1) 96%);
            color: #F2F1EF;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .register-container {
            background-color: #232222;
            padding: 40px;
            border-radius: 8px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .register-container h2 {
            color: #9C2327;
            text-align: center;
            margin-bottom: 20px;
        }

        .register-container input[type="text"],
        .register-container input[type="email"],
        .register-container input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            background-color: #F2F1EF;
            border: none;
            border-radius: 4px;
            color: #232222;
        }

        .register-container button {
            width: 100%;
            padding: 12px;
            background-color: #9C2327;
            color: #F2F1EF;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        .register-container button:hover {
            background-color: #B62B30;
        }

        .register-container .link {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #9C2327;
            text-decoration: none;
        }

        .register-container .link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2>Register</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <input type="text" name="name" placeholder="Name" required autofocus>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
            <button type="submit">Register</button>
            <a href="{{ route('login') }}" class="link">Already have an account? Login</a>
        </form>
    </div>
</body>
</html>
