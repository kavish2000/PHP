<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload Form</title>
</head>
<body>
        <form action="single.php" method="post" enctype="multipart/form-data">
             Select File:  
            <input type="file" name="fileToUpload"/>  
            <input type="submit" value="Upload Image" name="submit"/>  
        </form>
</body>
</html>