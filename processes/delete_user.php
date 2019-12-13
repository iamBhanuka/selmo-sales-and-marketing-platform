<?php 
    $uid = $_GET['uid'];
    $connect = mysqli_connect("localhost","root","","project");
    $sql = "DELETE FROM users WHERE uid='$uid'";
	$query = mysqli_query($connect, $sql);
				
    if($query){
        header('Location: ../view_users.php');
    } else {
    }

?>