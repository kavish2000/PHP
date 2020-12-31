<?php

function total($arr)
{
    $b=count($arr);
    return $b;
}

function  secondlast($arr)
{
    $c= $arr[count($arr) - 2];
    return $c;
}

$a=array('kavish','Ankit','parth','kavya','aniket');
echo "Answer is :-" . "<br>";
echo  total($a);
echo "<br>" . "Second Last Element is :- ";
echo  secondlast($a);



?>