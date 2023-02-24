<?php

abstract class ProductType{
var $type_name;
var $db;
var $fm;

public function __construct(){

    $this->db = new Database();
    $this->fm = new Format();

}
public function setTypeName($type_name){
    $this->type_name=$type_name;
     }
    
     public function getTypeName():string{
        return $this->type_name;
         }

         public function catInsert($catName)
         {
             $catName = $this->fm->clean($catName);
             $catName = mysqli_real_escape_string($this->db->link, $catName);
             if (empty($catName)) {
                 $msg = "<span class='error'>Category field must not be empty!</span>";
                 return $msg;
             } else {
                 $query = "INSERT INTO tbl_category(catName) VALUES('$catName')";
                 $catinsert = $this->db->insert($query);
                 if ($catinsert) {
                     $msg = "<span class='success'>Category Inserted Successfully</span>";
                     return $msg;
                 } else {
                     $msg = "<span class='error'>Category Not Inserted.</span>";
                     return $msg;
                 }
             }
         }


}

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

// --------
class Book extends products{
var $weight;
protected $type=__class__;
public function setWeight($weight){

    $this->weight=$weight;
}

public function getWeight(){
return $this->weight;
}


}


















?>