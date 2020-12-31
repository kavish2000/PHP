<?php

include ("connect.php");

$id=$_GET['id'];
 
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

    if(in_array($check, $store)){

    $photo='image/'.$imgname;
    move_uploaded_file($imgtmp, $photo);

        
  
   $sql2= "UPDATE user set firstname='$fname',lastname='$lname',email='$email',gender='$gender',technology='$tech',postapply='$pos',hobby='$hobby',rate='$rate',info='$info',photo='$photo' WHERE id=$id ";
    if($t==0){
    
     mysqli_query($conn1, $sql2);  
     echo "data updated";
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
<body style="background-color : purple">
    

        <form method="post" enctype="multipart/form-data">
                            
            
                
                <?php

                $sql4="SELECT * FROM user where id='$id'";
                $que=mysqli_query($conn1,$sql4);
                
                while($result= mysqli_fetch_array($que))
                {
                    ?>

                First Name:
                <input type="text" name="fname" value="<?php echo $result['firstname'];?>" class="form-control">
                <br><br>

                Last Name:
                <input type="text" name="lname"  value="<?php echo $result['lastname'];?>" class="form-control">
                <br><br>

                Email:
                <input type="email" name="email"  value="<?php echo $result['email'];?>" class="form-control">
                <br><br>

               Gender :
                <span>
                <input type="radio" name="gender" value="male" >
                <label for="male">Male</label>
                <input type="radio" name="gender" value="feamle"> 
                <label for="feamle" >Female</label>
                </span>
                <br><br>
                Technology:

                <span>

                <input type="checkbox" name="tech[]" value="python">
                <label for="python"> Python</label>
                <input type="checkbox" name="tech[]" value="java">
                <label for="java"> JAVA </label>
                <input type="checkbox" name="tech[]" value="c">
                <label for="c"> C </label>
                
                </span>
                <br><br>

                 
                Apply Post:
                <select name="pos">
                    <option value="se">SE</option>
                    <option value="sre">SRE</option>
                    <option value="qa">QA</option>                
                </select>
                <br><br>

               
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
                <input type="number" name="rate" min="1" max="5"  value="<?php echo $result['rate'];?>">
                <br><br>

                 Basic information :
                 <input type="text" name="info" class="form-control"  value="<?php echo $result['info'];?>"><br>

                 Upload Image :
                 <input type="file" name="photo"  value="<?php echo $result['photo'];?>">


                <?php
                    }
                 ?>  

                
                <br><br>

                <button class="btn btn-success" type="submit" name="submit" >Submit</button><br>
                <button class="btn btn-info" name="display" ><a href="disp.php" class="text-white">Display </a></button>
                
            </div>
        </form>
        
    </div>

</body>
</html>