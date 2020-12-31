

<?php

   include ("dbconnection.php");
    
    $p=$_GET['id'];
		$sql8="select * from user where id =$p";
	  $result = $conn1->query($sql8);
		while($row=$result->fetch_array())
		{ 
      $username=$row['username'];
      $email=$row['email'];
      $password=$row['password'];
      $phone=$row['phoneno'];
     
    }
	?>


<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
 <style type="text/css">
            .error{
                    color:red;
                    margin-top:5px;
                    font-size:17px;
                    font-weight:bold;
                }
        </style>


</head>
<body>
<form action="update.php" id="viewform" method="POST">
   
   <input type="hidden" name="id" value="<?php echo $p ?>">
    Name: <input type="text"  id="name" name="name"  value="<?php echo $username?>">
    
    <br><br>
    E-mail: <input type="email"  id="email" name="email"  value="<?php echo $email?>">
    
    <br><br>

    Password : <input type="password"  id="pass" name="pass"  value="<?php echo $password?>">
    
    <br><br>

    Phone no: <input type="tel"  id="phone" name="phone"  value="<?php echo $phone?>">
    

    <br><br>
   <input type="submit" name="submit" value="submit">
   


</form>


<script>
            $(document).ready(function(){
                
                
                $("#viewform").validate({
                    rules:{
                        name: "required",
                        email: "required",
                        pass: "required",
                        phone: {minlength:10, maxlength:10,required : true}

                    },
                    
                    messages:{
                        name: "*Please Enter a Username",
                        email: "*Please Enter a Email",
                        pass: "*Please Enter a Password",
                        
                    }
                });
            });
        </script>


</body>

</html> 