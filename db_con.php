<?php
$servername = "localhost";  // Change this if your MySQL server is hosted elsewhere
$username = "root"; // Replace 'your_username' with your actual MySQL username
$password = "root"; // Replace 'your_password' with your actual MySQL password
$database = "proj1"; // Replace 'your_database' with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Rest of your PHP code for database operations goes here...

// Close connection when you're done
$conn->close();
?>