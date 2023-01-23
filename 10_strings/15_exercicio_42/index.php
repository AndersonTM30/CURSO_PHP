<?php

/**
 * Na frase "Cadê o meu queijo? Ele estava aqui em cima ";
 * Resgate apenas a palavra queijo;
 */

 $texto = "Cadê o meu queijo? Ele estava aqui em cima";


echo $texto . PHP_EOL;
 echo substr($texto, 12, 6) . PHP_EOL;
 echo substr($texto, 24, 6) . PHP_EOL;