<?php 
	session_start();

 ?>
<!DOCTYPE html>
<html>
<head>
  <title>CHECKOUT</title>
  <link rel="stylesheet" type="text/css" href="css/checkout.css">
</head>
<body>

<?php include('header.php'); ?>

<br><br><br><br>
<form name="reg-form" class="checkout-box" action="processes/order_complete.php" method="post">
  <h1>checkout Details</h1>
  <input type="text" name="username" id="username" placeholder="Your Name" required="true" autofocus>
  <input type="text" name="email" id="email" placeholder="Your Email" required="true">
  <input type="text" name="tp" id="tp"placeholder="Your Mobile Number" required="true">
  <input type="text" name="delivery" id="delivery"placeholder="Delivery Address" required="true">
  <input type="hidden" name="type" value="0">

  <input type="submit" name="" value="Confirm">
</form>


</body>
</html>