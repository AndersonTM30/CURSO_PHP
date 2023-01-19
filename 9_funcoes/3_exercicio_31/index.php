<?php

/**
 * Crie um array com strings;
 * Utilize a função implode no array;
 * Primeiro argumento: ","
 * Segundo argumento: o seu array
 * Atribua a invocação da função a uma variável
 * Exiba o resultado
 */

 $nomes = ['Anderson', 'Lucas', 'Nilson', 'Davi'];

 $result = implode(", ",  $nomes);

 echo $result;