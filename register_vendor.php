<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign Up Vendor</title>
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
  <h1>vendor sign up</h1>
  <p>Are you a customer? <a href="./register.php">Sign up here</a></p>
  <input type="text" name="username" id="username" placeholder="Your Name" required="true">
  <input type="email" name="email" id="email" placeholder="Your Email" required="true">
  <input type="number" name="tp" id="tp"placeholder="Your Mobile Number" required="true">
  <input type="password" name="password" id="password" placeholder="New password" required="true">
  <input type="password" name="cpassword" placeholder="Confirm password" required="true">
  <input type="hidden" name="type" value="1">

  <input type="submit" name="" value="Sign up">
</form>



  </body>
</html>
