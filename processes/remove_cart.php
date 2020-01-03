<?php 
    session_start();
    $no = $_GET['no'];  
    $connect = mysqli_connect("localhost","root","","project");
    $sql = "DELETE FROM cart WHERE pid=$no";
    $sql2 = "UPDATE products SET status='0' WHERE pid='$no'";

    $query = mysqli_query($connect, $sql) or die("failed to query database".mysqli_error($connect));
    $query2 =  mysqli_query($connect, $sql2);
                
    if($query){
        header('Location: ../cart.php');
    } else {
        echo $no;
    }

?>