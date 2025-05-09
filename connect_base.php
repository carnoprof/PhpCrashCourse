<?php
$servername = "localhost";
$username = "davide";
$password = "strongpassword";
$dbname = "davide";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "</br>Connected successfully";
?>
