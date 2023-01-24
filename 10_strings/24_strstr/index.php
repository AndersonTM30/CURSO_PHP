<?php

$str = "Testando o resto da string, para ver se dá certo";

$rest = strstr($str, "resto");

echo "$rest" . PHP_EOL;

$s = "string";

$resto2 = strstr($str, $s);

echo "$resto2" . PHP_EOL;

if(strstr($str, ".NET") == false) {
    echo "Não encontramos a string!" . PHP_EOL;
}