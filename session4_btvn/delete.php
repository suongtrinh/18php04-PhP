<!DOCTYPE html>
<html>
<head>
	<title>delete</title>
</head>
<body>
	<?php
 	include 'connect.php';
 	$id = $_GET['id'];
 	$sql = "DELETE FROM product1 WHERE id = $id";
 	mysqli_query($connect, $sql);
 	header("Location: list.php");
?>
</body>
</html>
