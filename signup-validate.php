<?php
session_start();

$servername = "localhost";
$username = "root"; // default for local
$password = "";     // default for local
$dbname = "system_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // secure hash

// Insert
$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "<script>
            alert('Signup successful!');
            window.location.href = 'login.php';
          </script>";
} else {
    echo "<script>
            alert('User already exist! Try again...');
            window.location.href = 'signup.php';
          </script>";
}

$conn->close();
?>
