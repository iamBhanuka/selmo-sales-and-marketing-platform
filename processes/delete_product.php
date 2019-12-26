<?php 
    $pid = $_GET['pid'];
    $connect = mysqli_connect("localhost","root","","project");
    $sql = "DELETE FROM products WHERE pid='$pid'";
	$query = mysqli_query($connect, $sql);
				
    if($query){
        header('Location: ../view_products_admin.php');
    } else {
    }

?>