<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SQL</title>
</head>
<body>
	<?php
		include 'kn.php';
		if(isset($_POST['submit'])){
			$user = $_POST['username'];
			$pass = $_POST['password'];
			$sql = "INSERT INTO user3(,user,pass) values('$user','$pass')"; // chèn dl vào database
			mysqli_query($connect, $sql); // thực thi câu lệnh đó

		}
	?>
	<h1>Register</h1>
	<form action="#" name="Register" method="post">
		<p>Tên đăng nhập:<input type="text" name="username"></p>


		<p>Mật khẩu:<input type="text" name="password"></p>
		<p><input type="submit" name="submit" value="Register"></p>
	</form>

</body>
</html>