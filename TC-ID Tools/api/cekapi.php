<?php
flush();
sleep(1);
function RandUnik($panjang) { 
   $pstring = "ABCDEFGHIJKLMNOPQRSTUVWXYZ"; 
   $plen = strlen($pstring); 
      for ($i = 1; $i <= $panjang; $i++) { 
          $start = rand(0,$plen); 
          $unik.= substr($pstring, $start, 1); 
      } 
 
    return $unik; 
} 
$charge = 1;
$rand1 = rand(1000,1000000);
$rand2 = rand(1000000,1000000000);
$rand3 = rand(1,1000);
$kk = rand(1, 800);
$api = $_GET['api'];
$transfer = ($charge-10)/100;
error_reporting(0); 
// Set your secret key: remember to change this to your live secret key in production
// See your keys here https://dashboard.stripe.com/account
// <button type="submit">Check</button>
require_once('./lib/Stripe.php');
Stripe::setApiKey($api);
$token = Stripe_Token::create(@array(
 "card" => array(
 "number" => "5466576001795819",
 "exp_month" => "09",
 "exp_year" => "2017",
 "cvc" => "767"
 )
));

try {
$charge = Stripe_Charge::create(@array(
  "amount" => 100, // amount in cents, again
  "currency" => "usd",
  "card" => $token->id,
  "description" => "Invoice: $id | Total: $transfer USD | email: $email | Paid: Proccess ")
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