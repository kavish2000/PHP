<?php

$servername = "localhost";
$username = "root";
$password = "Kavish@1104";
$conn1 = new mysqli($servername, $username, $password,"gama");
 
if ($conn1->connect_error) {
    die("Connection failed: " . $conn1->connect_error);
  }
  

?>