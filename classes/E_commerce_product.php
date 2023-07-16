<?php 
   class EcommerceProduct{
    public $productName;
    public $category;
    public $productType;
    public $price;
    public $image;

    function__construct(String $_productName, Category $_category,String $_productType, Float $_price, String $_image){

         $this->productName = $_productName;
         $this->category = $_category;
         $this->productType = $_productType;
         $this->price = $_price;
         $this->image = $_image;
    }

   }

?>