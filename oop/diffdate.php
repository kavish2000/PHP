<?php

class Date1
{
  
      function formats($string)
      {
     
    
            $date=date('d-M-Y  H:i:s A',strtotime($string));
            echo "The date  Format  is : " . $date . "<br>";

             
            $date=date('M-d-D-Y H:i:s a',strtotime($string));
            echo "<br>" . "The date  Format  is : " . $date . "<br>";


            $date=date('F-d-Y  h:i:s A',strtotime($string));
            echo "<br>" . "The date  Format  is : " . $date . "<br>";


            $date=date("l jS \of F y H:i:s A" ,strtotime($string));
            echo "<br>" . "The date  Format  is : " . $date . "<br>";

       }


            function difference()

            {
               $time = " 28-12-2020 16:34:45 ";
               $minute = ((strtotime($time) - time())/60 );

               echo "<br>" . "Difference in minute is a  : " . $minute . "<br>" ; 

            }

 }


$string= "25-12-2020 11:32:34";
$object = new Date1();
$object->formats($string);
$object -> difference();


?>