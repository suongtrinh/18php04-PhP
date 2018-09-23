<?php
	// comment PHP
	/*
		comment PHP
		http://localhost/18php04-PhP/session%201/hello.php
	*/
		echo "Hello My Suong!!";
		echo "<br>";
		$userName = "Hello"	;
		echo $userName;
		function myFunction(){
		echo "<br>";
		$a = 5;
		return $a;
		}
		echo myFunction();

	/*
		BT: viết hàm tính tổng 2 số. có 2 tham số truyền vào và trả về giá trị tổng
	*/	
		echo "<br>";
		$a = 5;
		$b = 4;
		function mySum($a,$b){
		return $a + $b;
		}
		echo "<br>";
		echo mySum( 4, 5);

	/*
		BT2: tiếp tục kết quả trả về tổng của bài tập 1. kiểm tra tổng đó chẳn hay lẻ
	*/
		echo "<br>";
		if (mySum($a,$b)%2==0)
		{
			echo "so nay la chan";

		}else if (mySum($a,$b)%3==0)
		{
			echo "chia het cho 3";
		}
		else{
			echo "le";
		}
	///////////////
		echo "<br>";
		$total = mySum(5, 6);
		if ($total %2 == 0){
			echo "Tong la so chan";
		} elseif ($total %3 == 0){
			echo "Tong la so le va chia het cho 3";
		} else {
			echo "Tong la so le va khong chia het cho 3";
		}

	/////////////
	echo "<br>";
	$dieukien = true;
	if ($dieukien) {
		// nếu đúng thì thực hiện lệnh này
	} elseif {
		// nếu điều kiện sai thì thực hiện lệnh này
	}

	echo "<br>";
	echo "<br>";
	echo "<br>";
	/*
		BT3: với 1 số cho trước có giá trị từ 1 đến 12. với số đó, in ra số ngày của tháng trước tương ứng sử dụng switch case
	*/
	$n = 3;
	switch ($n) {
		case '1':
		case '3':
		case '5':
		case '7':
		case '8':
		case '10':
		case '12':
			echo " nhung $n co 31 ngay";
			break;
		case '4':
		case '6':
		case '9':
		case '11':
			echo " nhung $n co 30 ngay";
			break;
		case '2':
			echo " $n nam nhuan co 29 ngay";
			break;
		default:
			echo " $n nam k co nhuan 28 ngay";
			break;
	}

?>
