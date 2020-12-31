<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Calculation</title>
</head>
<body>
    
 <form>
      
  Enter Number 1 :<input type="text" id="n1" >
   
   <BR><BR>

  Enter Number 2 : <input type="text" id="n2">

   <BR><BR>

  <input type="button"  onclick="mul(); div()" value = "Calculate">
 
 </form>

<?php
 
 echo "<h3 id='ans' style='color:green;'></h3>";
 echo "<h3 id='ans1' style='color:purple;'></h3>";

 ?>

 <script>

 function mul()
 {
var num1 = document.getElementById("n1").value;
var num2 = document.getElementById("n2").value;

var num3 = parseFloat(num1) * parseFloat(num2);

  if (!isNaN(num3))
  {
    document.getElementById("ans").innerHTML= "The Result of Multiplication is " + num3; 
  }
}




function div()
 {
var num1 = document.getElementById("n1").value;
var num2 = document.getElementById("n2").value;

var num3 = parseFloat(num1) / parseFloat(num2);

  if (!isNaN(num3))
  {
    document.getElementById("ans1").innerHTML="The Result of Divison is " + num3; 
  }
}


 </script>


</body>
</html>