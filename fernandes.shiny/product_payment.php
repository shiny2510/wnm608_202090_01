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
      <div class="card">
         <h2>Product Checkout 2/2</h2>


         <div>
            <form style="margin:2em">
               <h3>Payments</h3>
               <div class="form-control">
               <label class="form-label">Card Number</label>
               <input type="text" name="Card Number" placeholder="Enter Card Number" class="form-input">
               </div>

               <div class="form-control">
               <label class="form-label">Card Name</label>
               <input type="text" name="Name on card" placeholder="Enter Name on Card" class="form-input">
               </div>

               <div class="form-control">
               <label class="form-label">Country</label>
               <input type="text" name="county" placeholder="Select Country" class="form-input">
               </div>

               <div class="form-control">
               <label class="form-label">Valid Intil</label>
               <input type="date" name="Valid" placeholder="Valid Until" class="form-input">
               </div>
               
               <div class="form-control">
               <label class="form-label">Security Code</label>
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