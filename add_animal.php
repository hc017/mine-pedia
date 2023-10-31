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

    // Get animal details from the form
    $animalType = $_POST['type'];
    $animalName = $_POST['name'];
    $animalHealth = $_POST['health'];

    // SQL query to insert animal into the database
    $sql = "INSERT INTO animals (type, name, health) VALUES ('$animalType', '$animalName', $animalHealth)";

    if ($conn->query($sql) === TRUE) {
        echo "New animal added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
