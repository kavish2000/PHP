

<!DOCTYPE html>
<html>
<head>
	<title>display</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	
			
			<table border=1 style = "background-color : red" >
				<tr>
					<td><b>ID</b></td>
					<td><b>First Name</b></td>
					<td><b>Last Name</b></td>
					<td><b>Email</b></td>
					<td><b>Gender</b></td>
					<td><b>Technology</b></td>
					<td><b> Apply Post</b></td>
					<td><b>hobbies</b></td>
					<td><b>Rate yourself</b></td>
					<td><b>Basic Information</b></td>
					<td><b>Photo</b></td>
					<td>Delet</td>
					<td>Update</td>
 			 	</tr>
                <?php
					include ("connect.php");
					$sql1="SELECT * FROM user";
					$sql2= mysqli_query($conn1, $sql1);

					while($result= mysqli_fetch_array($sql2)){

  
                 ?>

				<tr>
					<td><?php echo $result['id'];?></td>
					<td><?php echo $result['firstname'];?></td>
					<td><?php echo $result['lastname'];?></td>
					<td><?php echo $result['email'];?></td>
					<td><?php echo $result['gender'];?></td>
					<td><?php echo $result['technology'];?></td>
					<td><?php echo $result['postapply'];?></td>
					<td><?php echo $result['hobby'];?></td>
					<td><?php echo $result['rate'];?></td>
					
					<td><?php echo $result['info'];?></td>

					<td><img src="<?php echo $result['photo'];?>" width="200px" height="200px"></td>
					<td><a href="delete.php?id=<?php echo $result['id'];?>"class="text-blue">Delete</a></td>
					<td><a href="update.php?id=<?php echo $result['id'];?>" class="text-blue">update</a></td>
					
				</tr>
			
				<?php
					}
				?>	
					<tr>
					<td>
						<button class="btn btn-danger "><a href="register.php" class="text-black"> register</button>
					</td>
				</tr>

			</table>
	

</body>
</html>