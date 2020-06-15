<?php

$servername = "localhost";
$username = "root";
$password = "";
$table = "quanlysinhvien";

// Create connection
$conn = new mysqli($servername, $username, $password, $table);
mysqli_set_charset($conn, 'UTF8');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>