<?php
include ("connect.php");
 
$id=$_GET['id'];


$sql= "DELETE FROM user WHERE id=$id";  

mysqli_query($conn1,$sql);

header('location:disp.php')



?>
