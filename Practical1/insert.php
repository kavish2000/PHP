<?php

  include ("dbconnection.php");


  $fnameErr = $lnameErr = $emailErr = $genderErr = $techErr = $posErr = $hobbyErr = $rateErr = $infoErr = $photoErr = "";
 $fname = $lname = $email = $gender = $tech = $pos = $hobby = $rate = $info = $photo = "";

  if(isset($_POST['submit']))
  { 
     
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $tech=$_POST['tech'];
    $tech=implode(",",$tech);
    $pos=$_POST['pos'];
    $hobby=$_POST['hobby'];
    $hobby=implode(",",$hobby);
    
    $rate=$_POST['rate'];
    $info=$_POST['info'];
    $photo=$_POST['photo'];
    
    
   

$sql="INSERT INTO user(firstname,lastname,email,gender,technology,postapply,hobby,rate,photo) VALUES ('$fname','$lname','$email','$gender','$tech','$post','$hobby','$rate','$info','$photo')";

    if ($conn1->query($sql) === TRUE) {
        echo "Data inserted successfully";
      } else {
        echo "Error in insert: " . $conn1->error;
      }

  }

  $conn1->close();


?>