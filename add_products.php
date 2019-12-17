<?php
  session_start();
  if (!(isset($_SESSION["type"]) && $_SESSION["type"] == 1)) {
    header('Location: index.php');
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add Products</title>
            <link rel="stylesheet" href="css/style.css">

  </head>
  <body>
    <?php include('header.php'); ?>


<br><br><br><br><br><br><br><br>
<div>
    <form class="reg-box" action="processes/add_productspro.php" method="post" enctype="multipart/form-data">
            <h1>Add product</h1>
            <input type="text" name="pname" id="pname" placeholder="Product Name" required="true">
            <textarea class="textbox" size=40px name="pdescription" id="pdescription" placeholder="Description" required="true"></textarea>

            <input type="text" name="price" id="pprice" placeholder="Price" required="true">
            <p align="left">ADD PRODUCT IMAGE:</p><p><input type="file" name="image" required="true"></p>
            <input type="submit" name="upload" value="Add Product">

    </form>

</div>>

  </body>
</html>
