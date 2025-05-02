<?php
$conn = new mysqli("localhost", "root", "", "signup");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$new_password = password_hash($_POST['new_password'], PASSWORD_DEFAULT);

$stmt = $conn->prepare("UPDATE users SET password = ? WHERE name = ?");
$stmt->bind_param("ss", $new_password, $name);

if ($stmt->execute()) {
    echo "Password updated successfully.";
} else {
    echo "Error updating password.";
}

$stmt->close();
$conn->close();
?>
