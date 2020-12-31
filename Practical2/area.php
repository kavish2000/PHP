<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate Area And Perimeter</title>
</head>
<body>
<form action ="" method="POST">
 <h1 style = "color : red">  Circle </h1>
   
   Enter Radius : <input type = "text" name="radius">

   <h1 style = "color : blue">  Rectangle </h1>
  
   Enter  Length : <input type = "text" name="length">
    
    <BR><BR>

   Enter Breadth : <input type = "text" name="breadth">

   <h1 style = "color : purple">  Triangle </h1>

   Enter one side : <input type = "text" name="a">
    
   <BR><BR>

   Enter second side : <input type = "text" name="b">
    
   <BR><BR>

   Enter third side : <input type = "text" name="c">
   
   <BR><BR>
  
   <input type = "submit" name="submit" value="Calculate">
</form>

<?php

if(isset($_POST['submit']))
{
  $radius=$_POST['radius'];
  $length=$_POST['length'];
  $breadth=$_POST['breadth'];
  $a=$_POST['a'];
  $b=$_POST['b'];  
  $c=$_POST['c'];

  class Circle
  {
      function areaCircle($radius)
      {
          $area= 3.14 * $radius * $radius;
          echo "<br>" . "Area of Circle is : " . "<br>" . $area;
      }


      function perimeterCircle($radius)
      {
          $peri= 3.14 * 2 * $radius;
          echo "<br>" . "Perimeter of Circle is : " . "<br>" . $peri;
      }

  }



  class Rectangle
  {
    function areaRectangle( $length, $breadth) 
     { 
    $area = $length * $breadth; 
    echo "<br>" . "Area of Rectangle is : " . "<br>" . $area; 
     } 
  
    function perimeterRectangle( $length, $breadth) 
    { 
    $peri = 2 * ($length + $breadth); 
    echo "<br>" . "Perimeter  of Rectangle is : " . "<br>" . $peri; 
     } 


  }


  class Triangle
  {

    function areaTriangle( $a, $b , $c) 
    { 

        $d = ($a + $b + $c)/2;
        $area=sqrt($d*($d-$a)*($d-$b)*($d-$c));  
    
        echo  "<br>" . "Area  of Triangle  is : " . "<br>" . $area; 
    } 
 
   function perimeterTriangle( $a, $b , $c)
   { 

        $peri = $a + $b + $c; 
        echo  "<br>" . "Perimeter of Triangle is : " . "<br>" . $peri; 
    } 

  }

  $circle = new Circle();
  $circle -> areaCircle($radius);
  echo "<br>";
  $circle -> perimeterCircle($radius);
  echo "<br>";

  $rec = new Rectangle();
  $rec -> areaRectangle($length,$breadth);
  echo "<br>";
  $rec -> perimeterRectangle($length,$breadth);
  echo "<br>";

  $tri = new Triangle();
  $tri -> areaTriangle($a,$b,$c);
  echo "<br>";
  $tri -> perimeterTriangle($a,$b,$c);


  
  
}

?>



</body>
</html>