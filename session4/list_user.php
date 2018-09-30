<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List</title>
</head>
<body>
	<?php
	include 'kn.php';
	$sql ="SELECT * FROM user3";
	$result = mysqli_query($connect, $sql);
	?>
	<a href="regsister.php">Register</a>
	<h1>List user</h1>
	<?php
	if ($result->num_rows > 0){
		while ($row = $result ->fetch_assoc()) {
			$id = $row['id'];
			echo $row['user'].' - '.$row['pass'];
			echo " <a href='delete.php?id=$id'>DELETE</a>";
			echo "br";
		}
	}
	?>
</body>
</html>