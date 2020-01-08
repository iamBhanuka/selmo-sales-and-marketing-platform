<?php 
    $pid = $_GET['pid'];
    $connect = mysqli_connect("localhost","root","","project");
    $sql = "UPDATE products SET status='1' WHERE pid='$pid'";
	$query = mysqli_query($connect, $sql);
				
    if($query){
        header('Location: ../view_products.php');
    } else {
    }
    

?>