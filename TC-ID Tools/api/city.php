<?php

$hasil = file_get_contents('city.json');
$hasil = explode("\n", $hasil);
$i = rand(0, 100);
$cek = json_decode($hasil[$i], true);
echo $cek['1'];
?>