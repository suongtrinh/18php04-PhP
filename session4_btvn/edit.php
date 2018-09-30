<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product</title>
</head>
<body>
	<?php
		include 'connect.php';
		$id = $_GET['id'];
		if(isset($_POST['submit'])){
			$name = $_POST['name'];
			$price = $_POST['price'];
			$description = $_POST['description'];
			$sql = "UPDATE product1 SET name = '$name',price = '$price',description = '$description' WHERE id = $id";
			mysqli_query($connect, $sql);
			header("Location: list.php");
		}
	?>
	<h1> EDIT </h1>
	<form action="#" name="product1" method="POST">
		<p>Name:<input type="text" name="name"></p>

		<p>Price:<input type="text" name="price"></p>

		<p>Description:<input type="text" name="description"></p>

		<p><input type="submit" name="submit" value="UPDATE"></p>
	</form>
</body>
</html>