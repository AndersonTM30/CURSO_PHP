<?php

/**
 * Crie variáveis com características de algum objeto ou animal;
 * Depois crie um array com compact com estas mesmas variáveis;
 * Faça um loop no array e imprima os valores;
 */

 $nome = 'Anderson';
 $idade = 30;
 $profissao = 'Programador';
 $experiencia = 'Javascript';
 $nivel = 'Jr';
 $arr = compact('nome', 'idade', 'profissao', 'experiencia', 'nivel');

//  for($i = 0; $i < count($arr); $i++){
//     print_r($arr[$i]) . PHP_EOL;
//  }

foreach($arr as $list => $value) {
    echo "$list: $value" . PHP_EOL;
}