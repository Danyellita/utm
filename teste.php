<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "utm";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO test (id, name)
 VALUES
  (1, 'Lloyds Office'), 
  (3 'Lloyds Office'), 
  (6 'London Office'),
  (26, 'Bristol Office');";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>