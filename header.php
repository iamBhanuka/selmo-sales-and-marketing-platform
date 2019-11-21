	<header>
		<style type="text/css">
  					@import url("css/header.css");
		</style>
		<div class="container">
			<h1 align="left" id="logo">SELMO</h1>

			<nav>
				<ul>
					<li><a href="index.php" id="home">HOME </a></li>
					<li><a href="contact.php">Contact us</a></li>
					<li><a href="about.php">About Us</a></li>
					<?php if (isset($_SESSION['type'])) {
						if ( $_SESSION['type'] == 1) { ?>
							<li><a href="./add_products.php">Add Products</a></li>
							<li><a href="./view_products_vendor.php">Products</a></li>

					<?php } else if ( $_SESSION['type'] == 2) { ?>
							<li><a href="./view_products_admin.php">View Products</a></li>
							<li><a href="./view_users.php">View Users</a></li>
							<li><a href="view_orders.php">Orders</a></li>

					<?php } else if ( $_SESSION['type'] == 0) { ?>
							<li><a href="./view_products.php">View Products</a></li>
							<li ><a href='cart.php'><img id='cart-img' src='images/newcart.png'></a></li>
					<?php } 
					} ?>

					<?php if (!isset($_SESSION['name'])) { ?>
						<li><a href="login.php"><input type="button" class="login" name="" value="Login"></a></li>
						<li><a href="register.php"><input type="button" class="login" name="" value="Signup"></a></li>
					<?php } else { ?>

						<li><a href="#"><input type="button" class="login" name="" value="Logout" onclick="check()"></a></li>
						<li style="color: white;">Hello, <?php echo ($_SESSION['name']) ?><br><br><a href="edit_user.php">Edit Profile</a></li>

					<?php } ?>
						<li ><a href='help.php'><img id='help-img' src='images/help.png'></a></li>


					

					
					
				</ul>
			</nav>
		</div>	
	</header>

	<script type="text/javascript">
		function check(){
			var test = confirm("Are you sure, you want to logout?");
			if (test==true) {
				setTimeout(location.href =  'processes/logoutpro.php',0);
			}
			
		}
		
	</script>