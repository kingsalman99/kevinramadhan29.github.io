<pre><?php

require_once('../lib/Blockchain.php');

$api_code = null;
if(file_exists('code.txt')) {
    $api_code = trim(file_get_contents('code.txt'));
}

$Blockchain = new Blockchain($api_code);

// Get Statistics
$stats = $Blockchain->Stats->get();

?><table><?php

foreach ($stats as $key => $value) {
    echo "<tr><td><strong>$key</strong></td><td>$value</td></tr>" . PHP_EOL;
}

?></table><?php

var_dump($stats);

// Output log of activity
var_dump($Blockchain->log);

?></pre>