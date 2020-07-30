<!-- Latest compiled and minified CSS -->


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<head>
    <title>TS5 Channel Image Generator ᴮᴱᵀᴬ</title>
	<meta charset="UTF-8">
	<meta name="description" content="This Page corvert a image to many snippet for your TS5 Channels">
	<meta name="keywords" content="TS5 Channel Banner, TS5 Banner, Teamspeak channel Banner, TS5 Channel Image Generator">
</head>
<body style="background-color:#2c3345; color:white;">

<div class="container-fluid">
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">

<?php
session_start();
include 'config.php';
	echo '<hr><h1>TS 5 Channel Image Generator ᴮᴱᵀᴬ</h1><hr>';

	echo '<div class="row">
	  <div class="col-md-4"><h3><u>Before:</u></h3><img src="example.png"  width=100%><p></div>
	  <div class="col-md-4"><h3><u>After:</u></h3><img src="demo_ch.png"  width=100%><p></div>
	  <div class="col-md-4"></div>
	</div><hr>';

	if($_GET['step'] == '2'){
		echo '<meta http-equiv="refresh" content="0; URL=?ch='.$_POST["channel"].'">';
	}

	if($_GET['change'] == 'true'){
		echo '<meta http-equiv="refresh" content="0; URL='.$_SERVER['HTTP_REFERER'].'&sub='.$_POST["sub"].'">';
	}

	$zahl = $_GET['ch'];
	$start = 38;

	if($_GET['sub'] >= '1'){
		for($i=0; $i < $zahl; $i++) {
			if($_GET['img'] == ''){
			}else{
				echo '<b>'.$_GET['sub'].'x Sub Channel '.( $i + 1 ).': </b><br>';
				$url = '&type=png&sub='.$_GET['sub'].'&img='.$_GET['img'].'';
				echo '<a href="?conv='. $start * $i .'" target="_blank"><img src="img.php?i='. $start * $i .'&type=png&sub='.$_GET['sub'].'&img='.$_GET['img'].'"></a><p>';
			}
			$_SESSION['demo'] = $url;
		}
		if($_GET['img'] == ''){
		}else{
			if($_GET['sub'] == ''){
				echo '<table class="table table-striped"><tr style="background-color:#4f5565;"><td>
							</tr></td><tr style="background-color:#4f5565;"><td>
								<form class="form-inline" action="?change=true" method="post">
								<div class="form-group">
								<label for="sub">Sub Channel:<span style="font-size: 18px;"><span style="color: rgb(239, 0, 27); font-size: 18px; font-weight: bold;">*</span></span></label>
								<select name="sub" class="form-control">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								</select>
								</div>

								<button type="submit" name="submit" value="Create" class="btn btn-default">Next</button>
							</form>
						</tr></td></table>';
			}else{
				echo '<table class="table table-striped"><tr style="background-color:#4f5565;"><td></tr></td><tr style="background-color:#4f5565;"><td><form><input type="button" value="Go back!"  class="btn btn-default" onclick="history.back()"></form></tr></td></table>';
			}
		}
	}else{
		for($i=0; $i < $zahl; $i++) {
			if($_GET['img'] == ''){
			}else{
				echo '<b>Channel '.( $i + 1 ).': </b><br>';
				$url = '&type=png&sub='.$_GET['sub'].'&img='.$_GET['img'].'';
				$_SESSION['demo'] = $url;

				echo '<a href="?conv='. $start * $i .'" target="_blank"><img src="img.php?i='. $start * $i .'&type=png&sub='.$_GET['sub'].'&img='.$_GET['img'].'"></a><p>';
			}

		}
		if($_GET['img'] == ''){
		}else{
			if($_GET['sub'] == ''){
				if($_GET['change'] == 'true'){
				}else{
					echo '<table class="table table-striped"><tr style="background-color:#4f5565;"><td>
							</tr></td><tr style="background-color:#4f5565;"><td>
								<form class="form-inline" action="?change=true" method="post">


								<div class="form-group">
								<label for="sub">Sub Channel:<span style="font-size: 18px;"><span style="color: rgb(239, 0, 27); font-size: 18px; font-weight: bold;">*</span></span></label>
								<select name="sub" class="form-control">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								</select>
								</div>

								<button type="submit" name="submit" value="Create" class="btn btn-default">Change</button>
							</form>
						</tr></td></table>';
				}
			}else{
				echo '<table class="table table-striped"><tr style="background-color:#4f5565;"><td></tr></td><tr style="background-color:#4f5565;"><td><form><input type="button" value="Go back!"  class="btn btn-default" onclick="history.back()"></form></tr></td></table>';
			}
		}
	}

	if($_GET['ch'] == ''){

		if($_GET['change'] == 'true'){
		}else{
			echo '<table class="table table-striped"><tr style="background-color:#4f5565;"><td>
							</tr></td><tr style="background-color:#4f5565;"><td>
								<form class="form-inline" action="?step=2" method="post">

								<div class="form-group">
								<label for="channel">How many Channels:<span style="font-size: 18px;"><span style="color: rgb(239, 0, 27); font-size: 18px; font-weight: bold;">*</span></span></label>
								<input type="text" name="channel" class="form-control">
								</div>


								<button type="submit" name="submit" value="Create" class="btn btn-default">Next</button>
							</form>
						</tr></td></table>';
		}


	}else{
		if($_GET['img'] == ''){
			echo '<table class="table table-striped"><tr style="background-color:#4f5565;"><td>
							</tr></td><tr style="background-color:#4f5565;"><td>
								<form class="form-inline" action="upload.php" method="post" enctype="multipart/form-data">


							  <div class="form-group">
									<label for="Banner">Upload Image:<span style="font-size: 18px;"><span style="color: rgb(239, 0, 27); font-size: 18px; font-weight: bold;">*</span></span></label>
									<input type="file" class="form-control" name="img" id="fileToUpload">

								</div>
									<button type="submit" name="submit" class="btn btn-default" >Upload</button>
									<input type="button" value="Go back!"  class="btn btn-default" onclick="history.back()">
							</form>Size of the Image must be exactly 960 x '. ( 38 * $zahl ).' Pixel and Only PNG & JPG format.
						</tr></td></table>';
		}else{
		}
	}
	if($_GET['conv'] != ''){
		$_SESSION['imga'] = $sitename.'/img.php?i='.$_GET['conv'].''.$_SESSION['demo'];
		header('Location: convert.php');
	}

?>
</div>
<div class="col-md-1"></div>
</div>
</div>
</body>
<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
