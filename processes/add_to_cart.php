<?php
session_start();

  $connect = mysqli_connect("localhost","root","","project");
if(isset($_GET['pid'])){
    $varpid = $_GET['pid'];
    $varsesid = $_SESSION['uid'];
    $sql = "UPDATE products SET status='1' WHERE pid='$varpid'";
    $select = "SELECT name,price FROM products WHERE pid=$varpid";
    
    $query = mysqli_query($connect,$select);
    $result = mysqli_fetch_array($query);
    $varname = $result['name'];
    $varprice = $result['price'];

    $tocart = "INSERT INTO cart VALUES(NULL,'$varsesid','$varname','$varprice','$varpid')";

    $query2 = mysqli_query($connect,$tocart) or die("failed to query database".mysqli_error($connect));
    $query3 = mysqli_query($connect, $sql);




}
 if($query2){
        header('Location: ../view_products.php');
    } else {
    }
?>

