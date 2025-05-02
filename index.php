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
                <div class="header-option"><a href="#doctor-nav" class="hover-grow">DOCTORS</a></div>
                <div class="header-option"><a href="#calendar-nav" class="hover-grow">SCHEDULE</a></div>
                <div class="header-option"><a href="#service-nav" class="hover-grow">SERVICES</a></div>
                <div class="header-option"><a href="profile.php" class="hover-grow">PROFILE</a></div>
            </div>
        </div>
    </nav>

    <!-- BODY -->
    <div id="body-container">
        <div id="left-body-container">
            <p id="body-text">Appointment <span style="color: blue;">Scheduling</span>
            <br>Management System
            <br><span style="font-size: 25px;
                             color: rgb(121, 121, 121);">Set Appointments right at your fingertips</span>
            </p>
            <button id="appointment-button" onclick="window.location.href='appointment-form.php'">Set an Appointment</button>
        </div>
        <div id="right-body-container">
            <img id="doctor" src="images/doctor-front.png" alt="doctor">
        </div>
    </div>


    <!-- DOCTOR CONTAINER -->
    <span id="doctor-nav"></span>
    <div id="doctor-header">
        <div id="left-container">
            <img src="images/check-mark.gif" alt="mark">
            <h2 id="doc-txt">Doctor's available</h2></div>
        <div id="right-container">
            <a href="doctor-list.php" id="view-all">VIEW ALL</a>
        </div>
    </div>
    
    
    <div id="doctor-container">
        <div class="doctor-list">
            <img class="doctor-img" src="images/doctor1.png" alt="doctor">
            <h2 style="margin-top: 50px;">Dr. Name Something</h2>
            <p style="color: rgb(82, 82, 82); font-weight: medium;">Professional something</p>
            <button class="doctor-appoint">See details</button>
        </div>
        <div class="doctor-list">
            <img class="doctor-img" src="images/doctor2.png" alt="doctor">
            <h2 style="margin-top: 50px;">Dr. Name Something</h2>
            <p style="color: rgb(82, 82, 82); font-weight: medium;">Professional something</p>
            <button class="doctor-appoint">See details</button>
        </div>
        <div class="doctor-list">
            <img class="doctor-img" src="images/doctor3.png" alt="doctor">
            <h2 style="margin-top: 50px;">Dr. Name Something</h2>
            <p style="color: rgb(82, 82, 82); font-weight: medium;">Professional something</p>
            <button class="doctor-appoint">See details</button>
        </div>
    </div>

    <!-- CALENDAR -->

    <div style="margin-top: 30px; height: 100px;"></div>

    <span id="calendar-nav"></span>
    <div id="schedule">
        <div id="calendar-container">
            <div class="calendar-row" style="gap: 0;">
                <div class="calendar-day" style="background-color:rgb(44, 96, 252);"><h2 style="margin-left: 10px;">04</h2></div>
                <div class="calendar-day" style="background-color:rgb(44, 96, 252);"><h2 style="margin-left: 50px;">APRIL</h2></div>
                <div class="calendar-day" style="background-color:rgb(44, 96, 252);"><h2 style="margin-left: 80px;">2025</h2></div>
            </div>
            <div class="calendar-row" style="height: 40%; line-height: 0.5;">
                <div class="calendar-day" style="background-color: white;"><p class="day" style="margin-left: 25px; color: rgb(44, 96, 252);">SUN</p></div>
                <div class="calendar-day" style="background-color: white;"><p class="day" style="margin-left: 25px; color: rgb(44, 96, 252);"">MON</p></div>
                <div class="calendar-day" style="background-color: white;"><p class="day" style="margin-left: 25px; color: rgb(44, 96, 252);"">TUE</p></div>
                <div class="calendar-day" style="background-color: white;"><p class="day" style="margin-left: 25px; color: rgb(44, 96, 252);"">WED</p></div>
                <div class="calendar-day" style="background-color: white;"><p class="day" style="margin-left: 25px; color: rgb(44, 96, 252);"">THU</p></div>
                <div class="calendar-day" style="background-color: white;"><p class="day" style="margin-left: 25px; color: rgb(44, 96, 252);"">FRI</p></div>
                <div class="calendar-day" style="background-color: white;"><p class="day" style="margin-left: 25px; color: rgb(44, 96, 252);"">SAT</p></div>
            </div>
            <div class="calendar-row">
                <div class="calendar-day" style="background-color: white;"><p class="day"></p></div>
                <div class="calendar-day" style="background-color: white;"><p class="day"></p></div>
                <div class="calendar-day"><p class="day">1</p></div>
                <div class="calendar-day" style="background-color:rgb(44, 96, 252);"><p class="day">2</p></div>
                <div class="calendar-day"><p class="day">3</p></div>
                <div class="calendar-day" style="background-color:rgb(44, 96, 252);"><p class="day">4</p></div>
                <div class="calendar-day" style="background-color:rgb(44, 96, 252);"><p class="day">5</p></div>
            </div>
            <div class="calendar-row">
                <div class="calendar-day" style="background-color:rgb(44, 96, 252);"><p class="day">6</p></div>
                <div class="calendar-day"><p class="day">7</p></div>
                <div class="calendar-day" style="background-color:rgb(44, 96, 252);"><p class="day">8</p></div>
                <div class="calendar-day"><p class="day">9</p></div>
                <div class="calendar-day" style="background-color:rgb(44, 96, 252);"><p class="day">10</p></div>
                <div class="calendar-day" style="background-color:rgb(44, 96, 252);"><p class="day">11</p></div>
                <div class="calendar-day"><p class="day">12</p></div>
            </div>
            <div class="calendar-row">
                <div class="calendar-day"><p class="day">13</p></div>
                <div class="calendar-day" style="background-color:rgb(44, 96, 252);"><p class="day">14</p></div>
                <div class="calendar-day" style="background-color:rgb(44, 96, 252);"><p class="day">15</p></div>
                <div class="calendar-day"><p class="day">16</p></div>
                <div class="calendar-day"><p class="day">17</p></div>
                <div class="calendar-day"style="background-color:rgb(44, 96, 252);"><p class="day">18</p></div>
                <div class="calendar-day" style="background-color:rgb(44, 96, 252);"><p class="day">19</p></div>
            </div>
            <div class="calendar-row">
                <div class="calendar-day"><p class="day">20</p></div>
                <div class="calendar-day"style="background-color:rgb(44, 96, 252);"><p class="day">21</p></div>
                <div class="calendar-day" style="background-color:rgb(44, 96, 252);"><p class="day">22</p></div>
                <div class="calendar-day" style="background-color:rgb(44, 96, 252);"><p class="day">23</p></div>
                <div class="calendar-day"><p class="day">24</p></div>
                <div class="calendar-day"><p class="day">25</p></div>
                <div class="calendar-day" style="background-color:rgb(44, 96, 252);"><p class="day">26</p></div>
            </div>
            <div class="calendar-row">
                <div class="calendar-day"><p class="day">27</p></div>
                <div class="calendar-day" style="background-color:rgb(44, 96, 252);"><p class="day">28</p></div>
                <div class="calendar-day" style="background-color:rgb(44, 96, 252);"><p class="day">29</p></div>
                <div class="calendar-day"><p class="day">30</p></div>
                <div class="calendar-day" style="background-color: white;"><p class="day"></p></div>
                <div class="calendar-day" style="background-color: white;"><p class="day"></p></div>
                <div class="calendar-day" style="background-color: white;"><p class="day"></p></div>
            </div>
        </div>

        <div id="reference">
            <div class="reference-child">
                <div class="dot" style="background-color:rgb(44, 96, 252);"></div>
                <p style="font-weight: bold;">AVAILABLE</p>
            </div>
            <div class="reference-child">
                <div class="dot" style="background-color: rgb(141, 141, 141);"></div>
                <p style="font-weight: bold;">UNAVAILABLE</p>
            </div>
        </div>
    </div>

     <!-- COMMON SERVICES -->
      <span id="service-nav"></span>
     <div id="service-container">
        <!-- HEADER -->
        <div id="service-container-head">
            <h1>Common Services</h1>
            <p>Easily access doctors offering these services</p>
        </div>

        <!-- BODY -->
        <div class="service-body">
            <div class="service-content" id="service-1">
                <img src="images/child.png" alt="">
                <p>Vaccinations</p>
            </div>
            <div class="service-content" id="service-2">
                <img src="images/sick.png" alt="">
                <p>Fever Consulations</p>
            </div>
            <div class="service-content" id="service-3">
                <img src="images/certificate.png" alt="">
                <p>Medical Certificates</p>
            </div>
            <div class="service-content" id="service-4">
                <img src="images/headache.png" alt="">
                <p>Headache & Migraine</p>
            </div>
        </div>

        <div class="service-body">
            <div class="service-content" id="service-5">
                <img src="images/backpain.png" alt="">
                <p>Back Pain</p>
            </div>
            <div class="service-content" id="service-6">
                <img src="images/depress.png" alt="">
                <p>Depression & Mental Health</p>
            </div>
            <div class="service-content" id="service-7">
                <img src="images/eye.png" alt="">
                <p>Eyes & Vision</p>
            </div>
            <div class="service-content" id="service-8">
                <img src="images/heart.png" alt="">
                <p>Heart & Cardiology</p>
            </div>
        </div>
        
    </div>

    <!-- ABOUT CONTAINER -->
    <span id="about-nav"></span>
    <div id="about-container">
            <div id="about-container-left">
                <img src="images/quickshed.png" alt="quickshed">
            </div>
            <div id="about-container-right">
            <h1>&nbsp;&nbsp;&nbsp;&nbsp;About QuickSched</h1>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;QuickSched is an innovative scheduling platform designed to simplify the process of managing appointments and doctor schedules. 
                    Whether you're a doctor looking to manage your appointments or a patient trying to book a consultation, 
                    QuickSched makes scheduling quick and easy. With its user-friendly interface and efficient system, 
                    QuickSched ensures a smooth experience for both doctors and patients. 
                    Stay on top of your health and appointments with QuickSched!</p>
            </div>
    </div>

   <div id="footer-container">
        <div class="footer-child">
            <h4>For Patients</h4>
            <p>Find a Doctor</p>
            <p>Hospitals</p>
            <p>Specialties</p>
            <p>Societies</p>
            <p>Conditions</p>
            <p>Services</p>
        </div>
        <div class="footer-child">
        <h4>For Doctors</h4>
            <p>List Services</p>
            <p>Support Team</p>
            <p>Dashboard Login</p>
        </div>
        <div class="footer-child">
        <h4>General</h4>
            <p>About Us</p>
            <p>Terms & Conditions</p>
            <p>Privacy Policy</p>
            <p>Corporate</p>
            <p>Blog</p>
            <p>Partners</p>
        </div>
        <div class="footer-child" id="socials">
            <h4>Social Media</h4>
            <div>
                <img src="images/twitter.png" alt="">
                <img src="images/insta.png" alt="">
                <img src="images/fb.png" alt="">
                <img src="images/yt.png" alt="">
            </div>
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