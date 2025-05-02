<?php
// Start session to manage login state
session_start();

// Database connection
$conn = new mysqli('localhost', 'root', '', 'system_db');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$email = $_POST['email'];
$password = $_POST['password'];

// Check if the email exists in the database
$sql = "SELECT * FROM doctors WHERE email = '$email'";
$result = $conn->query($sql);

// If user found
if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();

    // Verify the password
    if (password_verify($password, $user['password'])) {
        // Password is correct, login the user
        $_SESSION['doctor_id'] = $user['id'];  // Store doctor ID in session
        $_SESSION['doctor_email'] = $user['email'];  // Store email in session

        // Redirect to the doctor's dashboard (or another page)
        header("Location: index-doctor.php");
        exit();
    } else {
        echo "<script>alert('Incorrect password!'); window.history.back();</script>";
    }
} else {
    echo "Doctor not found!";
}

$conn->close();
?>
