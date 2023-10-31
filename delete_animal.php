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

    // Get animal ID from the request
    $animalId = $_POST['id'];

    // SQL query to delete animal from the database
    $sql = "DELETE FROM animals WHERE id = $animalId";

    if ($conn->query($sql) === TRUE) {
        echo "Animal deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
