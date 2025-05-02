<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            height: 50vh;
            margin-top: 150px;
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
                <div class="header-option"><a href="index.php" style="margin-left: 600px;" class="hover-grow">HOME</a></div>
            </div>
        </div>
    </nav>

    <div id="profile-container">
        <div id="profile-container-left">
            <img src="images/profile.png" style="height: 100px;" alt="profile">
            <h3>My profile</h3>
            
            <div style="display: flex; justify-content: space-between; width: 80%; font-weight: bold;"><p>Name</p><p style="color: rgba(0, 0, 0, 0.56);">Jake</p></div>
            <div style="display: flex; justify-content: space-between; width: 80%; font-weight: bold;"><p>Phone Number</p><p style="color: rgba(0, 0, 0, 0.56);">09979188231</p></div>
            <div style="display: flex; justify-content: space-between; width: 80%; font-weight: bold;"><p>Email</p><p style="color: rgba(0, 0, 0, 0.56);">jaykerd123@gmail.com</p></div>
        </div>
        <div id="profile-container-right">
            <div class="options" id="op-1"><img src="images/settings.png" alt="set"><p style="font-weight: bold;">Settings</p></div>
            <div class="options" id="op-2"><img src="images/help.png" alt="set"><p style="font-weight: bold;">Help</p></div>
            <div class="options" id="op-3"><img src="images/feedback.png" alt="set"><p style="font-weight: bold;">Feedback</p></div>
            <div onclick="window.location.href='login.php'" class="options" id="op-4"><img src="images/logout.png" alt="set"><p style="font-weight: bold;">Logout</p></div>
        </div>
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