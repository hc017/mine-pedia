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

// SQL query to fetch animals from the database
$sql = "SELECT * FROM animals";
$result = $conn->query($sql);

// Display animals as list items
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<li>Tamed Animal {$row['id']} - Type: {$row['type']}, Name: {$row['name']}, Health: {$row['health']} <button class='samll-button deleteAnimalBtn' data-id='{$row['id']}'>Delete</button></li>";
    }
} else {
    echo "No animals found";
}

// Close connection
$conn->close();
?>
