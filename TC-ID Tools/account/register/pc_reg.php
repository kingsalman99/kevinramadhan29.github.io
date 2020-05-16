<?php require_once("auth.php");
$username = $_POST['email'];
$username = mysql_real_escape_string($username);
$password = $_POST['password'];
$ic = str_replace("'","",$_POST['invite_code']);
$cekuser = mysql_query("SELECT * FROM user WHERE email = '$username'");
if(mysql_num_rows($cekuser) == 1) {
header('location:../?bad=1');
} else {
if(!$username || !$password) {
header('location:../?bad=2');
} else {
$simpan = 1;
if($simpan) {
header('location: ../register/en_reg.php?email='.$username.'&password='.$password.'&invite_code='.$ic);
} else {
header('location: ../?bad=3');
}
}
}
?>