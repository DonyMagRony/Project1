<?php
$servername = "localhost";
$name = "root";
$password = "";
$database = "advocate_hirings";

// Create connection
$conn = mysqli_connect($servername, $name, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>
