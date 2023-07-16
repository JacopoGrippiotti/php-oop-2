<?php 
   class EcommerceProduct{
    public $productName;
    public $category;
    public $productType;
    public $price;
    public $image;

    function__construct($_productName, $_category, $_productType, $_price, $_image){

         $this->productName = $_productName;
         $this->category = $_category;
         $this->productType = $_productType;
         $this->price = $_price;
         $this->image = $_image;
    }

   }

?>