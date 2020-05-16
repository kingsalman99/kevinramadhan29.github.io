<?php
session_start();
error_reporting(0); 
if (empty($_SESSION['email'])) {
echo '{"error":1,"msg":"Error! Please contact admin!"}';
break;
}
$charge = rand(50,400);
$email = $_SESSION['email'];
include('../account/login/auth.php');
                    $email = $_SESSION['email'];
                    $query = "SELECT * FROM user WHERE email='$email'";
                    $exe = mysql_query($query);
                    $no = 1;
                    while($row = mysql_fetch_assoc($exe)){
                        $credits = $row['credits'];                    
                    }
$api = $_POST['api'];
$cek = mysql_query("SELECT * FROM `api` WHERE api='$api'");
$cek = mysql_num_rows($cek);
$cekapi = substr($api, 0, 7);
if ($cekapi == 'sk_test') {
header('location: http://tcid.tk/apitocredit/?msg=Status: Test mode');
break;
}
if ($cek > 0) {
header('location: http://tcid.tk/apitocredit/?msg=Already used');
break;
}
$date = date("d/m/20y");
$email = $_SESSION['email'];
$hasil = file_get_contents('http://tcid.tk/api/cekapi.php?api='.$api);
$a = json_decode($hasil, true);
$b = $a['status'];
if ($b == 1) {
$aq = mysql_query("UPDATE `user` SET `credits`=credits+10 WHERE email='$email'");
$an = mysql_query("INSERT INTO `api`(`api`, `author`, `status`, `date`) VALUES ('$api','$email',1,'$date')");
while($row = mysql_fetch_assoc($exe)){
$credits = $row['credits'];                    
}
$credits = $credits+10;
header('location: http://tcid.tk/apitocredit/?msg=Success! Your credits add to 10!');
break;
} if ($b == 2) {
$aq = mysql_query("UPDATE `user` SET `credits`=credits+10 WHERE email='$email'");
$an = mysql_query("INSERT INTO `api`(`api`, `author`, `status`, `date`) VALUES ('$api','$email',1,'$date')");
while($row = mysql_fetch_assoc($exe)){
$credits = $row['credits'];                    
}
$credits = $credits+10;
header('location: http://tcid.tk/apitocredit/?msg=Success! Your credits add to 10!');
break;
} if ($b == 3) {
header('location: http://tcid.tk/apitocredit/?msg=Status: Die1');
break;
}
header('location: http://tcid.tk/apitocredit/?msg=Status: Die2');
break;
?>