<?php

include("dbconnection.php");
global $conn1;

$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = sha1($_POST['password']);
$phoneno = $_POST['phoneno'];

if(!empty($username) && !empty($email) && !empty($password) && !empty($phoneno) && !empty($id))
{
$query = "UPDATE user SET  username='$username', email='$email',  password='$password' , phoneno='$phoneno' WHERE id='$id'";
if (!$result = mysqli_query($conn1, $query)) {
exit(mysqli_error($conn1));
}
echo '<br><br><div class="col-md-offset-4 col-md-5 text-center alert alert-success">1 Record updated!</div><br><br>';
}
else
{
echo '<div class="col-md-offset-4 col-md-5 text-center alert alert-danger">error while updating record</div>';
}
?>