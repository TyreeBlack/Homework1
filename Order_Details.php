<?php
$cardholder_name = $_POST['cardholder_name'];
$chickennuggets_price = $_POST['chickennuggets_price'];
$quantity = $_POST['quantity'];
$subtotal_result = $chickennuggets_price * $quantity;
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="" content="description">
        <meta name="" content="keywords">

        <link rel="stylesheet" href="css/orderdetails.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="icon" type="image/png" href="images/favicon-32x32.png">

        <title> Order Details | Chick Fil-A</title>

        <body>
            <main>
            <div class="topnav">
                <a class="active" href="index.html">Menu</a>
                </div>
                
                <div class="placeholder">
                <h1>1.Order Details:</h1>
                <span><?php echo $cardholder_name; ?></span>
                </div>
                <div class="placeholder-two">
                <h1 class="payment-details">2.Payment Details</h1>
                </div>
               <div class="container">
               <img src="images/chick fil a.png" class="logo" width="60px" height="60px">
                <p class="cart">Your cart from</p>
                <h3>Chick-fil-A</h3>
                <label class="order-summary">Order Summary (  items  )</label>
                <span class="food-items"><?php echo  $quantity; ?></span>
                 
               <button type="submit" class="btn-view">Place Order $7.99</button>
               <div class="hr-line" width="20%" size="10px"></div>
               <label class="sub_total">Subtotal:</label>
               <span class="subtotal"><?php echo $subtotal_result; ?></span>
               <label class="estimated_tax">Estimated Tax: </label>
               <div class="hr-line-two"></div>
             </div>
            </main>
           </body>
        </html>