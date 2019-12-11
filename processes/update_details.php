<?php 

session_start();
  $connect = mysqli_connect("localhost","root","","project");
  $uid = $_SESSION['uid'];

  $sql = "UPDATE users SET name='" . $_POST['name'] . "', email='" . $_POST['email'] . "',
    tp='" . $_POST['tp'] . "', password='" . $_POST['pass'] . "' where uid='$uid'";

  $query =  mysqli_query($connect,$sql);

  $query =  mysqli_query($connect,$sql);

  	echo "<script>alert ('User Details Updated');</script>";
	echo "<script>setTimeout(\"location.href =  '../index.php';\",0);</script>";

 ?>