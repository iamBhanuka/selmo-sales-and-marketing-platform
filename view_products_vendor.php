<?php
  session_start();
  if (!(isset($_SESSION["type"]) && $_SESSION["type"] == 1)) {
    header('Location: login.php');
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>View Products</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">


  </head>
  <body background="Images/4.jpg">
  <?php include('header.php'); ?>
	<br><br><br><br>

  <div >
  <?php
		$uid = $_SESSION['uid'];
    	$connect = mysqli_connect("localhost","root","","project");
		$sql = "select * from products where uid='$uid'";
		$query = mysqli_query($connect, $sql);
		$num = mysqli_num_rows($query);
		echo "
		<center>
		<h1>PRODUCTS</h1>
		<table class='view_vendors_products_table'>
			<tr>
				<th>Name</th>
				<th>Description</th>
				<th>Price</th>
				<th>Image</th>
				<th>Status</th>
				<th>Action</th>
			</tr>";
		for ($i=0; $i < $num ; $i++) { 
			$result = mysqli_fetch_array($query);
			$img=$result['image'];
			echo "<tr>";
			echo "<td>" . $result['name'] . "</td>";
			echo "<td>" . $result['description'] . "</td>";
			echo "<td> Rs. " . $result['price'] . "</td>";
      echo '<td><img class="img" width="200px" src="data:image;base64,' .$img.'"></td>';
      if ($result['status'] == 0) {
        echo "<td>Available</td>";
      } else {
        echo '<td>Out of stock<br><a href="processes/add_again.php?pid=' . $result['pid'] . '"><input type="button" value="Add Stock" name="add_stock"></td>';

      }
			echo '<td><a href="processes/delete_product_vendor.php?pid=' . $result['pid'] . '"><input type="button" class="login" value="Delete"></a></td>';
			echo "</tr>";
		}
		echo "
			</tr>
    </table></center>";
  ?>
	</div>
	
  </body>

</html>
