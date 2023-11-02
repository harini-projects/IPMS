<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="style.css">


</head>
<body>
    <div class="container">
        <div class="content">
        <h3>Hi, <span>admin</span></h3>
        <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
        <p>This is an admin page</p>
        <a href="login_form.php" class="btn">admin page</a> 
        <!-- <a href="register_form.php" class="btn">Register</a>  -->
        <a href="logout.php" class="btn">Logout</a>

        </div>
    </div>
    
</body>
</html>