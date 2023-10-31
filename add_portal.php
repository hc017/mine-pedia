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

    // Get portal data from the form
    $portalName = $_POST['name'];
    $xCoordinate = $_POST['xCoordinate'];
    $zCoordinate = $_POST['zCoordinate'];

    // SQL query to insert portal into the database
    $sql = "INSERT INTO portals (name, x_coordinate, z_coordinate) VALUES ('$portalName', $xCoordinate, $zCoordinate)";

    if ($conn->query($sql) === TRUE) {
        echo "New portal added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
