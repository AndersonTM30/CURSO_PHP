<?php

$str = "Testando o encontra da palaver teste, em uma string que tem teste";

$palavra = strrpos($str, "teste");

echo "$palavra" . PHP_EOL;

$palavra2 = strpos($str, "teste");

echo "$palavra2" . PHP_EOL;

if(strrpos($str, "java") == false) {
    echo "A palavra Java não foi enconttrada" . PHP_EOL;
}

$p = substr($str, strpos($str, "teste"), 5);

echo "$p" . PHP_EOL;
