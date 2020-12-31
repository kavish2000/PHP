<?php

function lowercase($s)
 {
     for ($i = 0; $i < strlen($s); $i++) 
     {
      if (ord($s[$i]) >= ord('A') &&
          ord($s[$i]) <= ord('Z')) 
      {
      return false;
      }
     }
      return true;
  }

       $b='science is miracle';
       $c='SCIENCE is MiRaClE';

var_dump(lowercase($b));
echo "<br>";
var_dump(lowercase($c));

?>
