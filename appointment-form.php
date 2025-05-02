<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <link rel="stylesheet" href="style.css">

    <style>
        body {
            background-size: cover;
            height: 200vh;
            margin: 0;
            font-family: 'Albert Sans', sans-serif;
            margin-top: 50px;
            position: relative;
            overflow-x: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            color: rgb(1, 4, 31);
        }

        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            filter: blur(2px);
            z-index: -1;
        }

        #appointment-form-container {
            background: rgba(244, 247, 253, 0.44);
            border-radius: 10px;
            width: 100%;
            max-width: 600px;
            height: 1350px;
            margin: 20px 0;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
        }

        #appointment-form-container form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        #appointment-form-container input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        #appointment-form-container h3 {
            margin: 0 0 8px;
        }

        #appointment-form-container p {
            margin: 5px 0;
        }

        p {
            text-align: left;
            font-weight: bold;
        }

        #confirm-btn {
            height: 50px;
            width: 42%;
            border: none;
            border-radius: 30px;
            color: white;
            background: linear-gradient(to right, rgb(2, 69, 224), rgb(7, 168, 249));
            font-weight: bold;
            font-size: 15px;
            box-shadow: 0 2px 6px rgba(9, 9, 9, 0.5);
        }

        #confirm-btn:hover {
            background: linear-gradient(to right, rgb(99, 146, 255), rgb(99, 146, 255));
            transform: scale(1.02);
        }

        #cancel-btn {
            height: 50px;
            width: 42%;
            border: 1px solid red;
            color: red;
            border-radius: 30px;
            background-color: white;
            font-weight: bold;
            font-size: 15px;
        }

        #cancel-btn:hover {
            transform: scale(1.02);
        }

    </style>
</head>
<body>
        <div id="appointment-form-container">
            <form method="post" action="appointment-submit.php">
                <h2 style="color: blue;">Appointment Form</h2>
                <p style="text-align: center; font-size: 12px;">Book your appointment by completing this form</p>

                <br>
                <p>What's your name?</p>
                <div style="flex-direction: column;">
                    <input type="text" placeholder="First name" name="first-name" required>
                    <input type="text" placeholder="Last name" name="last-name" required>
                </div>
                
                <p>What's your contact?</p>
                <div style="flex-direction: column;">
                    <input type="email" placeholder="Email address" name="email" required>
                    <input type="tel" placeholder="Phone number" name="phone" required>
                </div>
            
                <p>Date of Birth</p>
                <input type="date" name="dob" required>

                <p>Gender</p>
                <select name="gender">
                <option value="" disabled selected>Select gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
                </select>

                <p>What’s the reason for your visit?</p>
                <textarea name="reason" rows="4" placeholder="Describe your symptoms or reason for appointment..."></textarea>

                <p>Preferred Appointment Date & Time</p>
                <input type="date" name="preferred-date" required>
                <input type="time" name="preferred-time" required>

                <p>Preferred Doctor</p>
                <input type="text" placeholder="Doctor's name (optional)" name="preferred-doctor" required>

                <p>Do you have any medical conditions?</p>
                <textarea name="conditions" rows="3" placeholder="List any known conditions..."></textarea>

                <p>Are you currently taking any medications?</p>
                <textarea name="medications" rows="3" placeholder="List medications..."></textarea>

                <p>Do you have any allergies?</p>
                <textarea name="allergies" rows="3" placeholder="List allergies..."></textarea>


                <p>
                <input type="checkbox" name="consent" required>
                I agree to the clinic's privacy policy and terms.
                </p>

                <div style="flex-direction: column;">
                    <button style="margin-right: 10px;" onclick="window.location.href='index.php'" id="cancel-btn">Cancel</button>
                    <button style="margin-left: 10px;" id="confirm-btn" type="submit">Book Appointment</button>
                </div>
            </form>
            
        </div>
</body>
</html>