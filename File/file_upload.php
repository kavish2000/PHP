<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    
    <form action="multi.php" method="POST" enctype="multipart/form-data"> 
  
           
        <p> 
           <h3> Upload The Multiple  File</h3>
              
            <input type="file" name="files[]" multiple> 
              
            <br><br> 
              
            <input type="submit" name="submit" value="Upload Multiple Files " > 
        </p>
        </form>    
        

        <form action="single.php" method="POST" enctype="multipart/form-data"> 
  
    
        <p> 
            <h3> Upload The Single  File</h3>
               
             <input type="file" name="file" > 
               
             <br><br> 
               
             <input type="submit" name="submit1" value="Upload Single File " > 
         </p>
    </form> 




</body>
</html>