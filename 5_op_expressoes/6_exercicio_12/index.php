<?php

/*
    Crie uma operação com cada um dos operadores básicos;
    Cada operação deve estar em uma variável diferente;
    imprima cada uma das etapas;
    EX: soma -> multiplicação -> divisão -> subtração;
*/

$num1 = 12;
$num2 = 5;

$soma = $num1 + $num2;
$sub = $num1 - $num2;
$multi = $num1 * $num2;
$div = $num1 / $num2;

echo "Calculando os valores de $num1 e $num2:" . PHP_EOL;
echo "$num1 + $num2 = $soma" . PHP_EOL;
echo "$num1 - $num2 = $sub" . PHP_EOL;
echo "$num1 * $num2 = $multi" . PHP_EOL;
echo "$num1 / $num2 = $div" . PHP_EOL;
