<!DOCTYPE html>
<html>
<head>
    <title>Save Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('pic1.jpeg'); /* Background image */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.7); /* Semi-transparent white background */
            width: 80%;
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }
        h1 {
            text-align: center;
        }
        p {
            text-align: center;
            font-size: 18px;
        }
        .saved-data {
            border: 1px solid #ccc;
            padding: 10px;
            margin-top: 20px;
            border-radius: 5px;
        }
        .edit-button {
            text-align: center;
        }
        .edit-button a {
            text-decoration: none;
            background-color: #0077B5;
            color: #fff;
            padding: 10px 20px;
            border-radius: 3px;
        }
        .edit-button a:hover {
            background-color: #00568c;
        }
        .resume-link {
            display: block;
            margin-top: 10px;
            text-decoration: underline;
            color: #0077B5;
        }
        .navbar {
            background-color: #0077B5;
            color: #fff;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            width: 100%;
            margin-bottom:160px;
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
            margin: 0 20px;
        }
        .navbar-right a:hover {
            color: #00568c;
        }
    </style>
</head>
<body>
<div class="navbar">
        <div class="navbar-left">IPMS</div>
        <div class="navbar-right">
            <a href="home.php">Home</a>
            <a href="myprofile.php">My Profile</a>
            <a href="myachievements.php">My Achievements</a>
            <a href="jobsapplied.php">Jobs Applied</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>
    <div class="container">
        <h1>Profile Data Saved</h1>
        <p>Your profile data has been successfully saved:</p>
        <div class="saved-data">
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Retrieve data from the form
            $name = $_POST["name"];
            $registernumber = $_POST["registernumber"];
            $gender = $_POST["gender"];
            $dob = $_POST["dob"];
            $department = $_POST["department"];
            $yearofstudy = $_POST["yearofstudy"];
            $tenthpercentage = $_POST["tenthpercentage"];
            $twelfthpercentage = $_POST["twelfthpercentage"];
            $ugpercentage = $_POST["ugpercentage"];
            
            // Check if a PDF file was uploaded
            if (isset($_FILES["resume"]) && $_FILES["resume"]["error"] === UPLOAD_ERR_OK) {
                $resumeFileName = $_FILES["resume"]["name"];
                $resumeTmpName = $_FILES["resume"]["tmp_name"];
                
                // Move the uploaded PDF file to a destination directory
                $uploadDirectory = "uploads/";
                move_uploaded_file($resumeTmpName, $uploadDirectory . $resumeFileName);
            } else {
                $resumeFileName = ""; // No file was uploaded
            }

            // Display the saved profile data
            echo "Name: $name<br>";
            echo "Register Number: $registernumber<br>";
            echo "Gender: $gender<br>";
            echo "Date of Birth: $dob<br>";
            echo "Department: $department<br>";
            echo "Year of Study: $yearofstudy<br>";
            echo "10th Percentage: $tenthpercentage<br>";
            echo "12th Percentage: $twelfthpercentage<br>";
            echo "UG Percentage: $ugpercentage<br>";
            
            // Display the resume as a clickable link
            if (!empty($resumeFileName)) {
                echo '<a class="resume-link" href="' . $uploadDirectory . $resumeFileName . '" target="_blank">View Resume</a>';
            }

            // Add an "Edit" button to navigate back to myprofile.php
            echo '<div class="edit-button"><a href="myprofile.php">Edit Profile</a></div>';
        } else {
            echo "Invalid request.";
        }
        ?>
        </div>
    </div>
</body>
</html>
