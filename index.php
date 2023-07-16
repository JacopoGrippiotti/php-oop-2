
<?php 
  
  include_once __DIR__ . './db/db.php';

?>


<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Dogs_And_Cats_Ecommerce</title>
 </head>
 <body>
   <div class="container justify-content-between">
      <div class="row justify-content-around">
         <div class="col-12 text-center">
            <h1>E-Commerce for Dogs and Cats</h1>
         </div>

         <div class="col-12 text-center">
            <h2>Products for Cats</h2>
         </div>
         
         <?php foreach($eCommerceProductsForCats as $eCommerceProductsForCat){?>
            <div class="card col-3 p-1 m-2 ">
               <div class="header-card text-center">
                  <?php echo $eCommerceProductsForCat->productType;?>
               </div>
               <img src="<?php echo $eCommerceProductsForCat->image;?>"  class="card-img-top rounded-0">
               <div class="card-body p-3">
                  <h5 class="card-title">
                     <?php echo $eCommerceProductsForCat->productName;?>
                  </h5>
                  <p class="card-text">
                     <?php echo $eCommerceProductsForCat->getSynopsis(40);?>
                  </p>
                  <div class="category">
                    <p class="card-category">
                       category:<?php echo $eCommerceProductsForCat->category->name;?>
                    </p>
                    <img class="img-fluid" src="<?php echo $eCommerceProductsForCat->category->icon; ?>" alt="">
                  </div>
               </div>
            </div>
         <?php } ?>
      </div>
   </div>
 </body>
</html>