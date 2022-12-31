<?php

$a = 3;
$b = 4;

if ($a != $b) {
    echo "Os valores são diferentes 1" . PHP_EOL;
}

if ($a != 3) {
    echo "Os valores são diferentes 2" . PHP_EOL;
}

if (false != 'teste') {
    echo "Os valores são diferentes 3" . PHP_EOL;
}

if (3 != "3") {
    echo "Os valores são diferentes 1" . PHP_EOL;
}

if ($a != "4") {
    echo "Os valores são diferentes 4" . PHP_EOL;
}