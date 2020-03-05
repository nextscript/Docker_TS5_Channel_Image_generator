<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<head>
    <title>TS5 Channel Image Generator ᴮᴱᵀᴬ</title>
</head>
<body style="background-color:#2c3345; color:white;">
<div class="container-fluid">
	<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-10">
	
<?
echo '<hr><h1>TS 5 Channel Image Generator ᴮᴱᵀᴬ</h1><hr>';
session_start();

$img=$_FILES['img'];
if(isset($_POST['submit'])){ 
 if($img['name']==''){  
  echo "<h2>An Image Please.</h2>";
 }else{
  $filename = $img['tmp_name'];
  $client_id="3a3cc7bda67e684";
  $handle = fopen($filename, "r");
  $data = fread($handle, filesize($filename));
  $pvars   = array('image' => base64_encode($data));
  $timeout = 30;
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, 'https://api.imgur.com/3/image.json');
  curl_setopt($curl, CURLOPT_TIMEOUT, $timeout);
  curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Client-ID ' . $client_id));
  curl_setopt($curl, CURLOPT_POST, 1);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $pvars);
  $out = curl_exec($curl);
  curl_close ($curl);
  $pms = json_decode($out,true);
  $url=$pms['data']['link'];
  if($url!=""){
   echo 'Uploading Image...';
   echo '<meta http-equiv="refresh" content="2; URL='.$_SERVER['HTTP_REFERER'].'&img='.$url.'">';
   
  }else{
   echo "<h2>There's a Problem</h2>";
   echo $pms['data']['error'];  
  } 
 }
}

?>
</div>
<div class="col-md-1"></div>
</div>
</div>

</body>
<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
