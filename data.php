<?php

$servername  = "localhost";
$username = "Mohammed";
$password = "Mm123";
$dbname = "controlunitdb";
$a=1;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, value, status FROM engine";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> engine ". $row["id"]. "  value: ". $row["value"]. " status: " . $row["status"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();

 ?>
