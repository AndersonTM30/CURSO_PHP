<?php

$a = 1;
$b = "1";

if($a != $b) {
    echo 'Valores são diferentes 1' . PHP_EOL;
}

if($a !== $b) {
    echo 'Valores são diferentes 2' . PHP_EOL;
}

if(1 !== "1") {
    echo 'Valores são diferentes 3' . PHP_EOL;
}

if([] != "") {
    echo 'Valores são diferentes 4' . PHP_EOL;
}