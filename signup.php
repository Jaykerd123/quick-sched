<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="style.css">

    <style> 
        body {
            background: url('images/bg-web.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50vh;
        }

        #back-button {
            height: 25px;
            width: 25px;
            margin-left: 95%;
            cursor: pointer;
            transition: transform 0.2s ease;
        }

        #back-button:hover {
            transform: scale(1.2); /* scales 20% bigger on hover */
        }
    </style>
</head>
<body>
    <div id="login-container">
        <div class="child-login-container-left">
            <img id="quicksched_logo" src="images/quicksched_logo.png" alt="logo">
            <p id="welcome-greeting">Hello, 
            <br><span style="font-size: 40px;">Welcome</span>
            </p>
            <p style="color: rgba(43, 42, 42, 0.642);
                      margin-left: 25px;">Quick Scheduling right at your fingertips</p>
        </div>

        

        <div class="child-login-container-right">
            <!-- X button -->
            <a href="website.php">
                <img id="back-button" src="images/arrow.png" alt="arrow" style="height: 25px; 
                                                           width: 25px;
                                                           margin-left: 95%;">
            </a>
            
            <!-- SIGNUP FORM -->
            <form method="POST" action="signup-validate.php">
                <p style="font-size: 30px; font-weight: bold;">CREATE ACCOUNT</p>
                <input type="name" name="name" class="input-box" placeholder="Full name" required><br>
                <input type="email" name="email" class="input-box" placeholder="Email address" required><br>
                <input type="password" name="password" class="input-box" placeholder="Password" required><br>
                <br>
                <button type="submit" style="margin-top: 0;
                               width: 85%;" id="login-btn">SIGNUP</button>
            </form>
        </div>
    </div>
</body>
</html>