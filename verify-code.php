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
            <a href="login.php">
                <img id="back-button" src="images/arrow.png" alt="arrow" style="height: 25px; 
                                                           width: 25px;
                                                           margin-left: 95%;">
            </a>
            
            <!-- ENTER CODE -->
            <form method="POST" action="">
                <p style="font-size: 25px; margin-top: 90px;">Validate code</p>
                <input style="margin-bottom: 10px;" type="text" name="code" class="input-box" placeholder="XXXXX" required><br>
                <button type="submit" style="margin-top: 0; width: 85%;" id="login-btn" class="btn">CONFIRM</button>
            </form>
        </div>
    </div>
</body>
</html>

<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputCode = $_POST['code'];
    $email = $_SESSION['email_to_verify'];

    // Database connection
    $conn = new mysqli("localhost", "root", "", "system_db");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check code from DB
    $sql = "SELECT * FROM users WHERE email = ? AND verification_code = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $inputCode);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Success - optional: clear the code or update verification status
        $clearCode = $conn->prepare("UPDATE users SET verification_code = NULL WHERE email = ?");
        $clearCode->bind_param("s", $email);
        $clearCode->execute();

        echo "<script>
                alert('Code verified!');
                window.location.href = 'index.php';
              </script>";
    } else {
        echo "<script>
                alert('Invalid code. Try again.');
              </script>";
    }

    $stmt->close();
    $conn->close();
}
?>