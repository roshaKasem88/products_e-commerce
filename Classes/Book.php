<?php
require 'ProductType.php';

class Book extends ProductType{

var $weight;
protected $type=__CLASS__;


public function __construct($weight){
$this->weight=$weight;

}
public function setWeight($weight){
$this->weight=$weight;
}
public function getWeight():int{
return $this->weight;
}

}
?>