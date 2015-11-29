<?php
$f1=$_GET["t4"];
$f2=$_GET["t5"];
$f3=$_GET["t6"];
$f4=$_GET["t7"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}
else
{
	echo"Connection Created";
}
$sql = "INSERT INTO trip (DEPARTURE, DESTINATION, DURATION, COST)
VALUES ('$f1', '$f2', '$f3', '$f4')";
if ($conn->query($sql) === TRUE) {
    echo "<br> New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>