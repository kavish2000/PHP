<?php



$mobiles = array("OPPO"=> 130 , "VIVO"=> 145 , "NOKIA"=> 875 , "SAMSUNG"=> 134);


class Array1
{
 
  function total($mobiles)
   {
     echo "Total count of array is" . "<br>";
     return count($mobiles);
        
   }


   function eval_asc($mobiles)
   {


     echo "sort Array in ascending order (key)" . "<br>" ;
      ksort($mobiles);
      print_r($mobiles);
      echo "<br>" ."<br>" .  "sort Array in ascending order (value)" . "<br>";
      asort($mobiles);
      print_r($mobiles);
   }


   function eval_desc($mobiles)
   {
       echo "<br>" . "<br>" . "sort Array in descending order (Key)" . "<br>" ;
       krsort($mobiles);
       print_r($mobiles);
       echo "<br>" . "<br>" . "sort Array in descending order (value)" . "<br>" ;
       arsort($mobiles);
       print_r($mobiles);
   }

 
}

  $object = new Array1();
  echo  $object->total($mobiles);
  echo "<br>";
  echo "<br>";
  $object->eval_asc($mobiles);
   echo "<br>";
  $object->eval_desc($mobiles);



?>