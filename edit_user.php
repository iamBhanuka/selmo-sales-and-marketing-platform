<?php 
  session_start();

  $uid = $_SESSION["uid"];
  $connect =  mysqli_connect("localhost","root","","project");

  $sql = "SELECT * from users where uid = $uid";

  $query = mysqli_query($connect,$sql);
  $num = mysqli_num_rows($query);
  $result = mysqli_fetch_array($query);

if($num){
}else{
  die("failed to query database".mysqli_error($connect));
 }

 ?>



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
<form name="reg-form" class="reg-box" action="processes/update_details.php" method="post">
  <h1>Edit User Details</h1>
  <input type="text" name="name" id="name" value="<?php echo $result['name']; ?>" required>
  <input type="email" name="email" id="email" value="<?php echo $result['email']; ?>" placeholder="Your Email" required>
  <input type="number" name="tp" id="tp" value="<?php echo $result['tp']; ?>" placeholder="Your Mobile Number" required>
  <input type="password" name="pass" id="pass" placeholder="Password" value="<?php echo $result['password']?>" required>
  <input type="password" name="con_pass" id="con_pass" placeholder="Confirm Password" value="<?php echo $result['password']?>" required>
  <input type="hidden" name="type" value="0">

  <input type="submit" name="" value="Update">
</form>



  </body>
</html>

