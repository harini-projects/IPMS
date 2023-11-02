<?php
$hostname = 'localhost'; // Replace with your MySQL server hostname
$username = 'root'; // Replace with your MySQL username
$password = '12345'; // Replace with your MySQL password
$database = 'achievements_db11'; // Name of the database

$mysqli = new mysqli($hostname, $username, $password, $database);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Get the achievement ID from the request
$achievement_id = $_GET['id'];

// Query the database to retrieve the file path
$query = "SELECT file_path FROM achievements WHERE id = $achievement_id";
$result = $mysqli->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $file_path = $row['file_path'];

    // Serve the file for download
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename=' . basename($file_path));
    readfile($file_path);
} else {
    echo "File not found.";
}

// Close the database connection
$mysqli->close();
exit;
?>
