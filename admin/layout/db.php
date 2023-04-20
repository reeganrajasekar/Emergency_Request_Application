<?php
$servername = "localhost";
$username = "ebot";
$password = "trysomething";
$db_name = "ebot";
$conn = new mysqli($servername, $username, $password,$db_name);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>