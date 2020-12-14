<?php

include "../lib/php/functions.php";
include "../parts/templates.php";
include "../data/api.php";

setDefault('orderby_direction','DESC');
setDefault('orderby','date_create');
setDefault('limit','12');
$products = makeStatement("products_admin_all",[]);


$empty_product = (object)[
   "product_name"=>"Gold Theme Explosion Box",
   "product_price"=>"50",
   "category"=>"Explosion Box",
   "product_description"=>"Gold Theme explosion box with 3 layers. Insert your own images and messages. The final box opens with gold coin chocolates",
   "quantity"=>"5",
   "image_other"=>"explosionbox_3_1.jpg,explosionbox_3_2.jpg",
   "image_thumb"=>"explosionbox_3_1.jpg"
];



switch(@$_GET['crud']) {
   case 'update':

      makeStatement("product_update",[
         $_POST['product-name'],
         $_POST['product-price'],
         $_POST['product-category'],
         $_POST['product-description'],
         $_POST['product-quantity'],
         $_POST['product-image_other'],
         $_POST['product-image_thumb'],
         $_GET['id']
      ]);

      header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
      break;


   case 'create':

      $id = makeStatement("product_insert",[
         $_POST['product-name'],
         $_POST['product-price'],
         $_POST['product-category'],
         $_POST['product-description'],
         $_POST['product-quantity'],
         $_POST['product-image_other'],
         $_POST['product-image_thumb']
      ]);
      header("location:{$_SERVER['PHP_SELF']}?id=$id");
      break;


   case 'delete':
      makeStatement("product_delete",[
         $_GET['id']
      ]);
      header("location:{$_SERVER['PHP_SELF']}");
      break;
}





function showProductPage($product) {

//print_p($product);

$id = $_GET['id'];

$thumbs = explode(",",$product->image_other);

$thumbs_elements = array_reduce($thumbs,function($r,$o){
   return $r."<img src='./img/store/$o'>";
});


$addoredit = $id=='new' ? 'Add' : 'Edit';
$createorupdate = $id=='new' ? 'create' : 'update';



$productdata = $id=='new' ? '' : <<<HTML
<div class="card">
   <div class="display-flex">
      <h2 class="flex-stretch">$product->product_name</h2>
      <div>
         <a href="{$_SERVER['PHP_SELF']}?id=$id&crud=delete">
            <img src="./img/store/icons/trash.svg" class="icon">
         </a>
      </div>
   </div>
   <div>
      <strong>Category</strong>
      <span>$product->category</span>
   </div>
   <div>
      <strong>Price</strong>
      <span>&dollar;$product->product_price</span>
   </div>
   <div>
      <strong>Quantity</strong>
      <span>$product->quantity</span>
   </div>
   <div>
      <strong>Description</strong>
      <span>$product->product_description</span>
   </div>
   <div>
      <strong>Images</strong>
      <div class="image-thumbs"><img src='./img/store/$product->image_thumb'></div>
      <div class="image-thumbs">$thumbs_elements</div>
   </div>
</div>
HTML;

echo <<<HTML
<div class="card">
<nav class="nav crumbs">
   <ul>
      <li><a href="{$_SERVER['PHP_SELF']}">Back</a></li>
   </ul>
</nav>
</div>
<div class="grid gap">
   <div class="col-xs-12 col-md-4">$productdata</div>
   <div class="col-xs-12 col-md-8">
      <div class="card">
         <form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&crud=$createorupdate">
            <h2>$addoredit Product</h2>
            <div class="form-control">
               <label for="product-name" class="form-label">Title</label>
               <input id="product-name" name="product-name" type="text" placeholder="Type product name" class="form-input" value="$product->product_name">
            </div>
            <div class="form-control">
               <label for="product-category" class="form-label">Category</label>
               <input id="product-category" name="product-category" type="text" placeholder="Type product category" class="form-input" value="$product->category">
            </div>
            <div class="form-control">
               <label for="product-price" class="form-label">Price</label>
               <input id="product-price" name="product-price" type="number" step="0.01" min="0" placeholder="Type product price" class="form-input" value="$product->product_price">
            </div>
            <div class="form-control">
               <label for="product-quantity" class="form-label">Quantity</label>
               <input id="product-quantity" name="product-quantity" type="text" placeholder="Type product quantity" class="form-input" value="$product->quantity">
            </div>
            <div class="form-control">
               <label for="product-description" class="form-label">Description</label>
               <textarea id="product-description" name="product-description" placeholder="Type product description" class="form-input">$product->product_description</textarea>
            </div>
            <div class="form-control">
               <label for="product-image_thumb" class="form-label">Image Thumb</label>
               <input id="product-image_thumb" name="product-image_thumb" type="text" placeholder="Type product image thumb" class="form-input" value="$product->image_thumb">
            </div>
            <div class="form-control">
               <label for="product-image_other" class="form-label">Image Others</label>
               <input id="product-image_other" name="product-image_other" type="text" placeholder="Type product image other" class="form-input" value="$product->image_other">
            </div>
            <div class="form-control">
               <input class="form-button" type="submit" value="Save">
            </div>
         </form>
      </div>
   </div>
</div>
HTML;
}





?>
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Product Administrator</title>

   <?php include "../parts/meta.php"; ?>
</head>
<body>

   <header class="main_navbar">
      <div class="container display-flex">
         <div class="flex-none">
            <h2>Products Admin</h2>
         </div>
         <div class="flex-stretch"></div>
         <!-- nav.nav.flex-none>ul>li>a[href=#]>{List} -->
         <nav class="flex-none nav">
            <ul class="display-flex">
               <li><a href="product_list.php">STORE</a></li>
               <li><a href="<?= $_SERVER['PHP_SELF'] ?>">LIST</a></li>
               <li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">ADD NEW PRODUCT</a></li>
            </ul>
         </nav>
      </div>
   </header>

   <div class="container">

         <?php


         if(isset($_GET['id'])) {

            // ternary or conditional
            showProductPage(
               $_GET['id']=='new' ?
                  $empty_product :
                  array_find($products,function($o){
                     return $o->id==$_GET['id'];
                  })
            );

         } else {

         ?>
         <div class="well">
         <h2>Product List</h2>

         <div>
         <?php

         echo array_reduce($products,'makeAdminList');

         ?>
         </div>
         </div>
         <?php } ?>
   </div>
   
</body>
</html>