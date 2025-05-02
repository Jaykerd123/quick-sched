<?php
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

// Query all appointments
$sql = "SELECT * FROM appointments";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Appointment List</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            margin-top: 120px;
            height: 80vh;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #008cba;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        h1 {
            font-family: sans-serif;
        }

    </style>
</head>
<body>
    <!-- HEADER -->
    <nav>
        <div id="head-container">
            <div><img id="logo" src="images/quicksched_logo.png" alt="quicksched_logo"></div>
            <!-- OPTIONS -->
            <div id="header-navigation">
                <div class="header-option"><a href="index-doctor.php" class="hover-grow">HOME</a></div>
                <div class="header-option"><a href="#" class="hover-grow active">APPOINTMENTS</a></div>
                <div class="header-option"><a href="#calendar-nav" class="hover-grow">SCHEDULE</a></div>
                <div class="header-option"><a href="#" class="hover-grow">ABOUT</a></div>
                <div class="header-option"><a href="login.php" class="hover-grow">LOGOUT</a></div>
            </div>
        </div>
    </nav>

    <div id="table-list">

        <h1>All Appointments</h1>
        <table border="1" cellpadding="10">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Patient Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>DOB</th>
                    <th>Gender</th>
                    <th>Reason</th>
                    <th>Preferred Date</th>
                    <th>Preferred Time</th>
                    <th>Preferred Doctor</th>
                    <th>Conditions</th>
                    <th>Medications</th>
                    <th>Allergies</th>
                    <th>Consent</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= $row["id"] ?></td>
                        <td><?= $row["first_name"] . " " . $row["last_name"] ?></td>
                        <td><?= $row["email"] ?></td>
                        <td><?= $row["phone"] ?></td>
                        <td><?= $row["dob"] ?></td>
                        <td><?= $row["gender"] ?></td>
                        <td><?= $row["reason"] ?></td>
                        <td><?= $row["preferred_date"] ?></td>
                        <td><?= $row["preferred_time"] ?></td>
                        <td><?= $row["preferred_doctor"] ?></td>
                        <td><?= $row["conditions"] ?></td>
                        <td><?= $row["medications"] ?></td>
                        <td><?= $row["allergies"] ?></td>
                        <td><?= $row["consent"] ? 'Yes' : 'No' ?></td>
                        <td><?= ucfirst($row["status"]) ?></td>
                        <td>
                            <?php if ($row["status"] == "pending"): ?>
                                <form method="post" action="update-status.php" style="display:inline;">
                                    <input type="hidden" name="appointment_id" value="<?= $row["id"] ?>">
                                    <input type="hidden" name="status" value="accepted">
                                    <button type="submit" style="background-color:green;color:white;border:none;padding:5px 10px;border-radius:5px;">Accept</button>
                                </form>

                                <form method="post" action="update-status.php" style="display:inline;">
                                    <input type="hidden" name="appointment_id" value="<?= $row["id"] ?>">
                                    <input type="hidden" name="status" value="declined">
                                    <button type="submit" style="background-color:red;color:white;border:none;padding:5px 10px;border-radius:5px;">Decline</button>
                                </form>
                            <?php else: ?>
                                <em><?= ucfirst($row["status"]) ?></em>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

    </div>

    <script src="index.js"></script>
    
    <script>
             const hamburger = document.getElementById("hamburger-menu");
            const dropdown = document.getElementById("hamburger-dropdown");

            hamburger.addEventListener("click", () => {
            dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
            });

            window.addEventListener("click", (event) => {
            if (!hamburger.contains(event.target) && !dropdown.contains(event.target)) {
                dropdown.style.display = "none";
            }
            });
    </script>

</body>
</html>

<?php
$conn->close();
?>
