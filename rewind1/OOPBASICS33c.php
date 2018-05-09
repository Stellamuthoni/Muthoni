<?php
//abstraction

abstract class Cars{
  private $wheeld;
  private $steering;
  //both concrete methods
  //abstract
  public function __construct($wheels){
    $this->wheels=$wheels;
  }
  //abstract-no implementation
  abstract function shift();
  //concrete
  public function hoot(){
    echo "Piiip..piiip";
  }
}
//polymorph
interface Animal{
  function diet();
}

class Goat implements Animal{
  private 4name;
  public function __construct($name){
    $this->name = $name;
  }
  public function diet(){
    echo "Hebi";
  }
  public function getName(){
    return $this->name;
  }
}
$billy = new Goat ('BillyGoat');
$simba = new Lion ('simba');
echo  $billy->getName(). "a.k.a ";
?>
//polymorph
interface Animal{
  function diet();
}

class Goat implements Animal{
  private 4name;
  public function __construct($name){
    $this->name = $name;
  }
  public function diet(){
    echo "Hebi";
  }
  public function getName(){
    return $this->name;
  }
}
$billy = new Goat ('BillyGoat');
$simba = new Lion ('simba');
echo "!, {$billy->grtName()}ni {$billy->diet()}";
