<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
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
        .container {
            width: 300px; /* Set the width to make it square */
            height: 300px; /* Set the height to make it square */
            background-color: #FFFFFF; /* Use LinkedIn-like background color */
            padding: 20px;
            padding-right:35px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            margin-top:20px; /* Add space between containers */
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
    </style>
</head>
<body>
    <div class="navbar">
        <div class="navbar-left">Integrated Placement Management System</div>
        <div class="navbar-right">
            <a href="/place/home.php">Home</a>
            <a href="login.php">Login</a>
            <a href="signup.php">Sign Up</a>
        </div>
    </div>
    <div class="container">
        <h1>Student Login</h1>
        <form method="post" action="student.php"> <!-- Update the action URL for student login -->
            <input type="hidden" name="login_type" value="student"> <!-- Hidden field to specify student login -->
            <input type="text" name="username" placeholder="Register Number" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login">
        </form>
    </div>
    <!-- <div class="container">
        <h1>Admin Login</h1>
        <form method="post" action="admin.php">
            <input type="hidden" name="login_type" value="admin"> 
            <input type="text" name="username" placeholder="Admin Username" required>
            <input type="password" name "password" placeholder="Admin Password" required>
            <input type="submit" value="Login">
        </form>
    </div> -->
</body>
</html>
