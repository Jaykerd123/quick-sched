<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- HEADER -->
    <nav>
        <div id="head-container">
            <div><img id="logo" src="images/quicksched_logo.png" alt="quicksched_logo"></div>
            <!-- OPTIONS -->
            <div id="header-navigation">
                <div class="header-option"><a href="#" class="hover-grow active">HOME</a></div>
                <div class="header-option"><a href="appointment-list.php" class="hover-grow">APPOINTMENTS</a></div>
                <div class="header-option"><a href="#calendar-nav" class="hover-grow">SCHEDULE</a></div>
                <div class="header-option"><a href="#" class="hover-grow">ABOUT</a></div>
                <div class="header-option"><a href="login.php" class="hover-grow">LOGOUT</a></div>
            </div>
        </div>
    </nav>

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