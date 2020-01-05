<?php 
session_start();

	$uid = $_SESSION['uid'];
    $connect = mysqli_connect("localhost","root","","project");
    $sql = "DELETE FROM cart WHERE uid='$uid'";
	$query = mysqli_query($connect, $sql);
				
    if($query){
        header('Location: ../view_products.php');
    } else {

    }
    

 ?>