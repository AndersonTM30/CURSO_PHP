<?php

/**
 * Percorra a string: O rato roeu a roupa do rei de Roma, a partir de um loop;
 * Imprima o número de letras "a" dessa string;
 */

 $texto = "O rato roeu a roupa do rei de Roma";
 $qtd = null;
 for($i = 0; $i < strlen($texto); $i++) {
    if($texto[$i] == "a") {
        $qtd += strlen($texto[$i]);
    }
}
echo "Quantidade de letras A no texto: $qtd" . PHP_EOL;