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
		$submax = 20 * $_GET['sub']; //changed new version
		$view;
		$image1 = imagecreatetruecolor ( 960, 38 );
		$blue = imagecolorallocate($image1, 44, 50, 69);  //changed new version
		ImageCopy ( $image1, $image, -$submax, 0, -142, $_GET['i'], 960, 38); //changed new version (-142)
		imagefill($image1, 0, 0, $blue); //changed new version
		imagejpeg( $image1 );
	}else{
		$view;
		$image1 = imagecreatetruecolor ( 960, 38 );
		$blue = imagecolorallocate($image1, 44, 50, 69); //changed new version
		ImageCopy ( $image1, $image, 0, 0, -142, $_GET['i'], 960, 38 ); //changed new version (-142)
		imagefill($image1, 0, 0, $blue); //changed new version
		imagejpeg( $image1 );
	}
?>
