<?php 
   include "parts/meta.php";
   include_once "parts/templates.php";
   include_once "lib/php/functions.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>Store</title>
</head>
<body>
   <div class="position-fixed">
   <?php include "parts/stickyhead.php" ?>
   <?php include "parts/mainnavbar.php" ?>
   </div>
   

   <div class="view-window" style="background-image:url(./img/store/pinkgiftflip.jpg)">
      <div class="textblock">
      <h2>For the best things in Life are not just things, make your loved one feel special, wrap your Love in gifts</h2>
      <div class="btn cta_primary">
         <a href="product_list.php">START SHOPPING</a>     
      </div>
      </div>
      
   </div>
   
   <div class="container">
   <div class="display-flex" style="margin:5%">
      <div class="article flex-stretch" style="width:50%; padding:5%">
         <div class="content">
            <h2>Personalise your gifts</h2>
            <div class="">
               <p>Add your own pictures and messages. You can now customize your gifts as required. This makes your gift stand out from the rest and memorable</p>
            </div>
            <div class="btn cta_primary">
               START SHOPPING
            </div>
         </div>
      </div>
      <div class="flex-stretch display-flex flex-align-center flex-justify-center" style="width: 50%">
      <img src="img/store/memories.jpg" alt="" style="width:80%; align-items: center;">
      </div>
</div>
</div>

   <div class="view-window" style="background-image:url(./img/store/gifts5.jpg)">
      <div class="container grid gap" style="padding: 5%; color: white">
            <div class="col-xs-12 col-md-6">
               <img src="./img/store/handmade.jpg" alt="" style="width:90%; align-items: center;">
            </div>
            <div class="col-xs-12 col-md-6">
               <h2>Our story</h2>
               <p>
                Giftitions was started as entrepreneurial venture - Giftitions, where they took orders via instagram and facebook page and handmade the customized products depending on the occasion and need of the client.
               </p>
               <div class="btn cta_primary">
               KNOW MORE
               </div>
            </div>
      </div>
   </div>
   

   <div class="container grid gap" style="padding: 5%">
            
            <div class="col-xs-12 col-md-6">
               <h2>Customize this explosion box</h2>
               <p>
                You can add your own messages and pictures 
                  3 layers of boxes each with increasing level of surprises.
               </p>
               <div class="btn cta_primary">
               <a href="http://shinyfernandes.com/aau/wnm608/fernandes.shiny/product_item.php?id=9">ORDER NOW</a>
               </div>
            </div>
            <div class="col-xs-12 col-md-6">
               <img src="./img/store/explosionbox.jpg" alt="" style="width:90%; align-items: center;">
            </div>
      </div>


<div class="view-window" style="background-image:url(./img/store/gifts3.jpg)">
       <div class="textblock">
      <h2>
      Making your gifting experience a memorable one</h2>
      <div class="btn cta_primary">
         <a href="product_list.php">START SHOPPING</a>     
      </div>
      </div>
   </div>

<div class="container">
      <h2>Explore our new products</h2>

      <?php recommendCategory('home decor'); ?>
   </div>

<div class="container">
   <div class="display-flex">
      <div class="flex-stretch">
      </div>
      <div class="flex-none">
         <div class="btn borderbutton">
         <a href="./admin/index.php">PRODUCTS ADMIN</a>
         </div> 
      </div>
   </div>          
</div>

<?php include "parts/footer.php" ?>

</body>
</html>