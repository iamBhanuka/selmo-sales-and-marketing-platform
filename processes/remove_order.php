<?php 
    session_start();
    //$orderId = $_GET['orderId'];  
    //$connect = mysqli_connect("localhost","root","","project");
    //$sql = "DELETE FROM `orders` WHERE `orders`.`orderId` ='$orderId'";
    //$query = mysqli_query($connect, $sql) or die("failed to query database".mysqli_error($connect));;
    echo "<script>alert('Order Completed!!')</script>";
    echo "<script>setTimeout(\"location.href =  '../view_orders.php';\",0);</script>";

                
   // if($query){
    //} else {
     //   echo $no;
    //}

?>