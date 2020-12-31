<?php

include("connect.php");

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


if(isset($_POST['submit']))
{


$fnameErr = $lnameErr = $emailErr = $genderErr = $techErr = $posErr = $hobbyErr = $rateErr = $infoErr = $photoErr = "";
$fname = $lname = $email = $gender = $tech = $pos = $hobby = $rate = $info = $photo = "";
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


$sql="INSERT INTO user(firstname,lastname,email,gender,technology,postapply,hobby,rate,photo) VALUES ('$fname','$lname','$email','$gender','$tech','$post','$hobby','$rate','$info','$photo')";

if($temp==0){
	$query= mysqli_query($conn1, $sql);	
}
	
}


?>

<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body style="background-color : purple">  






















<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body style="background-color : purple">  

<p><span class="error"> <h2>* Required Field</h2></span></p>

<form method="post" action="" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

 First Name: <input type="text" name="fname" value="<?php echo $fname;?>">
  <span class="error">* <?php echo $fnameErr;?></span>
  <br><br>

  Last Name: <input type="text" name="lname" value="<?php echo $lname;?>">
  <span class="error">* <?php echo $lnameErr;?></span>
  <br><br>
 
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>

  
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>


  
  Technology :
  <select id="tech" name="tech">
    <option value="php" selected>PHP</option>
    <option value="angular">Angular JS</option>
    <option value="react">React JS</option>
    <option value="python">Python</option>
  </select>
  <span class="error">* <?php echo $techErr;?></span>


  Post Apply For:
  <select id="pos" name="pos">
    <option value="se" selected>SE</option>
    <option value="sre">SRE</option>
    <option value="qa">QA</option>  
  </select>
  <span class="error">* <?php echo $posErr;?></span>
  
  Hobby:
  <input type="checkbox" name="hobby" <?php if (isset($hobby) && $hobby=="singing") echo "checked";?> value="singing">Singing
  <input type="checkbox" name="gender" <?php if (isset($hobby) && $hobby=="reading") echo "checked";?> value="reading">Reading
  <input type="checkbox" name="gender" <?php if (isset($hobby) && $hobby=="traveling") echo "checked";?> value="traveling">Traveling  
  <span class="error">* <?php echo $hobbyErr;?></span>
  <br><br>

  Self Rating: <input type="number" name="rate" value="<?php echo $rate;?>">
  <span class="error">* <?php echo $rateErr;?></span>
  <br><br>

  Basic info: <textarea name="info" rows="6" cols="100"><?php echo $info;?></textarea>
  <span class="error">* <?php echo $infoErr;?></span>
  <br><br>
  
  Upload Photo: <input type="file" name="photo"  value="<?php echo $photo;?>">
  <span class="error">* <?php echo $photoErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Data is : </h2>";
echo "First Name : " . $fname;
echo "<br>";
echo "Last Name : " . $lname;
echo "<br>";
echo "Email : " . $email;
echo "<br>";
echo "Gender : " . $gender;
echo "<br>";
echo "Technology : " . $tech;
echo "<br>";
echo "Post Apply For : " . $pos;
echo "<br>";
echo "Hobby : " . $hobby;
echo "<br>";
echo "Self Rating : " . $rate;
echo "<br>";
echo "Basic Information : " . $info;
echo "<br>";


?>

</body>
</html>