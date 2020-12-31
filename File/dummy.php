<html>
<head>
	<title> FILE UPLOADS </title>
</head>
<body>
<form action ="" method="POST" enctype="multipart/form-data">
	<h3>Select option :- </h3><br>
	<select name="option">
	<option value="1">Single upload</option>
	<option value="2">Multiple uploads</option>
	</select><br>
	<input type ="submit" name="submit" value="submit"><br><br>
	
	
<?php
error_reporting(E_ERROR | E_PARSE);
if(isset($_POST['submit']))
{
	$option = $_POST['option'];
	if($option == "1")
	{
		?>
		<h3>Upload a single file !</h3><br>
		<input type="file" name="files"><br>
		<input type ="submit" name="submit2" value="submit"><br>
		<input type="hidden" value="1" name="type"><br>
		<?php
	}
	else
	{
		?>
		<h3>upload files !</h3><br>
		<input type="file" name="files[]" multiple><br>
		<input type ="submit" name="submit2" value="submit"><br>
		<input type="hidden" value="2" name="type"><br>
		<?php
	}
}

if(isset($_POST['submit2']))
{
	$type= $_POST['type'];
	
	if($type=="1")
	{
		if(!empty($_FILES['files']['name']))
		{
			
		$target_directory = "data/";
		$target_file = $target_directory.basename($_FILES["files"]["name"]);
		$flag = 1;
		$extension = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		$size = $_FILES["files"]["size"];
		
		if($extension !="jpg" && $extension !="jpeg" && $extension !="gif" && $extension !="png" && $extension !="txt")
		{
			echo "<script>alert('file type not allowed !')</script>"."<br>";
			$flag =0;
			exit;
		}
		if($size > (2 * 1024 * 1024))
		{
			echo "<script>alert('file size too large !')</script>"."<br>";
			$flag =0;
			exit;
		}
		if (file_exists($target_file)) 
		{
			echo "<script>alert('Sorry, file already exists.')</script>";
			$flag = 0;
			exit;
		}
		
		if ($flag == 0)
		{
			echo "<script>alert('Some ERROR occurred while uploading. Please retry!')</script>"."<br>";
		}
		else if($flag==1)
		{
			if (move_uploaded_file($_FILES["files"]["tmp_name"], $target_file)) 
			{
			echo "<script>alert('The file has been uploaded.')</script>";
			}
			else 
			{
			echo "<script>alert('Sorry, there was an error uploading your file.')</script>";
			}
		}
		}
		else
		{
			echo "<script>alert('select a file')</script>";
		}
	}
	
	// MULTIPLE UPLOADS
	
	else if($type=="2")
	{
		if(!empty(array_filter($_FILES['files']['name'])))
		{
			foreach ($_FILES["files"]["tmp_name"] as $key => $value) 
			{
				$flag = 1;
				$target_directory = "data/";
				$target_file = $target_directory.basename($_FILES["files"]["name"][$key]);
				
				$size = $_FILES["files"]["size"][$key]; 
				$extension = strtolower(pathinfo($_FILES["files"]["name"][$key],PATHINFO_EXTENSION));
				
				
				if($extension !="jpg" && $extension !="jpeg" && $extension !="gif" && $extension !="png" && $extension !="txt")
				{
				echo "<script>alert('file type not allowed !')</script>"."<br>";
				$flag =0;
				exit;
				}
				if($size > (2 * 1024 * 1024))
				{
				echo "<script>alert('file size too large !')</script>"."<br>";
				$flag =0;
				exit;
				}
				if (file_exists($target_file)) 
				{
				echo "<script>alert('Sorry, file already exists.')</script>";
				$flag = 0;
				exit;
				}
		
				if ($flag == 0)
				{
				echo "<script>alert('Some ERROR occurred while uploading. Please retry!')</script>"."<br>";
				}
				else if($flag==1)
				{
				if (move_uploaded_file($_FILES["files"]["tmp_name"][$key], $target_file)) 
				{
				echo "The file ". htmlspecialchars( basename( $_FILES["files"]["name"][$key])). " has been uploaded.<br>";
				//echo "<script>alert('The files have been uploaded.')</script>";
				}
				else 
				{
				echo "<script>alert('Sorry, there was an error uploading your file.')</script>";
				}
				}
				
			}
		
		}
		else
		{
			echo "<script>alert('select a file')</script>";
		}
		
	}
}

?>
</form>
</body>
</html>