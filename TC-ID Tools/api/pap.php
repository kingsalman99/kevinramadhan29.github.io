<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<?php
require_once('./lib/Stripe.php');
Stripe::setApiKey("sk_live_hrFUEasVqh1gtKUTETzKNatc");
$tok = Stripe_Token::create(array(
 "card" => array(
 "number" => "4242424242424242",
 "exp_month" => 1,
 "exp_year" => 2016,
 "cvc" => "314"
 )
));
try {
Stripe_Charge::create(array(
 "amount" => 300,
 "currency" => "usd",
 "card" => $tok->id,
 "description" => ""
));
} catch(Stripe_CardError $e) {
 $body = $e->getJsonBody();
 $err = $body['error'];
 echo 'dewa';
} 
?>