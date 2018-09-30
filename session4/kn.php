<?php
	$server = 'localhost'; //$server = '127.0.0.1';
	$username = 'root';
	$password = ''; //$password = '';
	$database = '18php04-1';
	$connect = mysqli_connect($server, $username, $password, $database); // hàm trả về kết quả

	// check connection 
	if (mysqli_connect_errno()){ // hàm kết nối thành công 
		echo "Failed to conect to MySQL:" . mysqli_connect_errno();
	} else {
		echo "Connect success";
	}
?>