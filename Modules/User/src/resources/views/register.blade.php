<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Futuristic Sign Up</title>
    <style>
        :root {
            --primary: #6e00ff;
            --secondary: #ff00a0;
            --accent: #00f0ff;
            --dark: #0a0a20;
            --light: #f0f0ff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, var(--dark), #1a1a3a);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: var(--light);
            overflow: hidden;
        }

        .container {
            position: relative;
            width: 100%;
            max-width: 500px;
            background: rgba(10, 10, 32, 0.8);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 0 30px rgba(110, 0, 255, 0.3);
            z-index: 1;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .container::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                to bottom right,
                transparent,
                transparent,
                transparent,
                var(--primary)
            );
            transform: rotate(30deg);
            z-index: -1;
            animation: animate 6s linear infinite;
        }

        .container::after {
            content: '';
            position: absolute;
            inset: 3px;
            border-radius: 18px;
            background: rgba(10, 10, 32, 0.9);
            z-index: -1;
        }

        @keyframes animate {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 2.5rem;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            font-weight: 800;
        }

        .input-group {
            position: relative;
            margin-bottom: 25px;
        }

        .input-group input {
            width: 100%;
            padding: 15px 20px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            font-size: 1rem;
            color: var(--light);
            outline: none;
            transition: all 0.3s ease;
        }

        .input-group input:focus {
            border-color: var(--accent);
            box-shadow: 0 0 10px rgba(0, 240, 255, 0.3);
        }

        .input-group label {
            position: absolute;
            top: 15px;
            left: 20px;
            color: rgba(255, 255, 255, 0.5);
            pointer-events: none;
            transition: all 0.3s ease;
        }

        .input-group input:focus + label,
        .input-group input:valid + label {
            top: -10px;
            left: 15px;
            font-size: 0.8rem;
            background: var(--dark);
            padding: 0 5px;
            color: var(--accent);
        }

        button {
            width: 100%;
            padding: 15px;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            border: none;
            border-radius: 10px;
            color: white;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        button:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(110, 0, 255, 0.3);
        }

        button:active {
            transform: translateY(0);
        }

        .floating-elements {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            pointer-events: none;
        }

        .floating-elements div {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            animation: float 15s linear infinite;
        }

        @keyframes float {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 1;
            }
            100% {
                transform: translateY(-1000px) rotate(720deg);
                opacity: 0;
            }
        }
    </style>
</head>
<body>
<div class="floating-elements">
    <div style="width: 50px; height: 50px; left: 10%; animation-delay: 0s;"></div>
    <div style="width: 80px; height: 80px; left: 25%; animation-delay: 2s; animation-duration: 20s;"></div>
    <div style="width: 30px; height: 30px; left: 70%; animation-delay: 4s;"></div>
    <div style="width: 60px; height: 60px; left: 80%; animation-delay: 0s; animation-duration: 25s;"></div>
    <div style="width: 40px; height: 40px; left: 40%; animation-delay: 6s;"></div>
    <div style="width: 70px; height: 70px; left: 60%; animation-delay: 8s;"></div>
</div>

<div class="container">
    <h1>Create Account</h1>
    <form action="{{route('register-submit')}}" method="POST" >
        <div class="input-group">
            <input type="text" id="name" required>
            <label for="name">Full Name</label>
        </div>

        <div class="input-group">
            <input type="tel" id="phone" required>
            <label for="phone">Phone Number</label>
        </div>

        <div class="input-group">
            <input type="email" id="email" required>
            <label for="email">Email Address</label>
        </div>

        <div class="input-group">
            <input type="password" id="password" required>
            <label for="password">Password</label>
        </div>

        <button type="submit">Sign Up</button>
    </form>
</div>
</body>
</html>
