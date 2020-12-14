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
         <h2>Product Checkout 1/2</h2>

         <div class="card-section">
            <form>
               <h3>Contact Information</h3>
               <div class="form-control">
               <label class="form-label">Name</label>
               <input type="text" name="Name" placeholder="Enter Name" class="form-input">
               </div>
               
               <div class="form-control">
               <label class="form-label">Email-ID</label>
               <input type="text" name="email" placeholder="Enter Email" class="form-input">
               </div>
            </form>
            
         </div>

         <div class="card-section">
            <form>
               <h3>Shipping Address</h3>
               <div class="form-control">
               <label class="form-label">Address</label>
               <input type="text" name="Address" placeholder="Address" class="form-input">
               </div>

               <div class="form-control">
               <label class="form-label">City</label>
               <input type="text" name="city" placeholder="Select City" class="form-input">
               </div>

               <div class="form-control">
                  <label class="form-label">Country</label>
               <input type="text" name="country" placeholder="Select Country" class="form-input">
               </div>

               <div class="form-control">
               <label class="form-label">Zipcode</label>
               <input type="number" name="Zipcode" placeholder="Enter Zipcode" class="form-input">
               </div>
               
               <div class="form-control">
               <label class="form-label">Phone No</label>
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