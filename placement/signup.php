<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <style>
         body {
            font-family: Arial, sans-serif;
            background-image: url('pic1.jpeg'); /* Replace with your background image file's name and path */
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            /* min-height: 100vh; */
            margin: 0;
        }
        .navbar {
            background-color: #0077B5;
            color: #fff;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            width: 100%;
            /* margin-bottom:160px; */
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
        .container {
            width: 300px; /* Set the width to make it square */
            height: 300px; /* Set the height to make it square */
            margin: 10% auto; /* Adjust the margin to place the container below the center */
            background-color: #FFFFFF; /* Use LinkedIn-like background color */
            padding: 20px;
            padding-right:35px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        h1 {
            text-align: center; /* Center the heading */
        }
        form {
            text-align: center; /* Center the form */
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #0077B5;
            color: #fff;
            padding: 10px 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #00568c;
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
        <div class="navbar-left">Integrated Placement Management</div>
        <div class="navbar-right">
            <a href="/place/home.php">Home</a>
            <a href="login.php">Login</a>
            <a href="signup.php">Sign Up</a>
        </div>
    </div>
    <div class="container">
        <h1>Sign Up</h1>
        <form method="post" action="signup.php">
            <input type="text" name="username" placeholder="Username" required>
            <input type="text" name="register_number" placeholder="Register Number" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Sign Up">
        </form>
    </div>

    <div id="popup" class="popup">
        <span class="popup-content" id="popup-message">Register number already exists. Please choose a different one.</span>
    </div>

    <?php
    // Database connection
    $servername = "localhost";
    $username = "root";
    $password = "12345";
    $database = "ipms";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $register_number = $_POST["register_number"];
        $password = password_hash($_POST["password"], PASSWORD_BCRYPT);
        $user_type = "student"; // You can set this based on the user's selection

        // Check for duplicate register numbers
        $check_query = "SELECT * FROM users WHERE register_number = '$register_number'";
        $result = mysqli_query($conn, $check_query);

        if (mysqli_num_rows($result) > 0) {
            echo "<script>var registerExists = true;</script>";
        } else {
            $insert_query = "INSERT INTO users (username, register_number, password, user_type) VALUES ('$username', '$register_number', '$password', '$user_type')";

            if (mysqli_query($conn, $insert_query)) {
                // Registration successful
                header("Location: login.php");
                exit();
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }
    }
    ?>

    <script>
        if (registerExists) {
            var popup = document.getElementById("popup");
            var popupMessage = document.getElementById("popup-message");
            popup.style.display = "block";

            // Close the popup when clicked
            popup.onclick = function () {
                popup.style.display = "none";
            };
        }
    </script>
</body>
</html>
