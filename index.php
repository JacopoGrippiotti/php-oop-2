
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

         <div class="col-12 text-center m-5">
            <h2>Products for Cats</h2>
         </div>
         
         <?php foreach($eCommerceProductsForCats as $eCommerceProductsForCat){?>
            <div class="card col-3 p-1 m-2 ">
               <div class="header-card text-center">
                  <?php echo $eCommerceProductsForCat->productType;?>
               </div>
               <img src="<?php echo $eCommerceProductsForCat->image;?>"  class="card-img-top  h-100 bg-light rounded-0">
               <div class="card-body p-3">
                  <h5 class="card-title">
                     <?php echo $eCommerceProductsForCat->productName;?>
                  </h5>
                  <p class="card-text">
                     <?php echo $eCommerceProductsForCat->getSynopsis(50);?>
                  </p>
                  <p>price: <?php echo $eCommerceProductsForCat->price; ?></p>
                  <div class="category d-flex">
                    <p class="card-category col m-0 p-0 d-flex align-items-center">
                       category: <?php echo $eCommerceProductsForCat->category->name;?>
                    </p>
                    <div class="w-25">
                      <img class="img-fluid" src="<?php echo $eCommerceProductsForCat->category->icon; ?>" alt="">
                    </div>
                    
                  </div>
               </div>
            </div>
         <?php } ?>
         
         <div class="col-12 text-center m-5">
            <h2>Products for Dogs</h2>
         </div>
         
         <?php foreach($eCommerceProductsForDogs as $eCommerceProductsForDog){?>
            <div class="card col-3 p-1 m-2 ">
               <div class="header-card text-center">
                  <?php echo $eCommerceProductsForDog->productType;?>
               </div>
               <img src="<?php echo $eCommerceProductsForDog->image;?>"  class="card-img-top bg-light rounded-0">
               <div class="card-body p-3">
                  <h5 class="card-title">
                     <?php echo $eCommerceProductsForDog->productName;?>
                  </h5>
                  <p class="card-text">
                     <?php echo $eCommerceProductsForDog->getSynopsis(50);?>
                  </p>
                  <p>price: <?php echo $eCommerceProductsForCat->price; ?></p>
                  <div class="category d-flex">
                    <p class="card-category col m-0 p-0 d-flex align-items-center">
                       category: <?php echo $eCommerceProductsForDog->category->name;?>
                    </p>
                    <div class="w-25">
                      <img class="img-fluid" src="<?php echo $eCommerceProductsForDog->category->icon; ?>" alt="">
                    </div>
                    
                  </div>
               </div>
            </div>
         <?php } ?>
      </div>
   </div>
 </body>
</html>