<?php

include ("connect.php");
 
 function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }


        if(isset($_POST['submit']))
{

    
$fname = $lname = $email = $gender = $tech = $pos = $hobby = $rate = $info = $photo = "";

		    $t=0;
		
            
            if(empty($_POST["fname"]))

            {   
            	$t=1;
                echo "Please enter First name";
                echo "<br>" . "<br>";
            }
            else{
				$fname= test_input($_POST["fname"]);
				
            }
            if(empty($_POST["lname"]))

            {   
                $t=1;

                echo "Please enter Last name";
                echo "<br>" . "<br>";
            }
            else{
                $lname= test_input($_POST["lname"]);
                
            }
            if(empty($_POST["email"]))

            {
                $t=1;
                
                echo "Please enter Email";
                echo "<br>" . "<br>";
            }
            else{
                $email= test_input($_POST['email']);
            }
            if(empty($_POST["info"]))
            {
                $t=1;
                

                echo "Please enter Information";
                echo "<br>" . "<br>";
            }
            else{
                $info= test_input($_POST["info"]);
                
            }
            
            if(empty($_POST["rate"]))
            {
                $t=1; 
               
                
                echo "Please enter Rating";
                echo "<br>" . "<br>";
            }
            else{
                $rate= test_input($_POST["rate"]);
            }

            if(empty($_POST["gender"]))
            {
                $t=1;
                

                echo "Please enter Gender";
                echo "<br>" . "<br>";
            }
            else{
                $gender= test_input($_POST["gender"]);
            }


            
        

        
  



	//$date=date("y-m-d");
    $pos=$_POST["pos"];
    $hobby=$_POST["hobby"];
    $hobby=implode(",",$hobby);
    $tech=$_POST["tech"];
    $tech=implode(",",$tech);
    $ph=$_FILES['photo'];

    $imgname=$ph['name'];

    $imgerror=$ph['error'];
    $imgtmp=$ph['tmp_name'];

    $execute=explode('.',$imgname);
    $check=strtolower(end($execute));

    $store=array('gif','jpeg','png');

    if(in_array($check, $store))
    {

    $photo='image/'.$imgname;
    move_uploaded_file($imgtmp, $photo);


	$sql1= "INSERT INTO user(firstname,lastname,email,gender,technology,postapply,hobby,rate,info,photo)  VALUES ('$fname','$lname','$email','$gender','$tech','$pos','$hobby','$rate','$info','$photo') ";

    if($t==0){
    
     mysqli_query($conn1, $sql1);  
     echo "data inserted";
}
    }




	
}


?>



<!DOCTYPE html>
<html>
<head>
	<title>register form</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body style="background-color : purple">
	

		<form method="post" enctype="multipart/form-data">
			
			  				<h1 class="text-blue text-center">Registration Form</h1>
				
				First Name:
				<input type="text" name="fname" class="form-control"><br>

                Last Name:
                <input type="text" name="lname" class="form-control"><br>

                Email:
                <input type="email" name="email" class="form-control"><br>

                Gender:
                <span>
                <input type="radio" name="gender" value="male" >
                <label for="male">Male</label>
                <input type="radio" name="gender" value="feamle"> 
                <label for="feamle" >Female</label>
                </span>
                <br>
                Technology:

                <span>

                <input type="checkbox" name="tech[]" value="PHP">
                <label for="php"> PHP </label>
                <input type="checkbox" name="tech[]" value="React JS">
                <label for="reactjs"> ReactJS </label>
                <input type="checkbox" name="tech[]" value="Angular JS">
                <label for="angularjs"> AngularJS </label>
                
                </span>
                <br>


                Apply Post:
                
                <select name="pos">
                    <option value="se">SE</option>
                    <option value="sre">SRE</option>
                    <option value="qa">QA</option>                
                </select><br>


                Hobby:

                <span>
                <input type="checkbox" name="hobby[]" value="reading">
                <label for="reading"> reading </label>
                <input type="checkbox" name="hobby[]" value="singing">
                <label for="singing"> singing </label>
                <input type="checkbox" name="hobby[]" value="travelling">
                <label for="travelling"> travelling </label>  
                </span>
                <br><br>


                Rate Yourself :
                <input type="number" name="rate" min="1" max="5" ><br>

                 Basic info about yourself :
                 <input type="text" name="info" class="form-control"><br>

                 Upload Image :
                 <input type="file" name="photo">

                <br><br>

				<button class="btn btn-success" type="submit" name="submit" >Submit</button><br>
				<button class="btn btn-info" name="display" ><a href="disp.php" >Display</a></button>
				
			
		</form>
		
	

</body>
</html>





