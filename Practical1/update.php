<?php

  include ("dbconnection.php");

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

   
  $fnameErr = $lnameErr = $emailErr = $genderErr = $techErr = $posErr = $hobbyErr = $rateErr = $infoErr = $photoErr = "";
$fname = $lname = $email = $gender = $tech = $pos = $hobby = $rate = $info = $photo = "";


  if(isset($_POST['submit']))
  { 
    $id = $_POST['id'];
    $temp = 0;
    
    
  if (empty($_POST["fname"]))
  {
   $fnameErr = "FirstName is required";
 } 
  else {
   $fname = test_input($_POST["fname"]);
   
   if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
     $fnameErr = "Only letters and white space allowed";
   }
 }
 

 if (empty($_POST["lname"]))
 {
  $lnameErr = "LastName is required";
} 
 else {
  $lname = test_input($_POST["lname"]);
  
  if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
    $lnameErr = "Only letters and white space allowed";
  }
}

if (empty($_POST["email"])) {
   $emailErr = "Email is required";
 } else {
   $email = test_input($_POST["email"]);
   
   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
     $emailErr = "Invalid email format";
   }
 }


 if (empty($_POST["gender"])) {
   $genderErr = "Gender is required";
 } else {
   $gender = test_input($_POST["gender"]);
 }
 

 if (empty($_POST["tech"])) {
   $techErr = " Technology is required";
 } else {
   $tech = test_input($_POST["tech"]);
 }


 if (empty($_POST["pos"])) {
   $posErr = "Apply pos is required";
 } else {
   $pos = test_input($_POST["pos"]);
 }



 if (empty($_POST["hobby"])) {
   $hobbyErr = "Hobby is required";
 } else {
   $hobby = test_input($_POST["hobby"]);
 }



 if (empty($_POST["rate"])) {
   $rateErr = "Rating is required";
 } else {
   $rate = test_input($_POST["rate"]);
 }


 if (empty($_POST["info"])) {
   $infoErr = "Basic information is required";
 } else {
   $info = test_input($_POST["info"]);
 }


 if (empty($_POST["photo"])) {
   $photoErr = "Please Upload Photo Here";
 } else {
   $photo = test_input($_POST["photo"]);
 }
    

    $que= "UPDATE user SET firstname='$fname' ,lastname='$lname' email='$email' , rate='$rate',  where id = $id";
    
    if ($temp == 0)
    {
      mysqli_query($conn1,$que);
      
      echo "data is updated";
    
    
    }  

        }

  $conn1->close();


?>