<?php
$servername  = "localhost";
$username = "Mohammed";
$password = "Mm123";
$dbname = "controlunitdb";
$a=1;


$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

while ($a <= 6) {


$sql = "UPDATE engine SET status = 'on' WHERE id =$a";


$a++;

if ($conn->query($sql) === TRUE) {

} else {
  echo "Error updating record: " . $conn->error;
}
}
alert("status saved!");
$conn->close();

?>
