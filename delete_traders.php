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

    // Get trade ID from the request
    $tradeId = $_POST['id'];

    // SQL query to delete trade from the database
    $sql = "DELETE FROM trades WHERE id = $tradeId";

    if ($conn->query($sql) === TRUE) {
        echo "Trade deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
