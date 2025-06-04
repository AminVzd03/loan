<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3f37c9;
            --light-color: #f8f9fa;
            --dark-color: #212529;
            --success-color: #4cc9f0;
            --border-radius: 12px;
            --box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f5f7ff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .login-container {
            background-color: white;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            width: 100%;
            max-width: 420px;
            padding: 40px;
            text-align: center;
        }

        .logo {
            margin-bottom: 30px;
        }

        .logo img {
            height: 50px;
        }

        h1 {
            color: var(--dark-color);
            margin-bottom: 10px;
            font-size: 24px;
            font-weight: 600;
        }

        .subtitle {
            color: #6c757d;
            margin-bottom: 30px;
            font-size: 14px;
        }

        .input-group {
            margin-bottom: 20px;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: var(--dark-color);
            font-size: 14px;
            font-weight: 500;
        }

        input {
            width: 100%;
            padding: 14px;
            border: 1px solid #e0e0e0;
            border-radius: var(--border-radius);
            font-size: 14px;
            transition: all 0.3s;
        }

        input:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.2);
        }

        .forgot-password {
            text-align: right;
            margin-bottom: 20px;
        }

        .forgot-password a {
            color: #6c757d;
            font-size: 13px;
            text-decoration: none;
            transition: color 0.3s;
        }

        .forgot-password a:hover {
            color: var(--primary-color);
        }

        .login-btn {
            width: 100%;
            padding: 14px;
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: var(--border-radius);
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-bottom: 20px;
        }

        .login-btn:hover {
            background-color: var(--secondary-color);
        }

        .divider {
            display: flex;
            align-items: center;
            margin: 20px 0;
            color: #6c757d;
            font-size: 12px;
        }

        .divider::before, .divider::after {
            content: "";
            flex: 1;
            border-bottom: 1px solid #e0e0e0;
        }

        .divider::before {
            margin-right: 10px;
        }

        .divider::after {
            margin-left: 10px;
        }

        .signup-btn {
            width: 100%;
            padding: 14px;
            background-color: white;
            color: var(--primary-color);
            border: 1px solid var(--primary-color);
            border-radius: var(--border-radius);
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
        }

        .signup-btn:hover {
            background-color: #f0f4ff;
        }

        .country-code {
            display: flex;
            align-items: center;
            border: 1px solid #e0e0e0;
            border-radius: var(--border-radius);
            overflow: hidden;
        }

        .country-code select {
            padding: 14px;
            border: none;
            border-right: 1px solid #e0e0e0;
            background-color: white;
            font-size: 14px;
            appearance: none;
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 10px center;
            background-size: 16px;
            padding-right: 30px;
        }

        .country-code select:focus {
            outline: none;
        }

        .country-code input {
            border: none;
            border-radius: 0;
        }

        @media (max-width: 480px) {
            .login-container {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
<div class="login-container">
    <div class="logo">
        <!-- Replace with your logo -->
        <svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#4361ee" stroke-width="2"/>
            <path d="M12 16V16.01M12 8V12" stroke="#4361ee" stroke-width="2" stroke-linecap="round"/>
        </svg>
    </div>

    <h1>Welcome back</h1>
    <p class="subtitle">Please enter your details to sign in</p>

    <form action="" method="post">
        @csrf
        <div class="input-group">
            <label for="phone">Phone Number</label>
            <div class="country-code">
                <select id="country-code">
                    <option value="+1">+1 (US)</option>
                    <option value="+44">+44 (UK)</option>
                    <option value="+98">+98 (IR)</option>
                    <option value="+91">+91 (IN)</option>
                    <option value="+86">+86 (CN)</option>
                </select>
                <input type="tel" id="phone" placeholder="Enter your phone number" required>
            </div>
        </div>

        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" id="password" placeholder="Enter your password" required>
        </div>

        <button type="submit" class="login-btn">Sign In</button>

        <div class="divider">or</div>


    </form>
    <a href="{{route('register-page')}}"> <button type="submit" class="signup-btn">Sign Up</button></a>
</div>
</body>
</html>
