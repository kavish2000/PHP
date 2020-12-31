<?php

$servername = "localhost";
$username = "root";
$password = "Kavish@1104";


// Create connection
$conn1 = new mysqli($servername, $username, $password);
// Check connection
if ($conn1->connect_error) {
  die("Connection failed: " . $conn1->connect_error);
}


$sql = "CREATE DATABASE theta";
if ($conn1->query($sql) === TRUE) {
  echo "Database created successfully"."<br>";
} else {
  echo "Error creating database: " . $conn1->error;
}
$conn1->close();

$conn1 = new mysqli($servername, $username, $password,"theta");

$sql1 = "CREATE TABLE user (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255),
    password VARCHAR(255),
    phoneno Int(10),
    create_date date,
    update_date date
    )";
    
    if ($conn1->query($sql1) === TRUE) {
      echo "Table user created successfully";
    } else {
      echo "Error creating table: " . $conn1->error;
    }

$conn1->close();


?>


