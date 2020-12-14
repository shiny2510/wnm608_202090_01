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
         <h2>Product Checkout 1/2</h2>

         <div>
            <form style="margin:2em">
               <h3>Contact Information</h3>
               <div class="form-control">
               <input type="text" name="Name" placeholder="Enter Name" class="form-input">
               </div>
               
               <div class="form-control">
               <input type="text" name="email" placeholder="Enter Email" class="form-input">
               </div>
            </form>
            
         </div>

         <div>
            <form style="margin:2em">
               <h3>Shipping Address</h3>
               <div class="form-control">
               <input type="text" name="Address" placeholder="Address" class="form-input">
               </div>

               <div class="form-control">
               <input type="text" name="city" placeholder="Select City" class="form-input">
               </div>

               <div class="form-control">
               <input type="text" name="county" placeholder="Select Country" class="form-input">
               </div>

               <div class="form-control">
               <input type="number" name="Zipcode" placeholder="Enter Zipcode" class="form-input">
               </div>
               
               <div class="form-control">
               <input type="number" name="Name" placeholder="Enter Phone Number" class="form-input">
               </div>
            </form>
            
         </div>


      <div class="display-flex">
         <div class="form-button flex-none"><a href="product_cart.php">CANCEL</a>
         </div>
         <div class="flex-stretch"></div>
         <div class="form-button flex-none"><a href="product_payment.php">PROCEED TO PAY</a>
         </div>
      </div>

      </div>
   </div>

</body>
</html>