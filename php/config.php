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
