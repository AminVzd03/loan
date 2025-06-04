<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Header</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }


        header {
            background-color: #ffffff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 0 2rem;
            height: 70px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: #333;
            text-decoration: none;
        }

        .user-section {
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #f0f2f5;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .user-avatar:hover {
            background-color: #e4e6e9;
        }

        .user-avatar i {
            color: #555;
            font-size: 1.2rem;
        }

        .logout-btn {
            padding: 0.5rem 1rem;
            background-color: #f0f2f5;
            border: none;
            border-radius: 6px;
            color: #333;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .logout-btn:hover {
            background-color: #e4e6e9;
        }

        .logout-btn i {
            font-size: 1rem;
        }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
<header>
    <a href="#" class="logo">YourLogo</a>

    <div class="user-section">
        <button class="logout-btn">
            <i class="fas fa-sign-out-alt"></i>
            Logout
        </button>

        <div class="user-avatar">
            <i class="fas fa-user"></i>
        </div>
    </div>
</header>


</body>
</html>
