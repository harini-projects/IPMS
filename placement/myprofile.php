<!DOCTYPE html>
<html>
<head>
    <title>My Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('pic1.jpeg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            margin: 0; /* Remove default margin to eliminate white space */
            padding: 0; /* Remove default padding to eliminate white space */
        }
        .navbar {
            background-color: #0077B5;
            color: #fff;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            width: 100%;
        }
        .navbar-left {
            font-weight: bold;
        }
        .navbar-right {
            display: flex;
            align-items: center;
        }
        .navbar-right a {
            text-decoration: none;
            color: #fff;
            transition: color 0.3s;
            margin-left: 20px;
        }
        .navbar-right a:hover {
            color: #00568c;
        }
        .container {
            width: 80%;
            max-width: 600px;
            margin: 10% auto; /* Adjust the margin to place the container below the center */
            background-color: rgba(255, 255, 255, 0.9); /* Use a semi-transparent background color */
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        h1 {
            text-align: center;
        }
        form {
            text-align: left;
            max-width: 500px;
            margin: 0 auto;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        select,
        input[type="date"],
        input[type="number"],
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="file"] {
            border: none;
        }
        input[type="submit"] {
            background-color: #0077B5;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #00568c;
        }
        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #f1f1f1;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="navbar-left">PLACEMENTCELL</div>
        <div class="navbar-right">
            <a href="home.php">Home</a>
            <a href="myprofile.php">My Profile</a>
            <a href="myachievements.php">My Achievements</a>
            <a href="jobsapplied.php">Jobs Applied</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>
    <div class="container">
        <h1>My Profile</h1>
        <form action="save_profile.php" method="post" enctype="multipart/form-data">
        <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>
            
            <label for="registernumber">Register Number:</label>
            <input type="text" id="registernumber" name="registernumber" required><br><br>
            
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select><br><br>
            
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required><br><br>
            
            <label for="department">Department:</label>
            <input type="text" id="department" name="department" required><br><br>
            
            <label for="yearofstudy">Year of Study:</label>
            <input type="number" id="yearofstudy" name="yearofstudy" required><br><br>
            
            <label for="tenthpercentage">10th Percentage:</label>
            <input type="number" id="tenthpercentage" name="tenthpercentage" required><br><br>
            
            <label for="twelfthpercentage">12th Percentage:</label>
            <input type="number" id="twelfthpercentage" name="twelfthpercentage" required><br><br>
            
            <label for="ugpercentage">UG Percentage:</label>
            <input type="number" id="ugpercentage" name="ugpercentage" required><br><br>
            
            <label for="resume">Upload Resume (PDF):</label>
            <input type="file" id="resume" name="resume" accept=".pdf" required><br><br>
            
            <input type="submit" value="Submit">
        </form>
    </div>

    <div id="popup" class="popup">
        <span class="popup-content" id="popup-message">Profile details saved successfully!</span>
        <button id="edit-button">Edit Profile</button>
    </div>

    <script>
        // JavaScript code for displaying popups or handling events can be added here.

        // Example code to show the success popup and edit button after form submission.
        document.querySelector("form").addEventListener("submit", function(e) {
            e.preventDefault();
            const popup = document.getElementById("popup");
            const editButton = document.getElementById("edit-button");

            // Display the success popup
            popup.style.display = "block";

            // Hide the form
            this.style display = "none";

            // Add an event listener to the edit button to allow editing
            editButton.addEventListener("click", function() {
                popup.style.display = "none";
                document.querySelector("form").style.display = "block";
            });
        });
    </script>
</body>
</html>
