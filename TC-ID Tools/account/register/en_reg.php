<?php 
include("../auth.php");
$email = $_GET['email'];
$email = mysql_real_escape_string($email);
$pass = $_GET['password'];
$pass = md5(md5(md5($pass)));
$ic = $_GET['invite_code'];
$a = "SELECT * FROM `invitecode` WHERE Num = '".$ic."' AND Registered = 1";
$cekic = mysql_query($a);
$data = mysql_fetch_row($cekic);
$berapa = $data[2];
$author = $data[1];
if ($berapa == 1) {

$cek = mysql_query("INSERT INTO user(email, password, regby, invitecode, status, credits) VALUES('$email','$pass','$author','$ic','Free User','10')");
$updic = mysql_query("UPDATE invitecode SET Registered=0, Regby='$email' WHERE Num='$ic'");
header('location: ../../account/?success=1');

} else if ($berapa == 0) {
header('location: ../?invalid=1');
} else if (empty($berapa)) {
header('location: ../?invalid=1');
}
?>