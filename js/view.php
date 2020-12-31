<?php

include("dbconnection.php");
global $conn1;
$query = $conn1->prepare("SELECT * FROM user order by id DESC");
$query->execute();
mysqli_stmt_bind_result($query, $id, $username,$email,$password,$phoneno);
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>

<style>
th, td {
    text-align: center;
 }

</style>

<table class="table table-bordered" border=4>
<tr class="info">
<th>ID</th>
<th>Username</th>
<th>Email</th>
<th>Password</th>
<th>Phone No</th>
<th> EDIT</th>
<th> DELETE</th>

</tr>
<?php
while(mysqli_stmt_fetch($query))
{
echo '
<tr>
<td>'.$id.'</td>
<td>'.$username.'</td>
<td>'.$email.'</td>
<td>'.$password.'</td>
<td>'.$phoneno.'</td>
<td><center><button id="'.$id.'" class="edit btn btn-info"><span class="glyphicon glyphicon-pencil"></span> Edit</button></center> </td> <td><center><button class="del btn btn-danger" id="'.$id.'"><span class="glyphicon glyphicon-trash"></span> Delete</button></center></td>
</tr>';
}
echo '</table>';
?>
<script type="text/javascript">
$('.del').click(function() {
var id = $(this).attr('id');
$.ajax({
url : "delete.php",
type: "POST",
data : { id: id },
success: function(data)
{
$('#records_content').fadeOut(1100).html(data);
$.get("view.php", function(data)
{
$("#table_content").html(data);
});
}
});
}); 
$('.edit').click(function() {
var id = $(this).attr('id');
$('#show-add').hide();
$.ajax({
url : 'edit.php',
type: 'POST',
data : { id: id },
success: function(data)
{
$("#link-add").html(data);
$('#link-add').show();
}
});
}); 
</script>