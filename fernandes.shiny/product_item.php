<?php
include_once "lib/php/functions.php";
include_once "parts/templates.php";

$product = MYSQLIQuery("SELECT * FROM products WHERE id = {$_GET['id']}")[0];
$thumbs = explode(",",$product->image_other);

$thumbs_elements = array_reduce($thumbs,function($r,$o){
   return $r."<img src='img/store/$o'>";
});

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Store: <?= $product->product_name ?></title>
   <?php include "parts/meta.php" ?>
</head>
<body>
   
   <div class="position-fixed">
   <?php include "parts/stickyhead.php" ?>
   <?php include "parts/mainnavbar.php" ?>
   </div>


<div class="container">
   <div class="grid gap">
      <div class="col-xs-12 col-md-7">
         <div class="card soft">
            <div class="image-main">
               <img src="./img/store/<?= $product->image_main ?>" alt="">
            </div>
            <div class="image-thumbs">
                  <?= $thumbs_elements ?>
            </div>
         </div>
      </div>     
      <div class="col-xs-12 col-md-5">
      <form class="card soft flat" method="post" action="product_actions.php?action=add-to-cart">
            <input type="hidden" name="product-id" value="<?= $product->id ?>">
            <div class="card-section">
               <h2><?= $product->product_name ?></h2>
               <div>&dollar;<?= $product->product_price?>
               </div>
            </div>
               <div class="card-section"><a href="product_list.php?t=products_by_category&category=<?= $product->category ?>"><?= $product->category ?></a>
               </div>

      <div class="card-section">
         
         <div class="form-control">         
            <label form="product-amount" class="form-label">Amount</label>
            <div class="form-select">
               <select name="product-amount" id="product-amount">
                           <!-- option[value=$]*10>{$} -->
                     <option value="1">1</option>
                     <option value="2">2</option>
                     <option value="3">3</option>
                     <option value="4">4</option>
                     <option value="5">5</option>
                     <option value="6">6</option>
                     <option value="7">7</option>
                     <option value="8">8</option>
                     <option value="9">9</option>
                     <option value="10">10</option>
               </select>
            </div>
         </div>
                  
         <div class="form-control">
                     
            <label for="product-color" class="form-label">Color</label>
            <div class="form-select">
               <select name="product-color" id="product-color">
                     <option value="red">Red</option>
                     <option value="green">Green</option>
                     <option value="blue">Blue</option>
               </select>
            </div>
         </div>
                  
         <div class="form-control">
            <input type="submit" class="form-button" value="Add To Cart">
         </div>
      </div>

   </div>
         
      
    </form>   
</div>
   <div class="card soft">
   <p><?= $product->product_description ?></p>
   </div>

   <h2>Related Products</h2>

   <?php

         recommendSimilar($product->category,$product->id);
         ?>

</div>
      
   <?php include "parts/footer.php" ?>

</body>
</html>