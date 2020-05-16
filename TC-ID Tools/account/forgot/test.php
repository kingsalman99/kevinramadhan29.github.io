<!doctype html>
<html>
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-status-bar-style" content="black"/>
<meta name="google-site-verification" content="WrtKBbvMAd0w_SQ2ib1Nc5PrAlQmUtPGmaITMlNcvCw"/>
<meta name="robots" content="noindex"/>
<title>ILN - Reset</title>
 
<link rel="stylesheet" href="https://tgtbf-checker.us.to/cxEncrypt.php/style/css/bootstrap.min.css"/>
 
<link rel="stylesheet" href="https://tgtbf-checker.us.to/cxEncrypt.php/style/css/bootstrap-responsive.min.css"/>
 
<!--[if !IE]> -->
<link rel="stylesheet" href="https://tgtbf-checker.us.to/cxEncrypt.php/style/css/style.css"/>
<!-- <![endif]-->
<!--[if IE]>
	<link rel="stylesheet" href="https://tgtbf-checker.us.to/cxEncrypt.php/style/css/style_ie.css" />
	<![endif]-->
 
<script src="https://tgtbf-checker.us.to/cxEncrypt.php/style/js/jquery.min.js"></script>
 
<script src="https://tgtbf-checker.us.to/cxEncrypt.php/style/js/bootstrap.min.js"></script>
 
<script src="https://tgtbf-checker.us.to/cxEncrypt.php/style/js/demonstration.min.js"></script>
 
<script src="https://tgtbf-checker.us.to/cxEncrypt.php/style/js/application.min.js"></script>
<link rel="shortcut icon" href="https://tgtbf-checker.us.to/favicon.ico"/>
<link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png"/>
</head>
<?php
$msg = $_GET['msg'];
$sucess = $_GET['sucess'];
if ($sucess) {
echo '<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert">×</button>
<b>Note: </b>Success Silakan Check kotak masuk/spam email anda</div>';
}
if ($msg) {
echo '<div class="alert alert-failed">
<button type="button" class="close" data-dismiss="alert">×</button>
<b>Note: </b>'.$msg.' </div>';
}
?>
<body class='login-body'>
<div class="login-wrap">
<h1><a href="https://tgtbf-checker.us.to">TGTBF</a></h1>
<h6>-- TGTBF Private Tools --</h6>
<div style="color: red;display:none;"></div>
<div class="login">
<form action="" method="post">
<div class="email"><input type="text" name="email" placeholder="Email" class='input-block-level'/></div>
<script type="text/javascript">
                    var RecaptchaOptions = { theme : 'white' };
                </script>
<button type="submit" name="act_resset" class='button button-basic-darkblue btn-block'>Reset</button>
</form>
</div>
<a href="https://tgtbf-checker.us.to/account/" class='pw-link'> <i class="icon-arrow-left"></i> Back to <span>Login</span></a>
</div>
<?PHP 
$server = 'localhost';
$dbuser = 'tamvanph_a';
$dbpass = '089601297614xx';
$dbname = 'tamvanph_a';
$x = mysql_connect($server,$dbuser,$dbpass) or die(mysql_error());
mysql_select_db($dbname,$x);
// Copyright Parz HARGAI PENCARI DAFUQ
if (isset($_POST['act_resset']))  {
function random($panjang)
{
   $pengacak = 'ABCDEFGHIJKLMNOPQRSTU1234567890';
   $string = '';
   for($i = 0; $i < $panjang; $i++) {
   $pos = rand(0, strlen($karakter)-1);
   $string .= $karakter{$pos};
   }
    return $string;
}
$pass = random('8');

$email = trim(strip_tags($_POST['email']));
$password = md5(md5(md5($pass)));

// mencari alamat email si user
$query = "SELECT * FROM user WHERE email ='$email'";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
$cek = mysql_num_rows($hasil);
$alamatEmail = strip_tags($data['email']);
if ($cek == 1) {

// title atau subject email
$title  = "Permintaan Password Baru";
// isi pesan email disertai password
$pesan  = "Kami telah meresset Ulang Kata sandi ".$email." Dan anda dapat login kembali ke web kami \n\n 
DETAIL AKUN ANDA :\n  \n 
Kata sandi Anda yang baru adalah: ".$pass."\n\n 
\n\n PESAN NO-REPLY";
// header email berisi alamat pengirim
$header = "From: TGTBF Checker<no-reply@iln-mc.net>";
// mengirim email
$kirimEmail = mail($alamatEmail, $title, $pesan, $header);
// cek status pengiriman email
if ($kirimEmail) { 

    // update password baru ke database (jika pengiriman email sukses)
    $query = "UPDATE user SET password='$password' WHERE email = '$email'";
    $hasil = mysql_query($query);

    if ($hasil) 
header("location: https://tgtbf-checker.us.to/account/forgot/?sucess=1");
    }
	else {
header("location: https://tgtbf-checker.us.to/account/forgot/?msg=Error");
}
}
else{

header("location: https://tgtbf-checker.us.to/account/forgot/?msg=Email Not Found!");;
}}


?>
</body>
</html>