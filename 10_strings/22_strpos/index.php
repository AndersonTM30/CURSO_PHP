<?php

$str = "Esta frase será utilizada para que quando utilizar a função strpos";

$findWord = strpos($str, "será");

echo $findWord . PHP_EOL;