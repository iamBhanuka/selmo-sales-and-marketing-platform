<?php 
    $pid = $_GET['pid'];
    $connect = mysqli_connect("localhost","root","","project");
    // echo $pid;
    $sql = "UPDATE products SET status=0 WHERE pid='$pid'";
    // echo $sql;
	$query = mysqli_query($connect, $sql);
				
    if($query){
        header('Location: ../view_products_vendor.php');
    } else {
        
    }

?>