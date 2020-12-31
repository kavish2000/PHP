<?php

include ("dbconnection.php");
$id=$_GET['id'];
$que="DELETE FROM user where id=$id";

mysqli_query($conn1,$que);

?>


<form action="show.php" method="POST">
<input type="submit" name="sub" value="List of Users">
</form>

