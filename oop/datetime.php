<?php

class Datetime1
{ 
    function f1($string)
    {

          $time1 = strtotime($string); 
          $date1 = getDate($time1); 
          return  $date1;

    }    
				 
    function f2($string)
      {    
 
             
          $time2 = strtotime($string); 
          $date2 = date('d-M-Y H:i:s',$time2);
           return $date2 ;      
 
      }
    }

$object = new  Datetime1();
echo "<br>";
echo  "output of the string to Date conversion :  " ;  
print_r ($object->f1('2020/12/17'));
echo "<br>";
echo "<br>";
$o1 = new Datetime1();;
echo "output of the string to Date - time conversion : " ; 
echo  $o1->f2("2020/12/17 23:00:00");


?>
