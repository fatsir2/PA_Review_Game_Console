<?php
$servername = "localhost";
$username = "root";
$password = "";
$databases = "pa_console";

// Create connection
$conn = new mysqli($servername, $username, $password, $databases);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Berhasil Connect Database";
?>