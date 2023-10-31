<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "proj1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch portals from the database
$sql = "SELECT * FROM portals";
$result = $conn->query($sql);

// Display portals as list items
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<li>{$row['name']} - (X: {$row['x_coordinate']}, Z: {$row['z_coordinate']}) <button class='small-button deletePortalBtn' data-id='{$row['id']}'>Delete</button></li>";
    }
} else {
    echo "No portals found";
}

// Close connection
$conn->close();
?>
