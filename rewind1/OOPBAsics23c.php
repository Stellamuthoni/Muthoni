
<?php
//inheritance
//parent
//reusing all properties
//behavoiyr in childclass

class Animal {
//characteristics/properties/attribute
  private $heart;
  public function __construct(){
    $this-> heart =$heart;
    echo "{$heart}";
  }

  //behaviour
  public function move($direction, $form){

    echo 'this is how i roll{$direction} ==> {$form}';
  }
}
class Dog extends Animal{
  private $name;

  public function __construct($name){
    $this->name =$name;
    //how to call parent class?
}
}
$rex= new Dog ('Rex');
$simba= new Dog('simba');

$rex->move ('Forward', "One two's");
echo '<br/>';
$simba->move('backward', "On all fours");

?>
