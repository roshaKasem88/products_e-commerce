<?php
class Furniture extends ProductType{
   var $width;
   var $height;
   var $length;
   protected $type=__CLASS__;

    public function __construct($width,$height,$length){
        $this->width=$width;
        $this->height=$height;
        $this->length=$length;

       }
    public function calcDimensions($width,$height,$length){
        echo "$width 'x'$height 'x' $length"; 
        }

}?>