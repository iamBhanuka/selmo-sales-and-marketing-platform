<?php 
	if (isset($_POST['upload'])) {
		if (isset($_POST['upload'])) {
			if (getimagesize($_FILES['image']['tmp_name'])==FALSE) {
				echo "failed";
			}else{
					$name = $_POST['pname']; #addslashes($_FILES['image']['name']);
					$image = base64_encode(file_get_contents(addslashes($_FILES['image']['tmp_name']))); 
					$description = $_POST['pdescription'];
					$price = $_POST['price'];

					saveproduct($name, $description, $price, $image);

					

			}
		}
	}

	function saveproduct($name, $description, $price,$image){
		session_start();
		$uid = $_SESSION["uid"];
				$connect = mysqli_connect("localhost","root","","project");
				$sql = "insert into products values (NULL, '$name','$description','$price','$image', 0, '$uid')";
				$query = mysqli_query($connect, $sql);
				
				if($query){

						echo "<script>alert ('Product added successfully');</script>";
						echo "<script>setTimeout(\"location.href =  '../add_products.php';\",0);</script>";

					}else{
						echo "<script>alert ('Error adding product');</script>";

					}
				


	}


 ?>