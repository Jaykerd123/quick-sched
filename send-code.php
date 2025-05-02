<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Make sure path is correct

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $appointment_id = $_POST["appointment_id"];
    $status = $_POST["status"];
    $doctor_notes = isset($_POST["doctor_notes"]) ? $_POST["doctor_notes"] : "";

    $conn = new mysqli("localhost", "root", "", "system_db");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Use prepare safely
    if ($status == "accepted") {
        $sql = "UPDATE appointments SET status = ?, confirmed_at = NOW(), doctor_notes = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssi", $status, $doctor_notes, $appointment_id);
    } else {
        $sql = "UPDATE appointments SET status = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $status, $appointment_id);
    }

    if ($stmt->execute()) {
        // Get email info from appointment record
        $result = $conn->query("SELECT email, preferred_doctor, preferred_date, preferred_time FROM appointments WHERE id = $appointment_id");

        if ($result && $row = $result->fetch_assoc()) {
            $email = $row['email'];
            $doctor = $row['preferred_doctor'];
            $date = $row['preferred_date'];
            $time = $row['preferred_time'];
            $subject = "Appointment " . ucfirst($status);
            $body = "
                <p>Hello,</p>
                <p>Your appointment with <strong>Dr. $doctor</strong> on <strong>$date</strong> at <strong>$time</strong> has been <strong>$status</strong>.</p>
                " . ($doctor_notes ? "<p><strong>Doctor's Note:</strong> $doctor_notes</p>" : "") . "
                <p>Thank you for using our system.</p>
            ";

            // Send using PHPMailer
            $mail = new PHPMailer(true);
            try {
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'jaykerd123@gmail.com';
                $mail->Password = 'xavx uion mxzl askk'; // App password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;

                $mail->setFrom('jaykerd123@gmail.com', 'Appointment System');
                $mail->addAddress($email);

                $mail->isHTML(true);
                $mail->Subject = $subject;
                $mail->Body = $body;

                $mail->send();
                echo "<script>alert('Appointment $status and email sent successfully!'); window.location.href='index-doctor.php';</script>";
            } catch (Exception $e) {
                echo "<script>alert('Appointment updated, but email failed: {$mail->ErrorInfo}'); window.location.href='index-doctor.php';</script>";
            }
        } else {
            echo "<script>alert('Appointment updated, but failed to fetch patient email.'); window.location.href='index-doctor.php';</script>";
        }
    } else {
        echo "<script>alert('Error updating appointment.'); window.history.back();</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
