<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		include 'connect.php';
		$sql = "SELECT * FROM product1";
		$result = mysqli_query($connect, $sql);
	?>
	<a href="register.php">Register</a>
	<h1>List users</h1>
	<?php 
		if($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				$id = $row['id'];
				echo $row['id'].' - '.$row['name'].' - '.$row['price'].' - '.$row['description'];
				echo " <a href='edit.php?id=$id'> EDIT </a>";
				echo " <a href='delete.php?id=$id'> DELETE </a>";
				echo "<br>";
			}
		} 
	?>
</body>
</html>