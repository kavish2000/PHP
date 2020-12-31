<?php

include ("connect.php");


$sql1 = "CREATE TABLE images (
    id int(11) NOT NULL AUTO_INCREMENT,
    file_name varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    uploaded_on datetime NOT NULL,
    status enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
    PRIMARY KEY (`id`)
   )";
    
    if ($conn1->query($sql1) === TRUE) {
      echo "Table images created successfully";
    } else {
      echo "Error creating table: " . $conn1->error;
    }



    
$conn1->close();


?>


