<?php

/**
 * Crie um array de 10 a 20 com for;
 * Faça um loop em ciam do array crado dinamicamente;
 * Imprima apenas os números ímpares;
 */

 $lista = [];

 for($i = 10; $i <= 20; $i++) {
    array_push($lista, $i);
}

for($y = 0; $y < count($lista); $y++) {
   if($lista[$y] % 2 != 0) {
       echo $lista[$y] . PHP_EOL;
   }
}