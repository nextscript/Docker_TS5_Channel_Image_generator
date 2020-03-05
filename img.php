<?PHP
	header("Content-type: image/png");
	if($_GET['sub'] != ''){
		$submax = 10 * $_GET['sub'];
		$image = imagecreatefrompng ( $_GET['img'] );
		$image1 = imagecreatetruecolor ( 960, 38 );
		
		imagesavealpha($image1, true);
		
		$color = imagecolorallocatealpha($image1, 0, 0, 0, 127);
		
		imagefill($image1, 0, 0, $color);
		imagepng($image1, "test.png");
		ImageCopy ( $image1, $image, -$submax, 0, 0, $_GET['i'], 960, 38);
		imagepng( $image1 );
	}else{
		$image = imagecreatefrompng ( $_GET['img'] );
		$image1 = imagecreatetruecolor ( 960, 38 );
		ImageCopy ( $image1, $image, 0, 0, 0, $_GET['i'], 960, 38 );
		imagepng( $image1 );
	}
?>