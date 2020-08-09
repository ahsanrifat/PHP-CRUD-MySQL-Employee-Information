<?php
$servername = "localhost";
$db_name="id14553304_phpcruddb";
$username = "root";
$password = "";

// Create connection
$mysqli = new mysqli($servername, $username, $password,$db_name);

// Check connection
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}
// echo "Connected successfully";
?>