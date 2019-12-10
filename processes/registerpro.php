<?php 

	$username = $_POST["username"];
	$email = $_POST["email"];
	$tp = $_POST["tp"];
	$password = $_POST["password"];
	$type = $_POST["type"];

	$connect = mysqli_connect("localhost","root","");
	mysqli_select_db($connect,"project");

	$result = mysqli_query($connect,"INSERT INTO users VALUES('NULL','$username', '$email', '$tp', '$password', '$type')") or die("failed to query database".mysqli_error($connect));
	if ($result) {

		echo "<script>alert ('Account Create Successfully !!');</script>";
		echo "<script>setTimeout(\"location.href =  '../login.php';\",0);</script>";
 	}


 ?>