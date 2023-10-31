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

// SQL query to fetch mobs from the database
$sql = "SELECT * FROM mobs";
$result = $conn->query($sql);

// Display mobs as list items
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<li>{$row['name']} - Health: {$row['health']} <button class='small-button deleteMobBtn' data-id='{$row['id']}'>Delete</button></li>";
    }
} else {
    echo "No mobs found";
}

// Close connection
$conn->close();
?>
