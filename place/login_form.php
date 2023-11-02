<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="styling.css">
   <style>
      body {
         display: flex;
         flex-direction: column;
         align-items: center;
         /* justify-content: center; */
         height: 100vh;
         margin: 0;
         background-image: url('/images/img2.jpeg'); /* Replace 'your-image-url.jpg' with the actual image URL or path. */
      background-size: cover; /* Adjust the size of the background image to cover the entire viewport. */
      background-position: center center; /* Center the background image both horizontally and vertically. */
      background-repeat: no-repeat; /* Prevent the background image from repeating. */
      display: flex;
      flex-direction: column;
      align-items: center;
      height: 100vh;
      margin: 0;
         
      }

      .log {
         padding: 10px 20px;
         text-align: center;
         background: crimson;
         color:#fff;
         border-radius: 5px;
         font-size: 20px;
         margin-top:150px;
      }
      .log a{
         color:#fff;
      }
      button{

      }

      .navbar {
            background-color: #0077B5;
            color: #fff;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            width:100%;
            
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
        }
        .navbar-right a:hover {
            color: #00568c;
        }
        .navbar-right a + a {
            margin-left: 20px; /* Increased margin to create more space between buttons */
        }
   </style>
</head>
<body>
<div class="navbar">
        <div class="navbar-left">Integrated Placement Mangement System</div>
        <div class="navbar-right">
            <a href="/place/home.php">Home</a>
            <!-- <a href="login.php">Login</a> -->
            <a href="/placement/signup.php">Sign Up</a>
         </div>
         </div>
</div>



<button type="button" class="log" ><a href="/placement/login.php">Student</button>

<br>



<button type="button" class="log"  ><a href="RSM/admin/login.php">Admin</button>


</body>
</html>