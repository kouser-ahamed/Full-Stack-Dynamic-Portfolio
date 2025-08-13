<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Portfolio Admin</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        body {
            min-height: 100dvh;
            height: 100dvh;
            background: linear-gradient(135deg, #007bff 0%, #6a82fb 100%);
            font-family: 'Segoe UI', Arial, sans-serif;
        }
        .auth-outer {
            min-height: 100dvh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .auth-container {
            background: rgba(255,255,255,0.98);
            border-radius: 18px;
            box-shadow: 0 8px 32px rgba(34,45,50,0.18);
            padding: 56px 36px 36px 36px;
            width: 100%;
            max-width: 410px;
            min-width: 300px;
            text-align: center;
            position: relative;
            animation: fadeIn 0.7s cubic-bezier(.4,0,.2,1);
            margin: 24px;
        }
        @media (max-width: 480px) {
            .auth-container {
                padding: 32px 10px 24px 10px;
                min-width: unset;
                max-width: 98vw;
            }
        }
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .auth-container h2 {
            font-weight: 800;
            color: #222d32;
            margin-bottom: 28px;
            letter-spacing: 1px;
            font-size: 2rem;
        }
        .auth-container .icon {
            font-size: 2.5rem;
            color: #007bff;
            margin-bottom: 18px;
        }
        .auth-container input {
            width: 100%;
            padding: 13px 16px;
            margin-bottom: 18px;
            border: 1.5px solid #eaeaea;
            border-radius: 8px;
            font-size: 1.08rem;
            background: #f8fafc;
            color: #222d32;
            transition: border 0.2s, box-shadow 0.2s;
            box-shadow: 0 1px 2px rgba(34,45,50,0.03);
        }
        .auth-container input:focus {
            border: 1.5px solid #007bff;
            outline: none;
            box-shadow: 0 0 0 2px #e3eaff;
        }
        .auth-container button {
            background: linear-gradient(90deg, #007bff 0%, #6a82fb 100%);
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 13px 0;
            width: 100%;
            font-size: 1.12rem;
            font-weight: 700;
            cursor: pointer;
            transition: background 0.2s, box-shadow 0.2s;
            box-shadow: 0 2px 8px rgba(106,130,251,0.10);
        }
        .auth-container button:hover {
            background: linear-gradient(90deg, #0056b3 0%, #6a82fb 100%);
            box-shadow: 0 4px 16px rgba(106,130,251,0.18);
        }
        .auth-container .error {
            color: #d9534f;
            margin-bottom: 12px;
            font-size: 0.98rem;
        }
        .auth-container .link {
            display: block;
            margin-top: 18px;
            color: #007bff;
            text-decoration: none;
            font-size: 0.98rem;
            transition: color 0.2s;
        }
        .auth-container .link:hover {
            color: #0056b3;
            text-decoration: underline;
        }
    </style>
</head>
    <body>
    <div class="auth-outer">
        <div class="auth-container">
        <div class="icon">
            <svg width="40" height="40" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="20" cy="20" r="20" fill="#e3eaff"/><path d="M20 21.5c2.485 0 4.5-2.015 4.5-4.5s-2.015-4.5-4.5-4.5-4.5 2.015-4.5 4.5 2.015 4.5 4.5 4.5Zm0 2c-3.038 0-9 1.522-9 4.5V31h18v-3c0-2.978-5.962-4.5-9-4.5Z" fill="#007bff"/></svg>
        </div>
        <h2>Login</h2>
        @if ($errors->any())
            <div class="error">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <input type="email" placeholder="Enter Email" name="email" required autofocus>
            <input type="password" name="password" placeholder="Enter Password" required>
            <button type="submit">Login</button>
        </form>
        <a class="link" href="{{ route('register') }}">Don't have an account? Register</a>
        </div>
    </div>
</body>
</html>
