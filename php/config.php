<?php

$servername = "localhost";
$username = "root";
$password = "";
$databases = "pa_console";


try {    
  //create PDO connection 
  $db = new PDO("mysql:host=$servername;dbname=$databases", $username, $password);
} catch(PDOException $e) {
  //show error
  die("Terjadi masalah: " . $e->getMessage());
}

/*
// Create connection
$conn = new mysqli($servername, $username, $password, $databases);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Berhasil Connect Database";
?>
*/