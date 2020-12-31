
<?php 
error_reporting(0); 
?> 
<?php 
$msg = ""; 

include ("connect.php");
// If upload button is clicked ... 
if (isset($_POST['submit'])) { 

	$filename = $_FILES["uploadfile"]["name"]; 
	$tempname = $_FILES["uploadfile"]["tmp_name"];	 
        $folder = "image/uploads/".$filename; 
        
		
//	$db = mysqli_connect("localhost", "root", "", "photos"); 

        // Get all the submitted data from the form 
		$sql = "INSERT INTO images (file_name,uploaded_on) VALUES ('".$filename."', NOW())"; 

		// Execute query 
		mysqli_query($conn1, $sql); 
		
		// Now let's move the uploaded image into the folder: image 
		if (move_uploaded_file($tempname, $folder)) { 
			$msg = "Image uploaded successfully"; 
		}else{ 
			$msg = "Failed to upload image"; 
	} 
} 

//$result = mysqli_query($db, "SELECT * FROM image"); 
?> 
