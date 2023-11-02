<!DOCTYPE html>
<html>
<head>
    <title>Student Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('pic1.jpeg'); /* Replace with your background image file's name and path */
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
            margin-left: 20px; /* Add margin to space out the links */
        }
        .navbar-right a:hover {
            color: #00568c;
        }
        .container {
            width: 80%;
            margin: 10% auto; /* Adjust the margin to place the container below the center */
            background-color: #FFFFFF; /* Use LinkedIn-like background color */
            padding: 20px;
            padding-right: 35px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        h1 {
            text-align: center; /* Center the heading */
        }
        p {
            font-size: 18px;
            text-align: center;
            margin: 20px 0;
        }

        /* Popup styles */
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
        <h1>Welcome, Aspirant</h1>
        <p>Explore job opportunities and make the most of your career!</p>
    </div>

    <div id="popup" class="popup">
        <span class="popup-content" id="popup-message">Popup message goes here.</span>
    </div>

    <script>
        // JavaScript code for displaying popups or handling events can be added here.
    </script>
</body>
</html>
