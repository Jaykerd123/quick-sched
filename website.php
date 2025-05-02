<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">

    <!-- CSS -->
    <style> 
        body {
            background: url('images/bg-web.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50vh;
        }

        .child-login-container-right {
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .child-login-container-right p {
            color: rgba(1, 1, 1, 0.79);
        }

        button {
            height: 60px;
            width: 30%;
            border-radius: 30px;
            border: 2px solid blue;

            border: none;
            
            background-color: blue;
            color: white;
            font-weight: bold;
            box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.5);
        }

        button:hover {
            transform: scale(1.03);
        }
        
        a {
            color: rgba(17, 36, 252, 0.79);
            font-weight: bold;
        }

        a:hover {
            transform: scale(1.03);
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- LOGIN CONTAINER -->
    <div id="login-container">
        <!-- LEFT CONTAINER -->
        <div class="child-login-container-left">
            <img id="quicksched_logo" src="images/quicksched_logo.png" alt="logo">
            <p id="welcome-greeting">Hello, 
            <br><span style="font-size: 40px;">Welcome</span>
            </p>
            <p style="color: rgba(43, 42, 42, 0.642);
                      margin-left: 25px;">Quick Scheduling right at your fingertips</p>
        </div>
        <!-- RIGHT CONTAINER -->
        <div class="child-login-container-right">

            <h1>Welcome to QuickShed</h1>

            <p>Your go-to spot for fast and secure access.
                <br>Log in to continue or create an account to get started!
            </p>
            <br>
            <button onclick="window.location.href='signup.php'">Get started</button>
            <p>or</p>
            <a href="login-user.php">Login here</a>
            
        </div>
    </div>
</body>
</html>