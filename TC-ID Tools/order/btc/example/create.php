<pre><?php

require_once('../lib/Blockchain.php');

$api_code = null;
if(file_exists('code.txt')) {
    $api_code = trim(file_get_contents('code.txt'));
}

$Blockchain = new Blockchain($api_code);

$wallet = $Blockchain->Create->create('weakPassword01!');

var_dump($wallet);

print_r($Blockchain->log);

?></pre>