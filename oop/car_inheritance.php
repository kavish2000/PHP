<?php

class Car
{
    public $carname;
    public $carmodel;
    public $carcolor;
    public function __construct($carname, $carmodel, $carcolor) 
    {
        $this->carname = $carname;
        $this->carmodel = $carmodel;
        $this->carcolor = $carcolor;
    }

    public function getmodel()
    {
        echo "The name of car is {$this->carname} and model is {$this->carmodel}.";
    }


    public function getcolor()
    {
        
        echo "The name of car is {$this->carname} and color is {$this->carcolor}";
 
    }

}

class SportsCar extends Car
{
     public function display()
     {
         
         $this->getmodel();
         echo "<br>" . "<br>";
         $this->getcolor();
     }
}

$car = new SportsCar("Jaguar","Ftype" , "Black");
$car->display();

?>