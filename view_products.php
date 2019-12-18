<?php
  session_start();
  if (!(isset($_SESSION["type"]) && $_SESSION["type"] == 0)) {
    header('Location: cart.php');
  }
  $connect = mysqli_connect("localhost", "root", "", "project"); 


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>View Products</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">

  </head>
  <body background="Images/6.jpg">
		<?php include('header.php'); ?>
	<br><br><br><br>

  <div >
  <?php
    $connect = mysqli_connect("localhost","root","","project");
		$sql = "select * from products where status=0";
		$query = mysqli_query($connect, $sql);
		$num = mysqli_num_rows($query);
		echo "
		<center>
		<table bgcolor='white' border='1px'>
			<tr>
				<th>Name</th>
				<th>Description</th>
				<th>Price</th>
				<th>Image</th>
				<th>Buy</th>
			</tr>";
		for ($i=0; $i < $num ; $i++) { 
			$result = mysqli_fetch_array($query);
			$img=$result['image'];
			echo "<tr>";
			echo "<td>" . $result['name'] . "</td>";
			echo "<td>" . $result['description'] . "</td>";
			echo "<td> Rs. " . $result['price'] . "</td>";
			echo '<td><img class="img" width="150px" height="150px" src="data:image;base64,' .$img.'"></td>';
			echo '<input type="hidden" name="hidden_name" value="<?php echo $result["name"]; ?>';  
            echo '<input type="hidden" name="hidden_price" value="<?php echo $result["price"]; ?>';
			echo '<td><a href="processes/add_to_cart.php?pid=' . $result['pid'] .'"><input type="button" name="buy" class="login" value="Add to Cart"></a></td>';
			echo "</tr>";
		}
		echo "
			</tr>
    </table></center>";
  ?>
	</div>

  </body>
</html>
