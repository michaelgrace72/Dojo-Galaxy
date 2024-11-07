<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

        .login-container {
            background-color: #232222;
            padding: 40px;
            border-radius: 8px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .login-container h2 {
            color: #9C2327;
            text-align: center;
            margin-bottom: 20px;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            background-color: #F2F1EF;
            border: none;
            border-radius: 4px;
            color: #232222;
        }

        .login-container button {
            width: 100%;
            padding: 12px;
            background-color: #9C2327;
            color: #F2F1EF;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        .login-container button:hover {
            background-color: #B62B30;
        }

        .login-container .link {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #9C2327;
            text-decoration: none;
        }

        .login-container .link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input type="text" name="email" placeholder="Email" required autofocus>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
            <a href="{{ route('register') }}" class="link">Don't have an account? Register</a>
        </form>
    </div>
</body>
</html>
