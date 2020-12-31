<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Date Conversion</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
</head>

<body>

 
<form action="" method="POST" role="form">
    <legend> Date Conversion Form</legend>

    <div class="form-group">
        <div class="col-md-5">

           <label >Enter Date : </label>
           <input type="text" class="form-control" name="name">
        </div>
   
    </div>

    <BR> <BR> <BR> <BR>

    <button type=" submit " class="btn btn-primary" name="submit">Submit</button>

    
    </form>

<?php
 
if(isset($_POST['submit']))
{
    $name = $_POST['name'];

      if(!empty($name))
    {

         class Date1
        {

         function formats($name)
    
           {  

         
            $date=date('l d-m-Y  L ',strtotime($name));
            echo "<br> ( l d-m-Y  L)  date  Format  is : " . $date . "<br>";
   

            $date=date('M d, Y H:i:s a',strtotime($name));
            echo "<br>( M d, Y H:i:s a ) date  Format  is : " . $date . "<br>";

             
            $date=date('D-M-d-Y G:i:s a',strtotime($name));
            echo "<br>" . " ( D-M-d-Y G:i:s a )  date  Format  is : " . $date . "<br>";


            $date=date('d-F-Y  h:i:s A',strtotime($name));
            echo "<br>" . "( d-F-Y  h:i:s A )  date  Format  is : " . $date . "<br>";


            $date=date("l jS \of F Y " ,strtotime($name));
            echo "<br>" . "( l jS \of F Y ) date  Format  is : " . $date . "<br>";

          }

          
        }
    }
    
    else
    {
        echo "<script>alert('Enter date')</script>";
    }
    
    $obj = new Date1();
    $obj -> formats($name);
  

}



?>

</body>
</html>