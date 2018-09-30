<?php
 	include 'kn.php';
 	$id = $ GET[ 'id'];
 	$sql = "DELETE FROM user3 WHERE id = $id";
 	mysqli_query($connect, $sql);
?>

