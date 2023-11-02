<?php
// Retrieve profile data from the storage mechanism (database, file, etc.) of your choice.

// For this example, we'll simulate the retrieved data.
$profileData = array(
    "Name" => "John Doe",
    "Register Number" => "123456",
    "Gender" => "Male",
    "Date of Birth" => "1990-01-01",
    "Department" => "Computer Science",
    "Year of Study" => "3",
    "10th Percentage" => "95.5",
    "12th Percentage" => "94.0",
    "UG Percentage" => "85.5",
    "Resume File" => "john_doe_resume.pdf"
);

// Display the retrieved profile data
echo "Profile Data Retrieved:<br>";
foreach ($profileData as $key => $value) {
    echo "$key: $value<br>";
}
?>
