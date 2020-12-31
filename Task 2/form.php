<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body style="background-color :green">  

<?php

$nameErr = $emailErr = $phoneErr = $passErr = $conpassErr = $dobErr = $hobbyErr =$genderErr = $countryErr = "";
$name = $email = $phone = $pass =  $conpass = $dob = $hobby = $gender = $country = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
  if (empty($_POST["name"]))
   {
    $nameErr = "Name is required";
  } 
   else {
    $name = test_input($_POST["name"]);
    
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
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

  if (empty($_POST["phone "])) {
    $phoneErr = "phone no is required";
  } else {
    $phone = test_input($_POST["phone"]);
    if (!preg_match("/^[0-9']*$/",$phone)) {
        $nameErr = "Only numbers  allowed";
      }
    
  }
    
  if (empty($_POST["pass"]))
  {
   $passErr = "Password is required";
 } 
  else {
   $pass = test_input($_POST["pass"]);
   
   if (!preg_match("/^[a-zA-Z0-9-' ]*$/",$pass)) {
     $passErr = "numbers , letters and white space allowed";
   }
 }

 if (empty($_POST["conpass"]))
  {
   $conpassErr = "confirm Password is required";
 } 
  else {
   $conpass = test_input($_POST["conpass"]);
   
   if (!preg_match("/^[a-zA-Z0-9-' ]*$/",$conpass)) {
     $conpassErr = "numbers , letters and white space allowed";
   }
 }
 
 if (empty($_POST["dob"]))
   {
    $dobErr = "Date of birth is required";
  } 
   else {
    $dob = test_input($_POST["dob"]);
  }
 
  if (empty($_POST["hobby"])) {
    $hobbyErr = "Hobby is required";
  } else {
    $hobby = test_input($_POST["hobby"]);
  }

  

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }


if (empty($_POST["country"])) {
    $countryErr = "Country is required";
  } else {
    $country = test_input($_POST["country"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<p><span class="error"> <h2>* Required Field</h2></span></p>
<form method="post" action="" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Phone no: <input type="tel" name="phone" value="<?php echo $phone;?>">
  <span class="error">* <?php echo $phoneErr;?></span>
  <br><br>
  Password : <input type="password" name="pass" value="<?php echo $pass;?>">
  <span class="error">* <?php echo $passErr;?></span>
  <br><br>
  Confirm Password : <input type="password" name="conpass" value="<?php echo $conpass;?>">
  <span class="error">* <?php echo $conpassErr;?></span>
  <br><br>
  Dob : <input type="date" name="dob" value="<?php echo $dob;?>">
  <span class="error">* <?php echo $dobErr;?></span>
  <br><br>
  Hobby:
  <input type="checkbox" name="hobby" <?php if (isset($hobby) && $hobby=="singing") echo "checked";?> value="singing">Singing
  <input type="checkbox" name="gender" <?php if (isset($hobby) && $hobby=="reading") echo "checked";?> value="reading">Reading
  <input type="checkbox" name="gender" <?php if (isset($hobby) && $hobby=="traveling") echo "checked";?> value="traveling">Traveling  
  <span class="error">* <?php echo $hobbyErr;?></span>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>

  Country :
  <select id="country" name="country">
    <option value="india" selected>India</option>
    <option value="australia">Australia</option>
    <option value="newzeland">Newzeland</option>
    <option value="england">England</option>
  </select>
  <span class="error">* <?php echo $countryErr;?></span>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Data is : </h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $phone;
echo "<br>";
echo $pass;
echo "<br>";
echo $conpass;
echo "<br>";
echo $dob;
echo "<br>";
echo $hobby;
echo "<br>";
echo $gender;
echo "<br>";
echo $country;
?>

</body>
</html>
