
<?php
 $chickennuggets_price = $_POST['chickennuggets_price'];
 $chickensandwich_price = $_POST['chickensandwich_price'];
 $frenchfries_price = $_POST['frenchfries_price'];
 $quantity = $_POST['quantity'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta content="" name="description">
        <meta content="" name="keywords">

        <!--Main CSS for the layout-->
        <link rel="stylesheet" href="css/chick_fil_a_check_out.css">

        <link rel="icon" type="image/png" href="images/favicon-32x32.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

        <title> Check-Out Form | Chick Fil-A</title>
    </head>

    <body>
        <main>
        <div class="topnav">
        <img src="images/chick fil a.png" class="logo" width="80px" height="80px">
        <a class="active" href="index.html">Menu</a>
        <i class="fa-solid fa-cart-shopping" style="color:red"></i>
        </div>
        <div id="data">
        <div class="container">
        <form action="Order_Details.php" method="post">
        <label class="cardholder">Name on card</label>
        <input type="text" class="cardholder_field" name="cardholder_name" placeholder="Cardholder name"><br>
        <label class="creditcard">Card Number</label>
        <input type="text" class="credit_card_field" name="credit_card" placeholder="card number"><br>
        <label class="expirationdate">Expiry Date</label>
        <input type="text" class="expiration_field" name="expiration_field" placeholder="MM/YY"><br>
        <label class="cvv">CVV Code</label>
        <input type="text" class="cvv_field" name="cvv_code" placeholder="Security Code"><br>
        <label class="zipcode">Zip Code</label>
        <input type="text" class="zipcode_field" name="zip_code" placeholder=""><br>
        <input type="hidden" name="chickennuggets_price" value="<?php echo $chickennuggets_price; ?>">
        <input type="hidden" name="quantity" value="<?php echo $quantity; ?>">
        <button type="submit" class="btn-view">Done</button>
        </form>
    </div>
        </main>
    </body>
    </html>