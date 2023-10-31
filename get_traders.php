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

// SQL query to fetch trades from the database
$sql = "SELECT * FROM trades";
$result = $conn->query($sql);

// Display trades as list items
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<li>Trade {$row['id']} - Items: {$row['items']} <button class='small-button deleteTradeBtn' data-id='{$row['id']}'>Delete</button></li>";
    }
} else {
    echo "No trades found";
}

// Close connection
$conn->close();
?>
