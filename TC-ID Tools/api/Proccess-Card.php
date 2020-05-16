<?php
flush();
$ccn = $_GET['ccn'];
$ccm = $_GET['ccm'];
$ccy = $_GET['ccy'];
$cvv = $_GET['cvv'];
$api = $_GET['api'];
$charge = $_GET['charge'];
$rand1 = rand(1000,1000000);
$rand2 = rand(1000000,1000000000);
$rand3 = rand(1,1000);
error_reporting(0); 
// Set your secret key: remember to change this to your live secret key in production
// See your keys here https://dashboard.stripe.com/account
// <button type="submit">Check</button>
require_once('./lib/Stripe.php');
Stripe::setApiKey($api);
$token = Stripe_Token::create(@array(
 "card" => array(
 "number" => $ccn,
 "exp_month" => $ccm,
 "exp_year" => $ccy,
 "cvc" => $cvv
 )
));
try {
$charge = Stripe_Charge::create(@array(
  "amount" => $charge, // amount in cents, again
  "currency" => "usd",
  "card" => $token->id,
  "description" => "ItemNum = ".$rand3." CartNum = ".$rand1." AccNum = ".$rand2." Status = Processing")
);
} catch(Stripe_CardError $e) {
  // The card has been declined
$f = $e->getHttpStatus();
$live = empty($f);
if ($f == 402) {
echo '{"status":"2"}';
break;
} else if ($f == 200) {
echo '{"status":"1"}';
break;
} if ($f == 400) {
echo '{"status":"3"}';
break;
} if ($f == 401) {
echo '{"status":"3"}';
break;
} if ($f == 404) {
echo '{"status":"3"}';
break;
} if ($f == 402) {
echo '{"status":"2"}';
break;
}
} 
echo '{"status":"1"}';
?>

<?php

?>