<?php

include_once "dbconnection.php";

$sql5 = "CREATE TABLE department (
    depart_id int PRIMARY KEY,
    depart_name VARCHAR(255) NOT NULL
 )";
  
  if ($conn1->query($sql5) === TRUE) {
    echo "Table Department created successfully" . "<br>";
  } else {
    echo "Error creating table: " . $conn1->error;
  }

$departid = $departname = "";
$sql6= "INSERT INTO department(depart_id,depart_name) VALUES (?,?)";
$stmt = $conn1->prepare($sql6);

$stmt->bind_param('ss',$departid,$departname);

$departid=1;
$departname="CS";
$stmt->execute();


$departid =2; 
$departname = "Civil";
$stmt->execute();

$departid =3; 
$departname = "Mechanical";
$stmt->execute();

$stmt->close();




$sql2="ALTER TABLE user ADD depart_id int";


if ($conn1->query($sql2) === TRUE) {
    echo "column added successfully" . "<br>";
  } else {
    echo "Error creating column: " . $conn1->error;
  }

  $sql3="ALTER TABLE user ADD FOREIGN KEY(depart_id) REFERENCES  department(depart_id)";

  if ($conn1->query($sql3) === TRUE) {
    echo "Foreign key  created successfully" . "<br>";
  } else {
    echo "Error creating foreign key : " . $conn1->error;
  }


?>