<!DOCTYPE html>
<html>
<head>
    <title>Jobs Applied</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('pic1.jpeg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
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
            width: 40%; /* Set the width to control the square shape */
            height: 40%; /* Set the height to control the square shape */
            margin: 10% auto;
            background-color: #FFFFFF;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        h1 {
            text-align: center;
        }

        p {
            font-size: 18px;
            text-align: center;
            margin: 20px 0;
        }

        form {
            margin-top: 20px;
        }

        label {
            font-weight: bold;
            display: block; /* Ensure each label is on a new line */
        }

        input[type="text"] {
            width: 80%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 10px;
            margin-left:50px;
            display: block; /* Ensure each input is on a new line */
        }

        button {
            padding: 10px 20px;
            background-color: #0077B5;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: block; /* Ensure the button is on a new line */
            margin: 0 auto; /* Center the button horizontally */
        }

        .applied-job {
            padding: 20px;
            background-color: #f1f1f1;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 10px 0;
            text-align: left;
        }

        .applied-job p {
            margin: 10px 0;
        }

        .applied-job strong {
            color: #0077B5;
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
        <h1>Jobs Applied</h1>
        <p>Apply for jobs and track your applications!</p>

        <!-- Form for applying for a new job -->
        <form action="jobsapplied.php" method="post">
            <label for="job_title">Job Title:</label>
            <input type="text" name="job_title" id="job_title" required>
            <label for="company_name">Company Name:</label>
            <input type="text" name="company_name" id="company_name" required>
            <label for="application_date">Application Date:</label>
            <input type="date" name="application_date" id="application_date" required>
            <button type="submit" name="apply">Apply</button>
        </form>

        <!-- Display area for applied jobs -->
        <!-- Updated HTML to display applied job details with numbering -->
        <div id="applied-jobs">
            <?php
            $hostname = 'localhost';
            $username = 'root';
            $password = '';
            $database = 'jobsapplied_db'; // Create a new database for this purpose

            $mysqli = new mysqli($hostname, $username, $password, $database);

            if ($mysqli->connect_error) {
                die("Connection failed: " . $mysqli->connect_error);
            }

            if (isset($_POST["apply"])) {
                // ... (No changes to the application code)
            }

            $user_id = 1; // Replace with the actual user ID

            $query = "SELECT id, job_title, company_name, application_date FROM applied_jobs WHERE user_id = $user_id";
            $result = $mysqli->query($query);

            if ($result->num_rows > 0) {
                $counter = 1; // Counter for numbering applied jobs
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="applied-job">';
                    echo '<p><strong>Job ' . $counter . ':</strong></p>';
                    echo '<p>Job Title: ' . $row['job_title'] . '</p>';
                    echo '<p>Company Name: ' . $row['company_name'] . '</p>';
                    echo '<p>Application Date: ' . $row['application_date'] . '</p>';
                    echo '</div>';
                    $counter++;
                }
            } 
            else {
                echo "No applied jobs found.";
            }

            $mysqli->close();
            ?>
        </div>
    </div>
</body>
</html>
