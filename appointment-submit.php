<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "system_db";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get data from form
    $first_name = $_POST['first-name'];
    $last_name = $_POST['last-name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $reason = $_POST['reason'];
    $preferred_date = $_POST['preferred-date'];
    $preferred_time = $_POST['preferred-time'];
    $preferred_doctor = $_POST['preferred-doctor'];
    $conditions = $_POST['conditions'];
    $medications = $_POST['medications'];
    $allergies = $_POST['allergies'];
    $consent = isset($_POST['consent']) ? 1 : 0;

    // SQL query to insert data
    $sql = "INSERT INTO appointments 
            (first_name, last_name, email, phone, dob, gender, reason, preferred_date, preferred_time, preferred_doctor, conditions, medications, allergies, consent)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepare statement
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssssssssi", $first_name, $last_name, $email, $phone, $dob, $gender, $reason, $preferred_date, $preferred_time, $preferred_doctor, $conditions, $medications, $allergies, $consent);

    // Execute the query
    if ($stmt->execute()) {
        echo "<script>alert('Appointment booked successfully!'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Error: Could not book appointment.'); window.history.back();</script>";
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?> 