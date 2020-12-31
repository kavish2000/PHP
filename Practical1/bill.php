<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action="" method="POST">
Enter amount of units : <input type="text" name="name">
<br><br>
<input type="submit" name="submit">
</form>

<?php


if(isset($_POST['submit']))
{
    $unit=$_POST['name'];
    if(empty($unit))
    {
        echo "Please enter unit";

    }

    else
    {

        $bill=calc($unit);
        echo "<br>";
        echo "bill for " .$unit." unit is :" . $bill;


    }
   
}


function calc($unit)
{

    $a=3.50;
    $b=4.00;
    $c=5.20;
    $d=6.50;

    if($unit <= 50)
    {
        $bill = $a * $unit;
    }

    else if($unit > 50 && $unit <= 100) {
        $t =  $a * 50;
        $r = $unit - 50;
        $bill = $t + ($r * $b);
    }
    else if($unit > 100 && $unit <= 200) {
        $t =  ($b * 100) + (50 * 3.5);
        $r = $unit - 150;
        $bill = $t + ($r * $c);
    }
    else {
        $t=   ($b * 100) + ($c * 100) + (50 * 3.5);
        $r = $unit - 250;
        $bill = $t + ($r * $d);
    }

    return $bill;
}




?>

</body>
</html>

