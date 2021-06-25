<?php
$servername  = "localhost";
$username = "Mohammed";
$password = "Mm123";
$dbname = "controlunitdb";
$a=1;

$eng1 = $_POST["eng1"];
$eng2 = $_POST["eng2"];
$eng3 = $_POST["eng3"];
$eng4 = $_POST["eng4"];
$eng5 = $_POST["eng5"];
$eng6 = $_POST["eng6"];

$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

while ($a <= 6) {
  // code...

if ($a==1) {
  $sql = "UPDATE engine SET value= $eng1 , status = 'off' WHERE id =$a";

}
elseif ($a==2) {
  $sql = "UPDATE engine SET value= $eng2  , status = 'off' WHERE id =$a";

}
elseif ($a==3) {
  $sql = "UPDATE engine SET value= $eng3  , status = 'off' WHERE id =$a";

}
elseif ($a==4) {
  $sql = "UPDATE engine SET value= $eng4  , status = 'off' WHERE id =$a";

}
elseif ($a==5) {
$sql = "UPDATE engine SET value= $eng5  , status = 'off' WHERE id =$a";

}
elseif ($a==6) {
$sql = "UPDATE engine SET value= $eng6  , status = 'off' WHERE id =$a";

}

$a++;

if ($conn->query($sql) === TRUE) {

} else {
  echo "Error updating record: " . $conn->error;
}
}
alart("data saved");
$conn->close();

?>
