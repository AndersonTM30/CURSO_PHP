<?php

$data = new DateTime();

print_r($data) . PHP_EOL;

date_default_timezone_set('America/Sao_Paulo');
$newData = new DateTime();
print_r($newData);