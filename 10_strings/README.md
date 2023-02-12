## Interpolando variáveis
Podemos **interporlar variáveis em strings** de duas formas; <br>
Utilizando **aspas duplas e colocando a variável** e também **com chaves e o nome da variável**; <br>
**Não há diferença** em ambas as formas; <br>
Exemplo:
```
    "Interpolando a variável $teste";
    "Interpolando a variável {$teste}";
```

## Valores de escape
Podemos utilizar alguns valores que **executam funções especiais em strings**; <br>
Preecisamos utilizar **aspas duplas**; <br>
Exemplos; 
```
    \n = nova linha;
    \t = tab;
    \\ = barra invertida;
    \$ = sinal de dólar;
```

## Função print
A função **print** tem a funcionalidade semelhandte de echo; <br>
Pode **imprimir uma string que foi passada como argumento**; <br>
Exemplo: ``` print("testando");```;

## Função printf
A função **printf** tem a funcionalidade semelhante a print; <br>
Porém podemos imprimir valores de forma dinâmica utilizando o símbolo **%**; <br>
Exemplo: ``` print("Número %d", 1);```;

## Tamanho da string
Utilizando a função **strlen** com uma string como parâmetro, vamos receber o tamanho da string; <br>
Ou seja, a **quantidade de caracteres** da mesma; <br>
Exemplo: ```strlen($texto);```;

## Percorrendo uma string
Podemos percorrer cada um dos **caracteres de uma string**; <br>
Para isso vamos utilizar uma **estrutura de repetição**; <br>
E o método **strlen**, para saber o **número de caracteres**; <br>
Com isso podemos iterar pela string completa; <br>
Exemplo:
```
for($x = 0; $x < strlen($str); $x++) {
    //codigo
}
```

## Limpando uma String
Podemos remover os espaços em branco de uma string com funções de PHP; <br>
**trim** - limpa espaços antes e depois da string; <br>
**ltrim** - limpa espaços na parte inicial da string; <br>
**rtrim** - limpa espaços na parte final da string; <br>
Desta forma conseguimos remover os espaços desnecessários inseridos pelos usuários; <br>

## Alterando o case
Podemos alterar as strings para maiúsculas ou minúsculas com funções de PHP; <br>
**strtolower** - todas as letras para minúsculas; <br>
**strtoupper** - todas as letras para maiúsculas; <br>

## Alterando o case de palavras
Podemos alterar o case apenas das palavras com funções de PHP; <br>
**ucfirst** - primeira letra da string em maiúscula; <br>
**ucwords** - primeira letra de cada palavra em maiúscula; <br>

## Removendo tags HTML
Podemos remover as tags de HTML de uma string com a função **stip_tags**; <br>
Geralmente para salvar dados no banco removemos as tags; <br>

## Resgatando uma parte da string
Com a função **substr**, podemos resgatar apenas uma parte da string; <br>
Exemplo: ``` substr(str, início, fim) ```; <br>
**Str** é a string que vamos procurar algo; <br>
**Inicio** é a string que vamos procurar algo; <br>
**Fim** é o índice final da palavra ou texto; <br>

## String reversa
Podemos com PHP inverter uma string, a função **strrev** realiza esta ação; <br>
Ela recebe a string que será invertida como parêmtro; <br>

## Repetição de string
Com a função **str_repeat** você pode repetir n vezes uma determinada string; <br>
O primeiro argumento é a string que será repetida; <br>
O segundo é o número de repetições; <br>

## String para array
Podemos converter uma string em array com afunção **explode**; <br>
Passamos primeiro o separador como argumento; <br>
Depois a string que vai ser convertida; <br>

## Array para string
Podemos converter um array em string com a função **implode**; <br>
Passamos primeiro o separador como argumento; <br>
Depois a string que vai ser convertida; <br>

## Encontrando a primeira ocorrência
Com a função **strpos** podemos encontrar algum texto na string; <br>
Se recebermos **algum valor** é que o texto foi encontrado, e este valor é o índice inicial; <br>
Se for retornado **false**, o texto não está na string; <br>

## Encontrando a última ocorrência
Com a função **strrpos** podemos encontrar a última ocorrência de um texto na string; <br>
Se recebermos **algum valor** é que o texto foi encontrado, e este valor é o índice inicial; <br>
Se for retornado **false**, o texto não está na string;

## Retornando o resto da string 
Com a função **strstr** podemos encontrar um texto em uma strign; <br>
Se algo for encontrado, a função vai retornar o resto da string após o texto encontrado; <br>
Se não encontrar nada retorna false; <br>

## Decompor uma URL
Com a função **parse_url** podemos decompor uma URL; <br>
Vamos receber um array com todas as partes que a URL tem; <br>
Alguns elementos que podem ser retornados são; protocolo, host parâmetros; <br>