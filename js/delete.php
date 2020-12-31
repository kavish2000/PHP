<?php
include("dbconnection.php");
global $conn1;

$id = $_POST['id'];
if(empty($id))
{
die();
}
$query = $conn1->prepare("DELETE FROM user where id=?");
$query->bind_param('i',$id);
$result = $query->execute();
if($result)
{
echo "<br>"."<br>" . "<br>" . '<div class="col-md-offset-4 col-md-5 text-center alert alert-success">1 Record Deleted!</div>' . "<br>" . "<br>" . "<br>";
}
else
{
exit(mysqli_error($conn1));
}
?>