<?php
  session_start();
  if (!(isset($_SESSION["type"]) && $_SESSION["type"] == 2)) {
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
  <body background="Images/5.jpg">
  	
  <?php include('header.php'); ?>

	<br><br><br><br>


  <div>
  <?php
    $connect = mysqli_connect("localhost","root","","project");
		$sql = "select * from products";
		$query = mysqli_query($connect, $sql);
		$num = mysqli_num_rows($query);
		echo "<center>
    <table class='admin_view_product_table'>
            <h1>PRODUCTS</h1>
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
      echo '<td align=center><img id="img" width="200px" src="data:image;base64,' .$img.'"></td>';
      if ($result['status'] == 0) {
        echo "<td>Available</td>";
      } else {
        echo "<td>Out of stock</td>";
      }
			echo '<td><a href="processes/delete_product.php?pid=' . $result['pid'] . '"><input type="button" class="login" value="Delete"></a></td>';
			echo "</tr>";
		}
		echo "
			</tr>
    </table></center>";
  ?>
	</div>

  </body>
</html>
