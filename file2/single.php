<?php  
$target_path = "/var/www/kavish_php/file2/upload";  
$target_path = $target_path.basename( $_FILES['fileToUpload']['name']);   
//echo $_FILES['fileToUpload']['type'];
if($_FILES['fileToUpload']['type'] == "image/jpeg"){
    if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) {  
        echo "File uploaded successfully!";  
    } else{  
        echo "Sorry, file not uploaded, please try again!";  
    } 
}else{
    echo "Sorry, file extension only except jpeg"; 
}
 
?> 