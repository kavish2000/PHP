<?php


class Animal
{
  public $family;
  public $food;

   public function set_family($family)
   {
       $this->family=$family;
   }
   public function get_family()
   {
       return $this->family;
   }
    
   public function set_food($food)
   {
       $this->food=$food;
   }
   public function get_food()
   {
       return $this->food;
   }


}


class Lion  extends Animal

{

}

class Goat extends Animal
{

}

class Dog extends Animal
{

}

$a = new Lion();
$a->set_family("Wild Animal");
echo "Family of Lion is : " . $a->get_family();
echo "<br>";
$a->set_food("Meat");
echo "<br>" . " Food  of Lion is : " . $a->get_food();

$g = new Goat();
$g->set_family(" Pet  Animal");
echo "<br>" . "<br>" . "Family of Goat is  : " . $g->get_family();
echo "<br>";
$g->set_food("Grass");
echo "<br>" . " Food  of Goat is : " . $g->get_food();

$d = new Dog();
$d->set_family(" Pet Animal");
echo "<br>" . "<br>" .  " Family of Dog is  : " . $d->get_family();
echo "<br>";
$d->set_food(" Biscuit ");
echo  "<br>" . " Food  of Dog is : " . $d->get_food();





?>