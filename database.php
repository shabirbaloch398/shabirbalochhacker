<?php
$hostname     = "localhost"; // www.shabirbaloch.com
$username     = "root";      // Shabirbalochgamer
$password     = "";          // TsvenomMsfvenom
$databasename = "admin_panel"; // balochdb


$conn = new mysqli($hostname, $username, $password, $databasename);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>