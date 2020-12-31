<?php



function sorting($param,$items)
 {
     if ($param ==="DESC")
     {
        rsort($items);

     }

     else
     {
         sort($items);
     }
    
     echo "<ol type='1'>";

     echo "Answer of ".$param ." is". "<br>";
     
     foreach($items as $p)
     {
             $q="<li>$p</li>";
             echo $q; 
     }
     
     echo "</ol>";
     
     //return $items;

 }
     $item = array("Kavish","Basket","Zebra","Bucket");
        sorting("DESC" , $item);
        sorting("ASC",$item);
 


?>
