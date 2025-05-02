<?php
session_start(); // Start the session

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "system_db";

// Connect
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data
$email = $_POST['email'];
$password_input = $_POST['password'];

// Check if user exists
$sql = "SELECT * FROM users WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
    if (password_verify($password_input, $user['password'])) {
        // Set session variables upon successful login
        $_SESSION['user_id'] = $user['user_id'];  // Store user ID in session
        $_SESSION['email'] = $user['email'];      // Store email in session

        // Redirect to the index page after successful login
        header("Location: index.php");
        exit();
    } else {
        // Incorrect password
        echo "<script>
            alert('Incorrect password. Please try again.');
            window.history.back();
          </script>";
    }
} else {
    // User not found
    echo "<script>
            alert('User not found. Please try again.');
            window.history.back();
          </script>";
}

$stmt->close();
$conn->close();
?>
