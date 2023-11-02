<!DOCTYPE html>
<html>
<head>
    <title>My Achievements</title>
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
    width: 50%;
    height: 50%; /* Set the height to the same value as the width */
    margin: 10% auto;
    background-color: #FFFFFF;
    padding: 20px;
    padding-right: 35px;
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
        }
        input[type="text"] {
            width: 80%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 10px;
        }
        button {
            padding: 10px 20px;
            background-color: #0077B5;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        #achievements {
            margin-top: 20px;
        }
        .achievement {
            padding: 10px;
            background-color: #f1f1f1;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin: 10px 0;
        }
        .form-group {
    display: flex;
    flex-direction: column;
    margin-bottom: 10px;
}

.form-group label {
    font-weight: bold;
    margin-bottom: 5px;
}

.form-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
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
            <!-- <a href="jobsapplied.php">Jobs Applied</a> -->
            <a href="logout.php">Logout</a>
        </div>
    </div>
    <div class="container">
        <h1>My Achievements</h1>
        <p>Explore job opportunities and make the most of your career!</p>

        <!-- Form for adding new achievements -->
        <form action="myachievements.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="description">Description:</label>
        <input type="text" name="description" id="description" required>
    </div>
    <div class="form-group">
        <label for="image">Image:</label>
        <input type="file" name="image" id="image" accept="image/*" required>
    </div>
    <button type="submit" name="add">Add</button>
</form>

        <!-- Display area for achievements -->
        <div id="achievements">
            <?php
            $hostname = 'localhost'; // Replace with your MySQL server hostname
            $username = 'root'; // Replace with your MySQL username
            $password = ''; // Replace with your MySQL password
            $database = 'achievements_db11'; // Name of the database

            $mysqli = new mysqli($hostname, $username, $password, $database);

            if ($mysqli->connect_error) {
                die("Connection failed: " . $mysqli->connect_error);
            }

            // Check if the form was submitted to add a new achievement
            if (isset($_POST["add"])) {
                $description = $_POST["description"];
                $user_id = 1; // Replace with the actual user ID

                $file_type = $_FILES["image"]["type"];
                $file_tmp_name = $_FILES["image"]["tmp_name"];
                $file_name = $_FILES["image"]["name"];
                $file_path = "uploads/" . $file_name; // Customize this path to your server

                // Upload the image
                if (move_uploaded_file($file_tmp_name, $file_path)) {
                    // Insert the achievement into the database
                    $query = "INSERT INTO achievements (user_id, description, file_type, file_path) VALUES ($user_id, '$description', '$file_type', '$file_path')";
                    if ($mysqli->query($query) === TRUE) {
                        echo "Achievement added successfully.";
                    } else {
                        echo "Error: " . $query . "<br>" . $mysqli->error;
                    }
                } else {
                    echo "Image upload failed.";
                }
            }

            // Check if the form was submitted to delete an achievement
            if (isset($_POST["delete"])) {
                $achievement_id = $_POST["delete"];
                $delete_query = "DELETE FROM achievements WHERE id = $achievement_id";
                if ($mysqli->query($delete_query) === TRUE) {
                    echo "Achievement deleted successfully.";
                } else {
                    echo "Error: " . $delete_query . "<br>" . $mysqli->error;
                }
            }

            // Retrieve and display achievements
            $user_id = 1; // Replace with the actual user ID

            $query = "SELECT id, description, file_type, file_path FROM achievements WHERE user_id = $user_id";
            $result = $mysqli->query($query);

            // Display area for achievements
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="achievement">';
                    echo '<p>Description: ' . $row['description'] . '</p>';
                    echo '<img src="' . $row['file_path'] . '" alt="Achievement Image" style="max-width: 100%;">';
                    echo '<form action="myachievements.php" method="post">';
                    echo '<input type="hidden" name="delete" value="' . $row['id'] . '">';
                    echo '<button type="submit">Delete</button>';
                    echo '</form>';
                    echo '</div>';
                }
            } else {
                echo "No achievements found.";
            }

            // Close the database connection
            $mysqli->close();
            ?>
        </div>
    </div>
</body>
</html>
