<?php
// Imprima 3 floats verificando se o mesmo é do tipo float com a função is_float em um deles.
$number1 = 4959.09;
$number2 = 30.10;
$number3 = 607.70;


if(is_float($number1)){
    echo "A variável $number1 é do tipo Float! <br>";
} else {
    echo "Tipo inválido! <br>";
}

if(is_float($number2)){
    echo "A variável $number2 é do tipo Float! <br>";
} else {
    echo "Tipo inválido! <br>";
}

if(is_float($number3)){
    echo "A variável $number3 é do tipo Float! <br>";
} else {
    echo "Tipo inválido! <br>";
}