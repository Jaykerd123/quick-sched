<?php
    $conn = new mysqli("localhost", "root" , "", "signup");

    if($conn->connect_error) {
        die("error bruh" .$conn->connect_error);
    }

    $name = $_POST['name'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE name = ?");
    $stmt->bind_param("s", $name);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0) {
        echo'
         <form method="POST" action="update_password.php">
            <input type="hidden" name="name" value="' . htmlspecialchars($name) . '">
            <input type="password" name="new_password" placeholder="Enter new password" required>
            <button type="submit">Update Password</button>
        </form>
        ';
    }
    else {
        echo"User not found";
    }

    $stmt->close();
    $conn->close();
?>