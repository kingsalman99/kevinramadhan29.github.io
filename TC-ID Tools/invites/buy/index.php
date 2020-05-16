<?php

session_start();

if (!empty($_SESSION['email'])) {

 
echo '';
} 
else {
header('location: ../account'); 
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
header('location: https://TCID.TK');
}                       
                    }
function RandUnik($panjang) { 
   $pstring = "0123456789ABCDEFGHIJKLMZ"; 
   $plen = strlen($pstring); 
      for ($i = 1; $i <= $panjang; $i++) { 
          $start = rand(0,$plen); 
          $unik.= substr($pstring, $start, 1); 
      } 
 
    return $unik; 
} 
function RandUni($panjang) { 
   $pstring = "0123456789ABCDEFGHIJKLMZ"; 
   $plen = strlen($pstring); 
      for ($i = 1; $i <= $panjang; $i++) { 
          $start = rand(0,$plen); 
          $unik.= substr($pstring, $start, 1); 
      } 
 
    return $unik; 
} 
$code = RandUnik('4');
$code2 = RandUnik('4');
$ic = 'TCID-'.$code.'-'.$code2;
  if ($credits < 100) { ?>
<?php
header("location: ../invites/?msg=Error. Your credit is less!");
?>
<?   } else if(!$email) { ?>
<?php
header("location: ../invites/?msg=Error");
 } else {
 $date = Date("d/m/20y");
 $simpan = mysql_query("INSERT INTO `invitecode`(`Num`, `Author`, `Registered`, `Date`, `Regby`) VALUES ('$ic','$email','1','$date','0')");
 $simpan = mysql_query("UPDATE user SET credits=credits-100 WHERE email = '$email'");
 if($simpan) { ?>
<?php
header("location: ../invites/?ic=$ic");
?>
<? } else { ?>
<?php
header("location: ../invites/?msg=Error. Contact Admin Please!");
?>
<? } }?>