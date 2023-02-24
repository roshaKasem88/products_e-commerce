<?php
class products extends ProductType{
    var $sku; 
    var $name; 
    var $price; 
    
     public function setProName($name){
    $this->name=$name;
     }
    
    public function getProName($name){
        return $this->name;
         }
    }



















?>