 
<?php

 
if(isset($_POST['submit1']))  
{


  $upload_dir = 'uploads/'; 
  $target_file = $upload_dir.basename($_FILES["files"]["name"]);
  $allowed_types = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); 
    echo $allowed_types;
 
  $maxsize = 2 * 1024 * 1024;  

 
  if($allowed_types =="jpeg") 
  { 

    
      foreach ($_FILES['files']['tmp_name'] as $key => $value) 
      { 
            
          $file_tmpname = $_FILES['files']['tmp_name'][$key]; 
          $file_name = $_FILES['files']['name'][$key]; 
          $file_size = $_FILES['files']['size'][$key]; 
          $file_ext = pathinfo($file_name, PATHINFO_EXTENSION); 

          
          $filepath = $target_file.$file_name; 

        
          if(in_array(strtolower($file_ext), $allowed_types))    
          {    
              if ($file_size > $maxsize)          
                  echo "Error: File size is larger than the allowed limit."; 

              if(file_exists($filepath)) 
              { 
                  $filepath = $target_file.time().$file_name; 
                    
                  if( move_uploaded_file($file_tmpname, $filepath)) 
                  { 
                      echo "{$file_name} successfully uploaded <br />"; 
                  }  
                  else
                   {                      
                      echo "Error uploading {$file_name} <br />";  
                  } 
              } 
              else 
              { 
                echo "File Already Exists"; 
              } 
          } 
          else 
          { 
                
              
              echo "Error uploading {$file_name} ";  
              echo "({$file_ext} file type is not allowed)<br / >"; 
          }  
      } 
  }  
  else 
  { 
        
              echo "No files selected."; 
  } 
}  


?> 
