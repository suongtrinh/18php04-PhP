
<?php
	function mySum($a = 0, $b = 0){
		return $a + $b;
	}
	$a = 3;
	$b = 5;
	$tong = mySum($a, $b);
	$dv = 0;
	if ($sum < 1000) {
		echo "tong  $tong";
		echo "<br>";
		$dv = $sum % 10;
		echo "gia tri cua $dv";
		echo "<br>";
		if ($dv % 2 == 0) {
			echo "So nay chan";
			echo "<br>";
		}elseif ($dv % 3 == 0) {
			echo "So nay le ";
			echo "<br>";
		}else
			echo "khong chia het cho 3 ";	
	}
 ?>
