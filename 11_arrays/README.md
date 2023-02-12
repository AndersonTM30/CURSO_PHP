## Adicionanado dados a um array
Podemos **criar novos índices** com dados em um array; <br>
Basta por o nome do array com o novo índice em colchetes e atribuir um valor; <br>
Exemplo: ``` $arr[1] = "teste" ```; <br>
E em array associativos basta utilizar o nome da nova chave com a atribuição de valor; <br>

## Adicionando valor ao fim do array
Podemos adicionar valor ao fim de um array utilizando a **atribuição sem determinar um índice**; <br>
Então o valor atribuído será enviado para o último e novo índice do array; <br>
Exemplo: ```$arr[] = 5; ``` <br>

## Criar array rapidamente
Podemos utilizar a função **range** para criar um array de forma rápida; <br>
Exemplo: ```range(1, 10);``` <br>
Um array de 1 a 10 será criado, podemos atribuir este valor a uma variável; <br>

## Número de elementos
Podemos obter o número de elementos de um array com a função **count**; <br>
Basta passar o array como argumento; <br>
Um inteiro será retornado; <br>

## Array multidimensional
Quando inserimos arrays dentro de arrays formamos um **array multidimensional**, também conhecido como matriz; <br>
Para acessar este tipo de array também utilizamos índices, acessando o externo e depois os internos; <br>
Exemplo: ``` $arr[1][0] => Primeiro elemento do segundo array ```; <br>

## Criando muitas variáveis
Podemos criar muitas variáveis com base em um array; <br>
Para isso utilizar a função **list**; <br>
Ex: ```list($nome, $idade, $profissao) = $pessoa```; <br>

## Resgatando elementos de array
Com a função **array_slice** podemos resgatar uma faixa de elementos de um array; <br>
Passamos 3 parâmetros: o array, índice inicial e quantos elementos queremos regartar a partir do índice; <br>

## Dividindo arrays
Podemos dividir um array grande em diversos arrays de número de elementos iguais; <br>
Vamos utilizar a função **array_chunk**; <br>
Passamos o array como argumento e também o número de elemento que cada array deve ter; <br>

## Chaves e valores
Com a função **array_keys** recebemos um array apenas com as chaves de um array; <br>
Com a função **array_values** recebemos um array com apenas os valores de um array; <br>

## Verificando se valor existe
Com a função **array_key_exists** podemos verificar se há um valor em respectiva key de um array; <br>
Podemos fazer essa checagem em um if; <br>
Exemplo: ```array_key_exists("nome", $arr);```; <br>
Outra função que podemos utilizar para este fim é a **isset**; <br>

## Removendo elementos
Podemos remover elementos de um array com a função **array_splice**; <br>
Passamos como parâmetro o array, índice inicial e quantos elementos queremos remover; <br>
Exemplo: ```array_splice($arr, 2, 1) => A partir do índice 2, remove 1 elemento; ``` <br>

## Criando variáveis com extract
Com a função **extract** podemos criar variáveis rapidamente de arrays associativos; <br>
O nome da chave será o nome da variável; <br>
Se houver uma variável já criada com o nome da chave, a mesma será sobrescrita; <br>

## Criando array com compact
Com a função **compact** podemos criar um array a partir de variáveis; <br>
Passamos para a função o nome das variaveis em string; <br>
E então um novo array é criado, podemos atribuir a uma variável; <br>

## Foreach e arrays
Anteriormente vimos a estrutura **foreach** com arrays, podemos iterar facilmente com ela; <br>
Utilizando a notação de **chave => valor**, temos acesso rjápido também a arrays associativos; <br>
Exemplo: ``` foreach($itens as $key => $value){}; ``` <br>

## Reduce em arrays
A função **array_reduce** tem como objetivo reduzir um array a apenas um valor; <br>
Podemos passar uma **segunda função como parâmetro**, para algum processo ser executado; <br>
Exemplo: ``` array_reduce($arr, $funcao); ``` <br>

## Buscando em arrays
A função **in_array** verifica se um item passado por parâmetro está no array; <br>
O retorno é true se encontrar o item e false se não encontrar; <br>
Vamos passar dois argumentos para a função, exemplo: ``` in_array("item", $arr) ```; <br>

## Ordenação de arrays
Para ordenar em ordem crescente podemos utilizar a função **sort** em um array; <br>
Para ordenar de forma inversa utilizamos **rsort**; <br>

## Ordenação de arrays associativos
Para ordernar em ordem crescente pelo valor das chaves, podemos utilizar a função **asort**; <br>
Se quisermos ordenar o array pelas chaves, utilizamos o valor **ksort**; <br>

## Invertendo arrays
Com a função **array_reverse** podemos obter o array ao inverso; <br>
Passamos apenas o array como argumento; <br>
O retorno será um array invertido do original; <br>

## Ordem aleatória de itens
Com a função **shuffle** podemos reorganizar os itens em ordem aleatória; <br>
Passamos apenas o array como parâmetro; <br>
Temos um array retornado em ordem aleatória; <br>

## somando itens de um array
Para somar os itens de um array utilizamos a função **array_sum**; <br>
ela nos retorna a soma de todos elementos numéricos do array que passamos como argumento; <br>

## Unindo arrays
Podemos unir arrays, a ação também é conheciado como merge; <br>
A função que vamos utilizar é a **array_merge**; <br>
Que como argumento aceita um número identerminado de arrays; <br>

## Diferença entre arrays
Podemos verificar qual a diferença entre dois ou mais arrays com PHP; <br>
A função que vamos utilizar para isso é a **array_diff**;<br>
Esta função aceita um número indeterminado de arrays; <br>