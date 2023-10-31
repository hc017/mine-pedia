<?php
$questionType = $_POST['questionType'];

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "DBMS_Project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle different question types
switch ($questionType) {
    case '1':
        // SQL query for updating player’s level, health, and hunger
        $sql = "SELECT PD.user_name, PS.Level FROM Player_Details PD JOIN Player_Stats PS ON PD.player_id = PS.player_id;";
        break;
    case '2':
        // SQL query for retrieving coordinates of netherworld portal
        $sql = "SELECT W.name AS World_Name, COUNT(M.mob_id) AS Total_Mobs
        FROM World W
        LEFT JOIN Mob M ON W.world_id = M.world_id
        GROUP BY W.world_id;";
        break;
    case '3':
        // SQL query for updating the quantity of an item in player’s inventory
        $sql = "SELECT NW.coordinates_x, NW.coordinates_y, NW.coordinates_z, PD.user_name
        FROM NetherWorld NW
        JOIN PlaysIn PI ON NW.world_id = PI.world_id
        JOIN Player_Details PD ON PI.player_id = PD.player_id
        WHERE PD.user_name = 'Lord_Theus'
        ";
        break;
    case '4':
        // SQL query for calling GetAnimalOwner function
        $sql = "SELECT PD.user_name
        FROM Player_Details PD
        JOIN Player_Stats PS ON PD.player_id = PS.player_id
        WHERE PS.health < 50;";
        break;
    case '5':
        // SQL query for calling GetVillagerTradeOffers function
        $sql = "SELECT PD.user_name, PS.Level
        FROM Player_Details PD
        JOIN Player_Stats PS ON PD.player_id = PS.player_id
        ORDER BY PS.Level DESC
        LIMIT 3;
        ";
        break;
    case '6':
        // SQL query for calling GetAnimalDiet function
        $sql = "SELECT AVG(HM.health) AS Average_Health FROM Hostile_Mob HM;";
        break;
}

// Execute the SQL query and display the result
$result = $conn->query($sql);

if ($result === FALSE) {
    // Debugging: Print MySQL error
    echo "Error: " . $conn->error;
} elseif ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo json_encode($row);
    }
} else {
    echo "No results found.";
}

// Close connection
$conn->close();
?>
