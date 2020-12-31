<?php

  include ("dbconnection.php");

  $nameErr = $emailErr =  $passErr = $phoneErr = "";
  $username = $email  = $password =  $phone  = "";


  if(isset($_POST['submit']))
  { 
     
    $username=$_POST['name'];
    $email=$_POST['email'];
    $password=sha1($_POST['pass']);
    $phone=$_POST['phone'];
    echo $phone;
    $dt=date('y-m-d');

    $que= "INSERT INTO user(username,email,password,phoneno,create_date,update_date) VALUES('$username','$email','$password','$phone','$dt','$dt')";

    if ($conn1->query($que) === TRUE) {
        echo "Data inserted successfully";
      } else {
        echo "Error in insert: " . $conn1->error;
      }

  }

  $conn1->close();


?>