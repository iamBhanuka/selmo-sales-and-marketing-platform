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
    <title>View Users</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">

  </head>
  <body background="Images/5.jpg">

  <?php include('header.php'); ?>
	<br><br><br><br>

  <div >
  <?php
    $connect = mysqli_connect("localhost","root","","project");
		$sql = "select * from users where type=0";
		$query = mysqli_query($connect, $sql);
		$num = mysqli_num_rows($query);
		echo "
		<center>
		<h1>CUSTOMERS</h1>
		<table class='admin_view_users_table'>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Tp</th>
				<th>Action</th>
			</tr>";
		for ($i=0; $i < $num ; $i++) { 
			$result = mysqli_fetch_array($query);
			echo "<tr>";
			echo "<td align=center>" . $result['name'] . "</td>";
			echo "<td align=center>" . $result['email'] . "</td>";
			echo "<td align=center>" . $result['tp'] . "</td>";
			echo '<td align=center><a href="processes/delete_user.php?uid=' . $result['uid'] . '"><input type="button" class="login" value="Delete"></a></td>';
			echo "</tr>";
		}
		echo "
			</tr>
		</table></center>";
		
		$sql = "select * from users where type=1";
		$query = mysqli_query($connect, $sql);
		$num = mysqli_num_rows($query);
		echo "
		<center>
		<h1>VENDORS</h1>
		<table class='admin_view_vendors_table'>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Tp</th>
				<th>Action</th>
			</tr>";
		for ($i=0; $i < $num ; $i++) { 
			$result = mysqli_fetch_array($query);
			echo "<tr>";
			echo "<td align=center>" . $result['name'] . "</td>";
			echo "<td align=center>" . $result['email'] . "</td>";
			echo "<td align=center>" . $result['tp'] . "</td>";
			echo '<td align=center><a href="processes/delete_user.php?uid=' . $result['uid'] . '"><input type="button" class="login" value="Delete"></a></td>';
			echo "</tr>";
		}
		echo "
			</tr>
    </table></center>";
  ?>
	</div>

  </body>
</html>
