<?php
$servername = "arul-db.cq174vfsoqja.us-east-1.rds.amazonaws.com";
$username = "root";
$password = "rootroot";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
