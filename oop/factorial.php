<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    <form action = "" method = "POST">
   Enter Number :  <input type = "text" name = "name" >
    <input type ="submit" name = "submit">
    </form>

    <?php

                class Factorial
                 {
                     function fact($num)
                     {
                         if($num<0)
                         {
                             return "Impossible to find a factorial";
                         }

                         elseif($num==0)
                         {
                             return 1;
                         }

                         else
                         {      $temp=1;
                             for($i=1;$i<=$num;$i++)
                             {
                                $temp*=$i;
                               
                             }

                             return $temp;
                         }
                     }
                     
                 }
              

        if(isset($_POST['submit']))
        {
            
            $num=$_POST['name'];
            $fun = new Factorial();
            if(is_numeric($num))
            {
                echo "<br>" . "The factorial is :  "  .  $fun->fact($num);
            }
        }
       

 

     ?>


</body>
</html>