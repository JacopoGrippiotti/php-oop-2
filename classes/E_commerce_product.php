<?php 

   include_once __DIR__ . '/Category.php';

   class EcommerceProduct{
    public $productName;
    public $category;
    public $productType;
    public $price;
    public $image;
    public $description;

    function __construct(String $_productName, $_category,String $_productType, Float $_price, String $_image, String $_description) {

         $this->productName = $_productName;
         $this->category = $_category;
         $this->productType = $_productType;
         $this->price = $_price;
         $this->image = $_image;
         $this->description = $_description;
    }

    public function getSynopsis(Int $length){
      return substr($this->description, 0, $length);
  }
 }

?>