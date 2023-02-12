## O que é uma expressão?
Uma __instução de código__ que será avaliada __e resultará em um valor__; <br>
Uma __simples impressão de um texto__ é uma expressão; <br>
__Uma soma ou operação matemática mais complexa__ também; <br>
Na programação realizamos __diversas expressões__ durante nosso código, para formar nosso software;

## O que é um operador?
Operadores são __recursos que utilizamos para compor expressões mais complexas__; <br>
Alguns deles: +, -, **, /, ++, >, <, >=, <= e etc... <br>
Estas operações podem ser matemáticas ou até mesmo comparações; <br>
A ideia principal é que um __novo valor é gerado__ ou também um __booleano pode ser  retornando__; <br>

## Ordem dos operadores
O PHP e as linguagens de programação __executam os operadores na mesma ordem que na matemática__; <br>
Ou seja, em: 2 + 2 * 4, teremos o resultado de __10__; <br>
Pois a __multiplicação é avaliada antes da soma__; <br>
Mesmo que a primeira operação seja soma; <br>
Podemos utilizar os __()__ para separar operações; <br>

## Mudança de tipo implícito
O PHP em certas operações __muda o tipo de dado__ de forma implícita; <br>
Por exemplo 5 / 2 = 2.5 (gera um __float__); <br>
E 5 .5  resulta em 55 (gera uma __string__, o __.__ é o operador de concatenação); <br>
Por isso, temos que __tomar cuidado__ com algumas expressões que podem gerar resultados indesejados; <br>
Este recurso é chamado de __auto cast__; 

## Operadores aritméticos
Temos os __operadores básicos__ da matemática em PHP; <br>
Soma: + <br>
Subtração: - <br>
Divisão: / <br>
Multiplicação: * <br>

## Operador de módulo
O operador de módulo é inserido no código pelo símbolo de __%__; <br>
Sua função é realizar __uma divisão__; <br>
Mas como resultado ele __apresenta apenas o resto__ da mesma; <br>

## Operador de Exponenciação
Podemos realizar o cálculo de potência com o símbolo __**__, exemplo: __5 ** 2__; <br>
Desta maneira teremos o rsultado de __5 elevado a 2__; <br>

## Operador de concatenação
Em PHP podemos concatenar valores com __.__ (ponto); <br>
Concatenar é o ato de __juntar vários textos e/ou números__ em apenas uma string; <br>
__Não há limites__ de quantes expressões podem ser concatenadas;

## Auto incremento e auto decremento
Podemos incrementar um valor ou decrementar com os operadores: __++__ e __--__; <br>
Exemplo: ``` $n++ ou $x--```; <br>
Onde n e x são variáveis, e __terão seus valores alterados com +1 e -1__; <br>
Estes operadores são muito utilizados em __estruturas de repetição__; <br>

## Operadores de comparação
As opreações com operadores de comparação resultarão em true or false; <br>
Igualdade: __==__; <br>
Idêntico a: __===__; <br>
Diferença: __!=__; <br>
Não idêntico a: __!==__; <br>
Maior e maior ou igual a: __> e >=__; <br>
Menor e menor ou igual a: __< e <=__; <br>

## Operador de igualdade
Com o __operador de igualdade__ verificamos se um valor é igual ao outro; <br>
Símbolo é __==__; <br>
Exemplo:
```
    5 == 4 # false
    3 == 3 # true
```

## Operador idêntico a
Com o __operador idêncitco a__ verificamos se um valor é igual ao outro, avaliando o seu tipo também; <br>
O símbolo é: __===__; <br>
Exemplo:
```
    5 === 5 #true
    3 === "3" #false
```

## Operador de diferença
Com o __operador de diferença verificamos se um valor é diferente de outro; <br>
O símbolo é: __!=__; <br>
Exemplo: 
```
    5 != 5 #false
    10 != 5 #true
```

## Operador não idêntico a
Com o __operador não idêntico a__ verificamos se um valor é diferente de outro, avaliando o seu tipo também; <br>
O símbolo é: __!=__; <br>
Exemplo: 
```
    5 !== 4 #false
    3 !== "3" #true
```

## Operador maior e maior ou igual
Com o **operador maior que** verificamos se um valor é maior que outro; <br>
O símbolo é **>**; <br>
Exemplo: **5 > 4 #true**; <br>
Com o **operador mairo ou igual** verificamos se um valor é maior ou igual a outro; <br>
O símbolo é **>=**; <br>
Exemplo: **5 >=5 $true**; <br>

## Operador menor e menor ou igual
Com o **operador menor que** verificamos se um valor é menor que outro; <br>
O símbolo é **<**; <br>
Exemplo: **5 < 4 #false**; <br>
Com o **operador menor ou igual a** verificamos se um valor é menor ou igual a outro; <br>
O símbolo é **<=**; <br>
Exemplo: **11 <= 12 #true**; <br>

## Operadores lógicos
Com os operadores lógicos podemos **encadear várias comparações**; <br>
Operador AND: **&&**; <br>
Operador OR: **||**; <br>
Operador NOT: **!**; <br>

## Operador lógico AND
Os operadores lógicos em conjunto dos de comparação **também retornam um booleano** (true ou false); <br>
No caso de **AND** temos **true** apenas quando **as duas comparações são verdadeiras**; <br>
Símbolo: **&&**; <br>
Exemplo **5 > 2 && 10 < 100 $true**; <br>

## Operador lógico OR
O operador lógico **OR** resulta em **verdadeiro** caso **qualquer um dos lados da operação seja verdadeiro**; <br>
E só resulta em **falso** caso os **dois lados sejam falsos**; <br>
Símbolo: **||**; <br>
Exemplo: **5 > 15 || "teste" == "teste" $true**; <br>

## Operador lógico NOT
O operador lógico **NOT** apenas **inverte o resultado booleano** de uma operação, se ela era originalmente **true**, retornará **false** e virse-versa; <br>
Símbolo: **!**; <br>
Exemplo: **!true # false**; <br>
Exemplo 2 : **!(5 > 2) #false**; <br>

## Operadores de conversão (cast)
Com os **operadores de conversão** podemos **forçar uma variável ser de um determinado tipo**; <br>
**Nem todos são úteis**, os mais utilizados são para converter uma string em número; <br>
Operadores: **int, bool, float, string, array, object e unset**; <br>
Exemplo : **$a = (float) "5.34243"** #string é convertida para float; <br>

## Operadores de atribuição
Com estes operadores podemos **atribuir valor a uma variável**; <br>
O mais conhecido é o **=**, porém temos algumas varições do mesmo; <br>
Operadores: **+=, -=, *=, /= e %=**; <br>
Cada um destes fará uma **operação antes da atribuição**; <br>

## Operador ternário
Este operador constitui uma **estrutura de condição resumida**; <br>
**Na maioria dos casos** vamos optar por if/else; <br>
Porém em situações simples podemos utilizar o ternário; <br>
Exemplo: ``` 5 > 2 ? echo "5 é maior que dois" : echo "5 é menor que 2"```; <br>
A primeira interrogação vem **antes da comparação**; <br>
E o **:** é utilizado para uma segunda situação, caso a primeira seja falsa; <br>