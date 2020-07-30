<?PHP
$tmp = explode('.', $_GET['img']);
$endung = array_pop($tmp);

switch( $endung ) {
    case "png": $ctype="image/png"; break;
    case "jpeg":
    case "jpg": $ctype="image/jpeg"; break;
    default:
}

switch( $endung ) {
    case "png": $view=$image = imagecreatefrompng ( $_GET['img'] );; break;
    case "jpeg":
    case "jpg": $view=$image = imagecreatefromjpeg ( $_GET['img'] );; break;
    default:
}

	header("Content-type:". $ctype);
	if($_GET['sub'] != ''){
		$submax = 10 * $_GET['sub'];
		$view;
		$image1 = imagecreatetruecolor ( 960, 38 );
		ImageCopy ( $image1, $image, -$submax, 0, 0, $_GET['i'], 960, 38);
		imagejpeg( $image1 );
	}else{
		$view;
		$image1 = imagecreatetruecolor ( 960, 38 );
		ImageCopy ( $image1, $image, 0, 0, 0, $_GET['i'], 960, 38 );
		imagejpeg( $image1 );
	}
?>
