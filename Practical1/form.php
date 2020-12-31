<?php

include 'connect.php';
 
 function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }


        if(isset($_POST['submit']))
{

 $rate=$info=$fname=$email=$lname=$gender=$tech=$pos=$hobby=$image="";
		
		    $error=0;
		
            
            if(empty($_POST["fname"]))

            {   
            	$error=1;
                echo "<font color=red>firstname required</font><br>";
            }
            else{
				$fname= test_input($_POST["fname"]);
				
            }
            if(empty($_POST["lname"]))

            {   
                $error=1;
                echo "<font color=red>lastname required</font><br>";
            }
            else{
                $lname= test_input($_POST["lname"]);
                
            }
            if(empty($_POST["email"]))

            {
            	$error=1;
                echo "<font color=red>email required</font><br>";
            }
            else{
                $email= test_input($_POST['email']);
            }
            if(empty($_POST["info"]))
            {
            	$error=1;
                echo "<font color=red>basic info required</font><br>";
            }
            else{
                $info= test_input($_POST["info"]);
                
            }
            
            if(empty($_POST["rate"]))
            {
            	$error=1;
                echo "<font color=red>rating required</font><br>";
            }
            else{
                $rate= test_input($_POST["rate"]);
            }

            if(empty($_POST["gender"]))
            {
                $error=1;
                echo "<font color=red>rating required</font><br>";
            }
            else{
                $gender= test_input($_POST["gender"]);
            }


            
        

        
  



	$date=date("y-m-d");
    $pos=$_POST["pos"];
    $hobby=$_POST["hobby"];
    $hobby=implode(",",$hobby);
    $tech=$_POST["tech"];
    $tech=implode(",",$tech);
    $img=$_FILES['image'];

    $imgname=$img['name'];

    $imgerror=$img['error'];
    $imgtmp=$img['tmp_name'];

    $imgext=explode('.',$imgname);
    $imgcheck=strtolower(end($imgext));

    $imgextstored=array('png','jpg','jpeg');

    if(in_array($imgcheck, $imgextstored)){

    $destination='image/'.$imgname;
    move_uploaded_file($imgtmp, $destination);

    // echo $destination;
    // echo $fname;
    // echo $lname;
    // echo $email;
    // echo $tech;
    // echo $pos;
    // echo $hobby;
    // echo $rate;
    // echo $info;


	$sql= "INSERT INTO user_data(first_name,last_name,email,tech,post,hobby,rating,info,image) 
    VALUES ('$fname','$lname','$email','$tech','$pos','$hobby','$rate','$info','$destination') ";
    if($error==0){
    
    $query= mysqli_query($conn, $sql);  
    if($query){
        echo "your data is stored";

    }
    else{
        echo "failed";
    }
}
    }




	
}


?>



<!DOCTYPE html>
<html>
<head>
	<title>form</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="col-lg-6 m-auto" >

		<form method="post" enctype="multipart/form-data">
			<div class="card">
				<div class="card-header bg-dark">
				<h1 class="text-white text-center">Registration Form</h1>
				</div>
				<label>First Name:</label>
				<input type="text" name="fname" class="form-control"><br>

                <label>Last Name:</label>
                <input type="text" name="lname" class="form-control"><br>

                <label>Email:</label>
                <input type="email" name="email" class="form-control"><br>

                <label >Gender:</label>
                <span>
                <input type="radio" name="gender" value="male" >
                <label for="male">Male</label><br>
                <input type="radio" name="gender" value="feamle"> 
                <label for="feamle" >Female</label>
                </span>
                <br>
                <label>Technology:</label>

                <span>

                <input type="checkbox" name="tech[]" value="Blockchain">
                <label for="Blockchain"> Blockchain</label>
                <input type="checkbox" name="tech[]" value="nternet of Things">
                <label for="nternet of Things">nternet of Things </label>
                <input type="checkbox" name="tech[]" value="Virtual Realityp">
                <label for="Virtual Reality"> Virtual Reality </label>
                
                </span>
                <br>


                <label>Position:</label>
                <select name="pos">
                    <option value="Intern Software Developer">Intern Software Developer</option>
                    <option value="Software Developer">Software Developer</option>
                    <option value="Senior Software Developer">Senior Software Developer</option>                
                </select><br>


                <label>Hobby:</label>

                <span>
                <input type="checkbox" name="hobby[]" value="reading">
                <label for="reading"> reading </label>
                <input type="checkbox" name="hobby[]" value="singing">
                <label for="singing"> singing </label>
                <input type="checkbox" name="hobby[]" value="playing">
                <label for="playing"> playing </label>
                <input type="checkbox" name="hobby[]" value="travelling">
                <label for="travelling"> travelling </label>  
                </span>
                <br>


                <label>Rate Yourself</label>
                <input type="number" name="rate" min="1" max="5" value="1"><br>

                 <label>basic info about yourself</label>
                 <input type="text" name="info" class="form-control"><br>

                 <label>Upload Image</label>
                 <input type="file" name="image">




			    
                <br><br>

				<button class="btn btn-success" type="submit" name="submit" >Submit</button><br>
				<button class="btn btn-info" name="display" ><a href="display.php" class="text-white">Display data</a></button>
				
			</div>
		</form>
		
	</div>

</body>
</html>





