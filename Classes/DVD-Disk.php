<?php
class DVdDisc extends ProductType{

var $size;
protected $type=__CLASS__;

public function __construct($size){
    $this->size=$size;

   }
public function getSize():int{
    return $this->size;
    }
    public function setSize($size){
        $this->size=$size;
        }

}
?>