<?php

include_once "lib/php/functions.php";

?><!DOCTYPE html>
<html lang="en">
<head>
   <title>Product Checkout</title>

   <?php include "parts/meta.php" ?>
</head>
<body>


   <div class="container">
      <div class="card soft">
         <h2>Product Checkout 2/2</h2>

            
         </div>

         <div>
            <form style="margin:2em">
               <h3>Payments</h3>
               <div class="form-control">
               <input type="text" name="Card Number" placeholder="Card Number" class="form-input">
               </div>

               <div class="form-control">
               <input type="text" name="Name on card" placeholder="Name on Card" class="form-input">
               </div>

               <div class="form-control">
               <input type="text" name="county" placeholder="Select Country" class="form-input">
               </div>

               <div class="form-control">
               <input type="date" name="Valid" placeholder="Valid Until" class="form-input">
               </div>
               
               <div class="form-control">
               <input type="Number" name="Name" placeholder="Security Code" class="form-input">
               </div>
            </form>
            
         </div>


      <div class="display-flex">
         <div class="form-button flex-none"><a href="product_checkout.php">BACK</a>
         </div>
         <div class="flex-stretch"></div>
         <div class="form-button flex-none"><a href="product_actions.php?action=reset-cart">PAY NOW</a>
         </div>
      </div>

      </div>
   </div>

</body>
</html>