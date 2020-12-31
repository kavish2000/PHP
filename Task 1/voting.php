
<?php

$People=array("Kavish" => 20, "Prachi" => 13, "Jignesh" => 40, "Dinesh" => 80);

 foreach($People as $Key => $Value)
 {
     if ($Value >= 18)
     {
         echo " $Key age is : " . $Value ."<br>";
         echo " $Key  are eligible for voting" . "<br>";
     }
     else
     {
        echo " $Key  age is : " . $Value ."<br>";
         echo " $Key  are not eligible for voting" . "<br>";
 
     }
 }
?>
