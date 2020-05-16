<?php
session_start();
include('auth.php');
$email = $_SESSION['email'];
$id = $_POST['id'];
$address = $_POST['address'];
$received = file_get_contents('https://blockchain.info/id/address/'.$address.'?format=json');
$cek = json_decode($received);
$jumlah = $cek->total_received;
if ($jumlah < 1) {
header('location: https://iln-mc.net/order/buy?msg=Payment failed. Please send to new address!');
} else if ($jumlah > 0) {
$date = date("d/m/20y");
$totalcre = $jumlah/100000000;
$sendcre = $jumlah*23200;
$totalsendcre = ceil($sendcre/100000000);
$addcre = mysql_query("UPDATE `user` SET `credits`=credits+$totalsendcre, `orders`=orders+1 WHERE email='$email'");
$addord = mysql_query("INSERT INTO `Order`(credits, email, amount, date, ID) VALUES ($totalsendcre,'$email','$totalcre','$date','$id')");
header('location: https://iln-mc.net/?SUKSES ORDER! - '.$id);
}
?>