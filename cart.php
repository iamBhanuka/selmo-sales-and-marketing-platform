<?php
  session_start();
  if (!(isset($_SESSION["type"]) && $_SESSION["type"] == 0)) {
    header('Location: view_products.php');
  }
  $connect = mysqli_connect("localhost", "root", "", "project"); 


?>
<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
		<?php include('header.php'); ?>
  <br><br><br><br>
  <?php     echo "<a href='processes/clear_cart.php'><input type='button' class='login' value='CLEAR CART' style='float:right;margin-right:100px'></a>"; ?>
  <br><br><br><br>
	<center><h1 id="cart">Order Details</h1></center> 
  <div>
<?php
    $total = 0;
    $connect = mysqli_connect("localhost","root","","project");
    $sesuid = $_SESSION['uid'];
    $sql = "SELECT * FROM cart WHERE uid='$sesuid' ";
    $query = mysqli_query($connect, $sql);
    $num = mysqli_num_rows($query);
    echo "
    <center>
    <table bgcolor='white' border='1px'>
      <tr>
        <th>No</th>
        <th>Item Name</th>
        <th>Price</th>
        <th>Remove</th>
      </tr>";
    for ($i=0; $i < $num ; $i++) { 
      $result = mysqli_fetch_array($query);
      $temp = $result['price'];
      $total = $total + $temp;
      echo "<tr>";
      echo "<td>" . $result['no'] . "</td>";
      echo "<td>" . $result['name'] . "</td>";
      echo "<td> Rs. " . $result['price'] . "</td>";
      echo '<td><a href="processes/remove_cart.php?no=' . $result['pid'] . '"><input type="button" class="login" value="Remove"></a></td>';
    }
    echo "
      </tr>
    </table></center>";
    echo "<br><br><br><br>";
    echo "<center><h1>TOTAL:  $total /=</h1></center>";
    echo "<center><a href='checkout.php'><input type='button' class='login' value='CHECKOUT'></a></center>";
    
  ?>
                  </div>

</body>
</html>