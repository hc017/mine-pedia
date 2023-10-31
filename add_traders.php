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

    // Get trade items from the form
    $tradeItems = $_POST['items'];

    // SQL query to insert trade into the database
    $sql = "INSERT INTO trades (items) VALUES ('$tradeItems')";

    if ($conn->query($sql) === TRUE) {
        echo "New trade added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
