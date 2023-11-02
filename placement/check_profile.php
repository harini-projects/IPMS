<?php
$servername = "localhost";
$username = "root";
$password = "12345";
$database = "myprofile";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch data from the user_profile table
$sql = "SELECT * FROM user_profile";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . "<br>";
        echo "Name: " . $row["name"] . "<br>";
        echo "Register Number: " . $row["register_number"] . "<br>";
        // Add other fields as needed
        echo "<br>";
    }
} else {
    echo "No records found";
}

$conn->close();
?>
