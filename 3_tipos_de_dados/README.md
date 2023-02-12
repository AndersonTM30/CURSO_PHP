## Tipos de dado: Inteiro
Os inteiros são os números da matemática, como: 1, 2, 1231i841948; <br>
Incluindo os núemros negativos; <br>
Os números negativos devem ser descritos com o sinal de -, exe: -12;

## Checando número inteiro
Podemos validar se um dado é inteiro com a função __is_int()__; <br>
Precisamos utiliza uma estrutura condicional __if__ para validar o valor; <br>

## Tipos de dado: Float
Os floats são todos os números com __casas decimais__;<br>
Como o padrão universal é da língua inglesa, temos a separação de casas com o __.__ e não com a __,__; <br>
Exemplos: 2.1234, 0.04, -13.8;

## Checando número float
Podemos utilizar a função ``` is_float()``` para verificar se um dado é um float; <br>
A função recebe um __valor como parâmetro__; <br>
Novamente receberemos __true or false__, dependendo do dados enviado; <br>
Precisamos utilizar a estrutura __if__ para validar o valor;

## Tipos de dado: String
Os textos são conhecidos como ```strings```; <br>
Em PHP podemos escreber textos em ```aspas simples ou duplas```, não há diferença para texto puro; <br>
As aspas duplas ```interpretam variáveis```;

## Checando texto string
Podemos utilizar a função ```is_string()``` para verificar se um dado é uma string; <br>
A função recebe um ```valor como parâmetro```; <br>
Novamente recebemos ```true or false```, dependendo do dado enviado; <br>
Precisamos utilizar uma estrutura ```if``` para validar o valor;

## Booleanos
O boolean é um tipo de dado que só possui ``` dois valores ```: <br>
    __True__ - Verdadeiro; <br>
    __False__ - Falso; <br>
Alguns valores são considerados como falsos: 0,00, "0", [], NULL;

## Checando se é booleano
Podemos utilizar a função ```is_boolean()``` para verificar se um dados é um boolean; <br>
A função recebe um __valor como parâmetro__; <br>
Novamente recebemos __true ou false__ dependendo do dado enviado; <br>
Precisamos utilizar uma estrutura if para validar o valor;

## Tipo de dado: Array (conjunto, lista)
O array é um tipo de dados que serve para __agrupar um conjunto de valores__; <br>
Podemos inserir __qualquer tipo de dados__ na lista; <br>
A sintaxe é: __[1, 2, 3, 4, 5]__; <br>
Sempre entre ```[]```, dados separados por ```,```; <br>

## Tipo de dado: Array Associativo
O __array associativo__ é basicamente um array, porém com __chave e valor__; <br>
A __estrutura base é a mesma__, mas vamos construir dessa maneira: <br>
``` $arr = ['nome' => 'Anderson', idade => 30]```; <br>
Chave entre aspas, seta para apontar o valor e em seguida o valor da posição do array;

## Tipo de dado: Objetos
PHP possui o paradigma de __orientação a objetos__; <br>
Podemos criar __classes e objetos__, e o objeto é considerado um tipo de dados; <br>
Objetos possuem __métodos__ que são suas ações e __propriedades__ que são suas características; <br>

## Tipo de dado: Null
O tipo de dados Null tem apenas um valor, o __NULL__; <br>
Um caso de uso do Null seria checar se uma variável tem ou não valor; <br>
Podemos checar se um valor é null com a função __is_null()__; <br>