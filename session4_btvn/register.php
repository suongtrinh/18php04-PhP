<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="search.php" method="post">
		<input type="text" name="txtWord"/>
		<input type="submit" value="Tìm kiếm" name="Search"/>
	</form>
</html>
	<?php 
		include 'connect.php'; 
		if(isset($_POST['submit'])) {
			$name = $_POST['name'];
			$price = $_POST['price'];
			$description = $_POST['description'];
			$sql = "INSERT INTO product1(name,price,description) VALUES ('$name','$price','$description')";
			mysqli_query($connect, $sql);
			header("Location: list.php");
		}	
	?>
	<h1>Products</h1>
	<form action="#" name="product1" method="POST">
		<p>Name: <br>
			<input type="text" name="name"></p>

		<p>Price: <br>
			<input type="text" name="price"></p>

		<p>Description: <br>
			<input type="text" name="description"></p>

		<p><input type="submit" name="submit" value="Login"></p>
	</form>
</body>
</html>