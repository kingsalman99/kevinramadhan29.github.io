<?php
session_start();
function ambil_ip() {
foreach (array('HTTP_CLIENT_IP', 'HTTP_X_REAL_IP', 'REMOTE_ADDR', 'HTTP_FORWARDED_FOR', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED') as $key) {
if (array_key_exists($key, $_SERVER) === true) {
  foreach (explode(',', $_SERVER[$key]) as $ip) {
    if (filter_var($ip, FILTER_VALIDATE_IP) !== false) {
      return $ip;
    }
  }
}
}
}
require_once("auth.php");
session_start();
$username = $_POST['email'];
$username = mysql_real_escape_string($username);
$pass = $_POST['password'];
$pass = md5(md5(md5($pass)));
$cekuser = mysql_query("SELECT * FROM user WHERE email = '$username'");
$jumlah = mysql_num_rows($cekuser);
$hasil = mysql_fetch_array($cekuser);
$ip = ambil_ip();
if($jumlah == 0) {
header('location:../?error=1');
} else {
if($pass <> $hasil['password']) {
header('location:../?error=2');
} else {
$_SESSION['email'] = $username;
$k = mysql_query("UPDATE `user` SET `ip`='$ip' WHERE email='$username'");
header('location:/');
}
}
?>