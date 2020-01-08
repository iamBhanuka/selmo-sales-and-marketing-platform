<?php 
	session_start();
	$uid = $_SESSION['uid'];

	$con = mysqli_connect("localhost","root","","project");
	$sql = "SELECT * FROM cart WHERE uid='$uid'";
	$query =  mysqli_query($con,$sql);

	if ($query) {
		$num = mysqli_num_rows($query);
		for ($i=0; $i < $num; $i++) { 
			$result = mysqli_fetch_array($query);
			$no = $result['no'];
			$name = $result['name'];
			$price = $result['price'];
			$pid = $result['pid'];
			$sql2  = "INSERT INTO cart2 VALUES (NULL,'$uid','$name','$price','$pid')";
			$sql3 = "DELETE FROM cart WHERE no='$no' ";
			$query2 = mysqli_query($con,$sql2);
			$query3 = mysqli_query($con,$sql3);
		}
	}

	$username = $_POST['username'];
	$email = $_POST['email'];
	$tp = $_POST['tp'];
	$delivery = $_POST['delivery'];

	$sql4 = "INSERT INTO orders VALUES (NULL,'$uid','$username','$email','$tp','$delivery')";
	$query4 = mysqli_query($con,$sql4);


	echo "<script>alert ('Order Placed Sucess!');</script>";
	echo "<script>setTimeout(\"location.href =  '../index.php';\",0);</script>";
 ?>