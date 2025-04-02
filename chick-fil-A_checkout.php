<?php
$cardholder_name = $_POST['cardholder_name'];
$credit_card = $_POST['credit_card'];
is_numeric($credit_card);
if (!is_numeric($credit_card)) {
    $message = 'card number must be numeric values. ';
}
$expiration_field = $_POST['expiration_field'];
$cvv_code = $_POST['cvv_code'];

if (!is_numeric($cvv_code) || strlen($cvv_code) < 3 || strlen($cvv_code) > 4) {
   $message = 'The security can not be more than 3 or 4 digits.';
}
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

        <title> Order Details | Chick Fil-A</title>

        <body>
            <main>
            <div class="topnav">
                <a class="active" href="index.html">Menu</a>
                </div>
            
               <div class="container">
                <h1>1.Order Details<?php echo $cardholder_name; ?></h1>
               </div>
               <div class="container">
               <button type="submit" class="btn-view">Place Order $7.99</button>
               <p>Subtotal:<?php echo $subtotal_result; ?></p>
             </div>
            </main>
           </body>
        </html>