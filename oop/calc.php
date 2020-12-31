<?php

class Calculation 
{
   
    private $a;
    private $b;
    public $c;

    public function __construct($a, $b) 
    {
        $this->a = $a;
        $this->b = $b;
    }
     
    public function addition($a,$b)
    {   
        $c = $this->a + $this->b;
        echo " Answer  of Addition ". $a ." And ". $b ." is " . $c;
    }

    
    public function divison($a,$b)
    {   
        $c = $this->a / $this->b;
        echo "<br>" ."<br>" .  "Answer of Division  ". $a ." and ". $b ." is " . $c;
    }
    
    
    
    
    public function subtraction($a,$b)
    {   
        $c = $this->a - $this->b;
        echo " <br>". "<br>" . "Answer of subtraction  ". $a ." and ". $b ." is " . $c;
    }

    public function multiplication($a,$b)
    {   
        $c = $this->a * $this->b;
        echo "<br>" . "<br>" . "Answer  of Multiplication  ".$a." and ". $b ." is " . $c;
    }

    

}

$obj = new Calculation(78,13);
$obj->addition(78,13);
$obj->divison(78,13);
$obj->subtraction(78,13);
$obj->multiplication(78,13);





?>