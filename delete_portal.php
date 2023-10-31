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

    // Get portal ID from the request
    $portalId = $_POST['id'];

    // SQL query to delete portal from the database
    $sql = "DELETE FROM portals WHERE id = $portalId";

    if ($conn->query($sql) === TRUE) {
        echo "Portal deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
