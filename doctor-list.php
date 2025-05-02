<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            margin-top: 120px;
            height: 500vh;
        }

        #appointment-button {
            height: 50px;
            width: 30%;
            border: none;
            border-radius: 30px;
            background: linear-gradient(to right, rgb(2, 69, 224), rgb(7, 168, 249));
            color: white;
            font-size: 12px;
            box-shadow: 0 2px 6px rgba(11, 11, 11, 0.5);
            font-weight: bold;
            margin-top: 10px;
            margin-left: 20px;
        }
    </style>
</head>
<body>
    <!-- HEADER -->
    <nav>
        <div id="head-container">
            <div><img id="logo" src="images/quicksched_logo.png" alt="quicksched_logo"></div>
            <div id="header-navigation" style="margin-left: 300px;">
                <div class="header-option"><a href="index.php" class="hover-grow">HOME</a></div>
                <div class="header-option"><a href="appointment-form.php" class="hover-grow">APPOINT</a></div>
                <div class="header-option"><a href="login.php" class="hover-grow">LOGOUT</a></div>
            </div>

        </div>
        
    </nav>

    <div id="details-container">
        <div id="details-left">
            <h1>Talk to a Doctor now</h1>
            <h3>Private doctor consultation. Starts at ₱350.</h3>
            
            <p>✅ Verified Doctors
            💊 E-Prescription
            🔒 Secure & Confidential</p>
            <button id="appointment-button" onclick="window.location.href='appointment-form.php'">GET APPOINTED</button>

            
        </div>
        <div id="details-right">
            <img src="images/doctor-cover.jpg" alt="doctor">
        </div>
    </div>

    <h1 style="text-align: center; margin-left: 50px;">Doctors Available</h1>
    <!-- DOCTORS -->
    <div id="doctor-container" style="margin-top: 150px;">
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

    <div id="doctor-container" style="margin-top: 200px;">
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
            <h2 style="margin-top: 50px;">Dr. Jorry E. Gumera</h2>
            <p style="color: rgb(82, 82, 82); font-weight: medium;">Professional surgeon</p>
            <button class="doctor-appoint">See details</button>
        </div>
    </div>

    <div id="doctor-container" style="margin-top: 200px; ">
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
    
    <!-- WHAT IS IT -->
     <div id="info-parent">
        <div id="info-head">
            <h2>How does it work?</h2>
        </div>
        <div id="info-body">
            <div class="info-container">
                <img src="images/list.png" alt="">
                <p>Explore the list of available doctors and specialists, and choose one that suits your needs.</p>
            </div>
            <div class="info-container">
                <img src="images/communication.png" alt="">
                <p>Communicate your health concern to your doctor and finalize the payment for their services.</p>
            </div>
            <div class="info-container">
                <img src="images/message.png" alt="">
                <p>Receive a medical evaluation from your doctor through a video consultation.</p>
            </div>
        </div>
     </div>

     <!-- INFO STUFFS -->
      <div id="what-container">
        <div id="what-container-left">
            <h2>
            What can I talk to my <br>
            Doctor about during <br>the online consultation?
            </h2>
        </div>
        <div id="what-container-right">

        </div>
      </div>


    <!-- FOOTER -->
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
</body>
</html>