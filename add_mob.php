<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    // Get mob data from the form
    $mobName = $_POST['name'];
    $mobHealth = $_POST['health'];

    // SQL query to insert mob into the database
    $sql = "INSERT INTO mobs (name, health) VALUES ('$mobName', $mobHealth)";

    if ($conn->query($sql) === TRUE) {
        echo "New mob added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
