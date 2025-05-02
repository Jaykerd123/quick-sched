<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="style.css">

    <style> 
        body {
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
            <a href="login.php">
                <img id="back-button" src="images/arrow.png" alt="arrow" style="height: 25px; 
                                                           width: 25px;
                                                           margin-left: 95%;">
            </a>
            
            <!-- EMAIL CONFIRMATION -->
            <form method="POST" action="send-code.php">
                <p style="font-size: 25px; margin-top: 90px;" >Enter your email here</p>
                <input style="margin-bottom: 10px;" type="email" name="email" class="input-box" placeholder="Email" required><br>
                <button type="submit" style="margin-top: 0;
                               width: 85%;" id="login-btn" class="btn">SEND CODE</button>
            </form>
        </div>
    </div>
</body>
</html>