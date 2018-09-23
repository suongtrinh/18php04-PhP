
	/*
	Bài tập: Cho danh sách 2 sản phẩm
		Iphone X: Giá 30 triệu, Hình ảnh iphonex.jpg, 
		Mô tả iphoneX
		J7 prime: Giá 6 triệu, Hình ảnh j7prime.jpg, 
		Mô tả J7 prime
		Ex: iphonex => array(‘name’ => ‘IphoneX’, ‘image’ => ‘iphonex.jpg’,
		‘description’ => ‘Dòng điện thoại mới của Apple..’);
		- Hiển thị danh sách sản phẩm ra
		- Thêm giảm giá 10% cho iphoneX và 15% cho J7 prime
		- Hiển thị danh sách sản phẩm ra có thông tin giá sau khi giảm
		- Đổi hình ảnh của iphoneX sang iphoneXplus.jpg
		- Thêm sản phẩm Xiaomi với các thông tin đầy đủ như 2 sản phẩm trên
		- Xóa J7 prime ra khỏi danh sách
	*/
	
<?php 
	$products = array(
		'iphonex' => array(
			'name' => 'iPhoneX',
			'price' => 30000000,
			'image' => 'iphonex.jpg',
			'description' => 'Apple model',
			),
		'j7prime' => array(
			'name' => 'J7 prime',
			'price' => 6000000,
			'image' => 'j7prime.jpg',
			'description' => 'Samsung model',
			)
		);
	function showImage($image) {
		return "<img src ='$image' alt=''>";
	}
	function priceDiscount($price, $discount) {
		return $price * (100 - $discount);
	}
	function listProduct($products) {
		$i = 1;
		foreach ($products as $key => $value) {
			if(isset($value['discount'])){
				echo $i.' - '. $value['name'].' - '. $value['price'].' - '. showImage($value['image']).' - '. $value['description'].' - '. priceDiscount($value['price'], $value['discount'])."<br>";
			}else{
				echo $i.' - '. $value['name'].' - '. $value['price'].' - '. showImage($value['image']).' - '. $value['description']."<br>";
			}
			
		}
	}
	
	listProduct($products);
	//them giam gia
	$products['iphonex']['discount'] = 10;
	$products['j7prime']['discount'] = 15;
	echo "<br>-------------<br>";
	listProduct($products);
	// doi anh iphoneX
	$products['iphonex']['image'] = 'iphonexplus.jpg';
	echo "<br>-------------<br>";
	listProduct($products);
	$xiaomi = array(
		'xiaomi' => array(
				'name' => 'Xiaomi',
				'price' => 3000000,
				'image' => 'xiaomi.jpg',
				'description' => 'Xiaomi model',
				'discount' => 30
			)
		);
	$newProducts = array_merge($products, $xiaomi);
	echo "<br>-------------<br>";
	listProduct($newProducts);
	// Xoa j7 prime
	unset($newProducts['j7prime']);
	echo "<br>-------------<br>";
	listProduct($newProducts);
?>
