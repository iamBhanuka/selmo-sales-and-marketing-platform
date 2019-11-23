<?php 
  session_start();
  if (isset($_SESSION["name"])) {
    header('Location: index.php');
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
      body{
        background-image: url(images/7.jpg);
        background-size: cover;
      }

    </style>
  </head>
  <body>
    <?php include('header.php'); ?>

<form class="log-box" action="processes/loginpro.php" method="post">
  <h1>Login</h1>
  <input type="email" name="email" id="email" placeholder="Email" required="true" autofocus>
  <input type="password" id="pass"name="pass" placeholder="Password" required="true">
  <input type="submit" name="" value="Login">
  <p>New User? <a href="register.php">Create an account</a></p>
</form>
  </body>
</html>
