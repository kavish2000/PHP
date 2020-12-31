<?php
include("dbconnection.php");
global $conn1;

$username = $_POST['username'];
$email = $_POST['email'];
$password = sha1($_POST['password']);
$phoneno = $_POST['phoneno'];
if( !empty($username) && !empty($email) && !empty($password) && !empty($phoneno))
{
$query = $conn1->prepare("INSERT into user (username,email,password,phoneno) VALUES (?,?,?,?)");
$query->bind_param('ssss',$username,$email,$password,$phoneno);
$result = $query->execute();
if($result)
{
echo '<div class="col-md-offset-4 col-md-5 text-center alert alert-success">1 Record Added!</div>';
}
else
exit(mysqli_error($conn1));
}
?>