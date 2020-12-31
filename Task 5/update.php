<?php

  include ("dbconnection.php");

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

   
  $nameErr = $emailErr =  $passErr = $phoneErr = $deptErr = "";
  $username = $email  = $password =  $phone = $dept ="";
  

  if(isset($_POST['submit']))
  { 
    $id = $_POST['id'];
    $temp = 0;
    if (empty($_POST["name"]))
    {
      $temp = 1;
     $nameErr = "Name is required";
   } 
    else {
     $username = test_input($_POST["name"]);
    }

    if (empty($_POST["email"]))
    {
      $temp = 1;
     $emailErr = "Email is required";
   } 
    else {
     $email = test_input($_POST["email"]);
    }

    if (empty($_POST["pass"]))
    {
      $temp = 1;
     $passErr = "Password is required";
   } 
    else {
     $password = sha1(test_input($_POST["pass"]));
    }

   
    if (empty($_POST["phone"]))
    {
      $temp = 1;
     $phoneErr = "Phoneno is required";
   } 
    else {
     $phone = test_input($_POST["phone"]);
    }
  
  
    if (empty($_POST["dept"]))
    {
      $temp = 1;
     $deptErr = "Department is required";
   } 
    else {
     $dept = test_input($_POST["dept"]);
    }




    $dt=date('y-m-d');
    
    

    

    $que= "UPDATE user SET username='$username' , email='$email' , password='$password', phoneno = '$phone' , depart_id = '$dept'  where id = $id";
    
    if ($temp == 0)
    {
      mysqli_query($conn1,$que);
      
      echo "data is updated";
    
    
    }  

        }

  $conn1->close();


?>