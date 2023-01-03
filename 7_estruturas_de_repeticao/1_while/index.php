<?php

// Definição do contador
$x = 0;

// Início da estrutura
while($x < 10) {
    // Incremento do loop
    $x++;
    // Corpo do loop
    echo $x . PHP_EOL;
}
echo '=================' . PHP_EOL;

$y = 10;

while ($y > 0) {
    $y--;
    echo $y. PHP_EOL;
}

echo '=================' . PHP_EOL;
$a = 10;
while ($a > 0) {
    if($a % 2 != 0) {
        echo $a . PHP_EOL;
    }
    $a--;
}