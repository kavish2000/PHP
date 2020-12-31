<?php

$servername = "localhost";
$username = "root";
$password = "Kavish@1104";


// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "CREATE DATABASE delta";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully"."<br>";
} else {
  echo "Error creating database: " . $conn->error;
}
$conn->close();

$conn1 = new mysqli($servername, $username, $password,"delta");

$sql1 = "CREATE TABLE user (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(255) NOT NULL,
    lastname VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    gender VARCHAR(255) NOT NULL,
    technology VARCHAR(255) NOT NULL,
    postapply VARCHAR(255) NOT NULL,
    hobby VARCHAR(255) NOT NULL,
    rate VARCHAR(255) NOT NULL,
    info VARCHAR(255) NOT NULL,
    photo VARCHAR(255) 
        )";
    
    if ($conn1->query($sql1) === TRUE) {
      echo "Table user created successfully";
    } else {
      echo "Error creating table: " . $conn1->error;
    }

$conn1->close();


?>


