<?php
	/// khai báo 1 mảng
	$arr = array();
	$arr = array('Suong', 'Nhu Y', 'Tai','Minh','Thang');
	$arr1 = array(0 => 'Nhu Y', 1 => 'Suong', 2 => 'Tai');
	$arr2 = array('nhuy' => 'Nhu Y', 'suong' => 'Suong', 'tai' => 'Tai');
	var_dump($arr);
	var_dump($arr1);
	var_dump($arr2);	
	foreach ($arr as $key => $value) {
		echo $value;
		echo "<br>";
	}
	foreach ($arr1 as $key => $value) {
		echo $value;
		echo "<br>";
	}
	foreach ($arr2 as $key => $value) {
		echo $value;
		echo "<br>";
	}
	//console.log();
	array_push($arr, 'Minh');
	var_dump($arr);

	array_pop($arr1);
	var_dump($arr1);

	unset($arr2['tai']);
	var_dump($arr2);

	$arr3 = array_merge($arr1, $arr2);
	var_dump($arr2);

	echo "//////////<br> my Class <br>";
	$myClass = array();
	array_push($myClass,'Tuan');
	array_push($myClass, 'Tai');
	var_dump($myClass);
	$arrMyClass = array(
		'suong' => array(
				'name' => 'Suong',
				'age'  => 22,
				'gender' => 'female',
				'phone' => '0929...'
			),
		'nhu y' => array(
				'name' => 'Nhu Y',
				'age'  => 21,
				'gender' => 'male',
				'phone' => '0961...'
			),
		'minh' => array(
				'name' => 'Minh',
				'age'  => 24,
				'gender' => 'male',
				'phone' => '0961...'
			),
		'tai'   => array(
				'name' => 'Tai',
				'age'  => 23,
				'gender' => 'male',
				'phone' => '0905...'
			)
		);
	var_dump($arrMyClass);
	// 1. Suong - 22 tuoi - Nu - 0929...
	// 2. Nhu Y - 21 tuoi - Nu - 0961...
	// 3. Tai - 23 tuoi - Nam - 0905...
	// 2. Minh - 24 tuoi - Nam - 0961...

	// thêm bạn Vuong, 25 tuổi, nam, 0967....vào danh sách lớp
	// đổi số điện thoại của bạn như ý là 0125...
	// xóa bạn Tài khỏi danh sách lớp

	echo "-------------<br>";
	function changeGenderVi($gender){
		return $gender == 'male'?"Nam":"Nu";
	}
	$i = 1;
	foreach ($arrMyClass as $key => $value) {
		echo $i. ' - '.$value['name'].' - '.$value['age'].'tuoi'. ' - '.changeGenderVi($value['gender']).' - '.$value['phone'];
		echo "<br>";
		$i++;
	}
	echo "<br>";
	listClass($arrMyClass);
	// 1 - Nhy y - 20 tuoi - female - 0988...
	// 2 - Tuan - 21 tuoi - male - 0934...
	// 3 - Tai - 23 tuoi - male - 0905...
	$arrNewMember = array(
		'vuong'=> array(
				'name' => 'Vuong',
				'age'  => 25,
				'gender' => 'male',
				'phone' => '0978...'
			)
		);
	$arrNewClass = array_merge($arrMyClass, $arrNewMember);
	//var_dump($arrNewClass);
	echo "<br/>----------------<br/>";
	listClass($arrNewClass);
	echo $arrNewClass['nhuy']['phone'];
	$arrNewClass['nhuy']['phone'] = '0168...';
	echo "<br/>----------------<br/>";
	listClass($arrNewClass);
	
	unset($arrNewClass['tai']);
	echo "<br/>----------------<br/>";
	listClass($arrNewClass);

?>