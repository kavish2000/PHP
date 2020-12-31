<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action = "" method="POST">
Enter Text : <input type="text" name="name">
 <br><br>
 <input type="submit" name="submit">

</form>
<br><br>
<?php

if(isset($_POST['submit']))
{
    $text=$_POST['name'];
    echo "the capital string is ".strtoupper($text);
}


?>
</body>
</html>
