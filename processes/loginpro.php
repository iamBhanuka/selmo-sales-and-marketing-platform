<?php 
	$email = $_POST["email"];
	$password = $_POST["pass"];


	$connect = mysqli_connect("localhost","root","","project");
	
	$result = mysqli_query($connect,"select * from users where email='$email' and password='$password'") or die("failed to query database".mysql_error());
	$row = mysqli_fetch_array($result);
	if ($row['email']== $email && $row['password']== $password) {
		session_start();
		$_SESSION['uid'] = $row['uid']; 
		$_SESSION['name'] = $row['name']; 
		$_SESSION['type'] = $row['type']; 
		header('Location: ../index.php');
		
	}else{
		echo "<script>alert ('Email/Password Incorrect !!');</script>";
		echo "<script>setTimeout(\"location.href =  '../login.php';\",0);</script>";
		
	}


 ?>