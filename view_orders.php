<?php
  session_start();
  if (!(isset($_SESSION["type"]) && $_SESSION["type"] == 2)) {
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

  <br><br><br><br>
	<center><h1 id="cart">Order Details</h1></center> 
  <div>
<?php
    $connect = mysqli_connect("localhost","root","","project");
    $uid = $_SESSION['uid'];
    $sql = "SELECT * FROM orders ";
    $query = mysqli_query($connect, $sql);
    $num = mysqli_num_rows($query);
    echo "
    <center>
    <table bgcolor='white' border='1px'>
      <tr>
        <th>No</th>
        <th>Name</th>
        <th>TP</th>
        <th>Address</th>
        <th>Status</th>
      </tr>";
    for ($i=0; $i < $num ; $i++) { 
      $result = mysqli_fetch_array($query); 
      echo "<tr>";
      echo "<td>" . $result['orderId'] . "</td>";
      echo "<td>" . $result['name'] . "</td>";
      echo "<td>  " . $result['tp'] . "</td>";
      echo "<td> " . $result['delivery'] . "</td>";
      echo '<td><a href="processes/remove_order.php?no=' . $result['orderId'] . '"><input type="button" class="login" value="Complete"></a></td>';
      echo '<script>alert($orderId)</script>';

    }
    echo "
      </tr>
    </table></center>";
    echo "<br><br><br><br>";

    
  ?>
                  </div>

</body>
</html>