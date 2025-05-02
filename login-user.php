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

            <a href="website.php">
                <img id="back-button" src="images/arrow.png" alt="arrow" style="height: 25px; 
                                                           width: 25px;
                                                           margin-left: 95%;">
            </a>

            <p style="margin-top: 50px; text-align: center; font-weight: bold; font-size: 30px; color: blue;">LOGIN AS</p>
            <p style="text-align: center; color: rgb(104, 103, 103)">Choose your user and login QuickSched!</p>
            <br>
            <div id="user-container">
                <div id="user-container-left" onclick="window.location.href='login-doctor.php'">
                    <img src="images/admin.png" alt="">
                    <p>DOCTOR</p>
                </div>
                <div id="user-container-right" onclick="window.location.href='login.php'">
                    <img src="images/user.png" alt="">
                    <p>PATIENT</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>