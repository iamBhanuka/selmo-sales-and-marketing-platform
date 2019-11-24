<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
      body{
        background-image: url(images/10.jpg);
        background-size: cover;
      }
    </style>

  </head>
  <body>
<?php include('header.php'); ?>

<br><br><br><br>
<form name="reg-form" class="reg-box" action="processes/registerpro.php" method="post">
  <h1>customer sign up</h1>
  <p>Are you a vendor? <a href="./register_vendor.php">Sign up here</a></p>
  <input type="text" name="username" id="username" placeholder="Your Name" required="true" autofocus>
  <input type="text" name="email" id="email" placeholder="Your Email" required="true">
  <input type="text" name="tp" id="tp"placeholder="Your Mobile Number" required="true">
  <input type="password" name="password" id="password" placeholder="New password" required="true">
  <input type="password" name="cpassword" placeholder="Confirm password" required="true">
  <input type="hidden" name="type" value="0">

  <input type="submit" name="" value="Sign up">
</form>



  </body>
</html>

