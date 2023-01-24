<?php

/**
 * Converta a seguinte string para array;
 * carro - navio - helicóptero - barco - jangada
 */

 $texto = "carro - navio - helicóptero - barco - jangada";

 $textoArray = explode(" - ", $texto);

 for($i = 0; $i < count($textoArray); $i++) {
    echo $textoArray[$i] . PHP_EOL;
 }