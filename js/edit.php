<?php
include("dbconnection.php");
global $conn1;
$id = $_POST['id'];
if(empty($id))
{
?><div class="text-center">no records found under this selection <a href="#" onclick="$('#link-add').hide();$('#show-add').show(700);">Hide this</a></div>
<?php
die();
}
$query = "SELECT * FROM user where id='$id'";
if (!$result = mysqli_query($conn1, $query)) {
exit(mysqli_error($conn1));
}
while($row = mysqli_fetch_assoc($result))
{
?>

<div class="form-inline" id="edit-data">
<div class="form-group col-md-3">
<input type="text" name="username" id="username" placeholder="Username" class="form-control" value="<?php echo $row['username']; ?>" required/>
</div>
<div class="form-group col-md-3">
<input type="email" name="email" id="email" value="<?php echo $row['email']; ?>" placeholder="Email" class="form-control" required />
</div>

<div class="form-group col-md-3">
<input type="password" id="password" name="password" placeholder="Password" class="form-control" value="<?php echo $row['password']; ?>" required />
</div>
<div class="form-group col-md-3">
<input type="text" name="phoneno" id="phoneno" value="<?php echo $row['phoneno']; ?>" placeholder="Phoneno" class="form-control" required />
</div>
<br><br>
<div class="form-group col-md-3">
<button type="button" class="btn btn-primary update" id="<?php echo $row['id']; ?>" name="update">Update Record</button>
</div>
<?php
}
?>
<script type="text/javascript">
$('.update').click(function() {
var id = $(this).attr('id');
var username = $('#username').val();
var email = $('#email').val();
var password = $('#password').val();
var phoneno = $('#phoneno').val();
$.ajax({
url: "update.php",
type: "POST",
data: { id: id, username: username, email: email, password: password, phoneno: phoneno },
success: function(data, status, xhr) {

$('#username').val('');
$('#email').val('');
$('#password').val('');
$('#phoneno').val('');   
$('#records_content').fadeOut(1100).html(data);
$.get("view.php", function(html) {
$("#table_content").html(html);
});
$('#records_content').fadeOut(1100).html(data);
},
complete: function() {
$('#link-add').hide();
$('#show-add').show(700);
}
});
}); 
</script>