<?php

$url = "https://www.udemy.com";

$arrayUrl = parse_url($url);

print_r($arrayUrl);

echo PHP_EOL;

echo $arrayUrl['host'] . PHP_EOL;

$url2 = "http://www.horadecodar.com.br/usuarios/anderson?id=1234&nome=Anderson";

$arrayUrl2 = parse_url($url2);

print_r($arrayUrl2);