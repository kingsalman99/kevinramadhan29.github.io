<?php

session_start();

if (!empty($_SESSION['email'])) {

 
echo '';
} 
else {
header('location: http://tcid.tk/account'); 
}


?>
<?php
session_start();
include('auth.php');
                    $email = $_SESSION['email'];
                    $query = "SELECT * FROM user WHERE email='$email'";
                    $exe = mysql_query($query);
                    $no = 1;
                    while($row = mysql_fetch_assoc($exe)){
                        $credits = $row['credits'];
if (!$email) {
header('location: /');
}                       
  if ($credits < 50) { ?>
<?php
header("location: http://tcid.tk/invites/?msg=Error. Your credit is less!");
?>
<?   } else if(!$email) { ?>
<?php
header("location: http:///invites/?msg=Error");
 } else {
 $date = Date("d/m/20y");
 $simpan = mysql_query("INSERT INTO `user`(`status`) VALUES ('Paid User')");
 $simpan = mysql_query("UPDATE user SET credits=credits-50 WHERE email = '$email'");
 if($simpan) { ?>
<?php
header("location: http://tcid.tk/upgrade/$email=$email");
?>
<? } else { ?>
<?php
header("location: http://tcid.tk/invites/?msg=Error. Contact Admin Please!");
?>
<? } }?>