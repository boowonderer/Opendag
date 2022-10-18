<?php

$dbname = "repair";
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password, $dbname);

// Create connection

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$naam = $_POST["naam"];
$vraag1 = $_POST["vraag1"];
$vraag2 = $_POST["vraag2"];
$vraag3 = $_POST["vraag3"];
$vraag4 = $_POST["vraag4"];
$vraag5 = $_POST["vraag5"];

$sql = "INSERT INTO `reparatie` (`naam`, `vraag1`, `vraag2`,`vraag3`, `vraag4`, `vraag5`)
VALUES ('$naam' , '$vraag1', '$vraag2', '$vraag3', '$vraag4', '$vraag5')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    echo "<a href='enquete'>Cick hier om naar de Enquete terug te gaan</a>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

?>

