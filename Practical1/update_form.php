

<?php

include ("dbconnection.php");
 
 $p=$_GET['id'];
     $sql8="select * from user where id =$p";
   $result = $conn1->query($sql8);
     while($row=$result->fetch_array())
     { 
     
 $fname=$row['firstname'];
 $lname=$row['lastname'];
 $email=$row['email'];
 $gender=$row['gender'];
 $tech=$row['technology'];
 $pos=$row['posapply'];
 $hobby=$row['hobby'];
 $rate=$row['rate'];
 $info=$row['info'];
// $photo=$_POST['photo'];
 
 

   
   
  
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
First Name: <input type="text" id="fname" name="fname" value="<?php echo $fname;?>">
 
 <br><br>


 Last Name: <input type="text" id="lname" name="lname" value="<?php echo $lname;?>">
 <br> <br>

 E-mail: <input type="email"  id="email" name="email"  value="<?php echo $email?>">
 
 <br> <br>


Self Rating: <input type="number" id="rate" name="rate" value="<?php echo $rate;?>">
<br> <br>

<input type="submit" name="submit" value="submit">



</form>


<script>
         $(document).ready(function(){
             
             
             $("#viewform").validate({
                 rules:{
                     fname: "required",
                     lname: "required",
                     email: "required",
                     rate: "required",
                     

                 },
                 
                 messages:{
                     fname: "*Please Enter a Firstname",
                     fname: "*Please Enter a Lastname",
                     email: "*Please Enter a Email",
                     rate: "*Please Enter a Rating",
                     
                 }
             });
         });
     </script>


</body>

</html> 