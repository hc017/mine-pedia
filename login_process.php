<?php
// Database connection parameters
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = "root"; // Replace with your database password
$dbname = "proj1"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->query($sql_create_table);

// Get username and password from the form submission
$username = $_POST['username'];
$password = $_POST['password'];

// SQL query to check if the provided username and password match a user in the database
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // User is authenticated, redirect to index.php
    header("Location: index.php");
} else {
    // Authentication failed, redirect back to the login page with an error message
    header("Location: login.html?error=1");
}

// Close connection
$conn->close();
?>
