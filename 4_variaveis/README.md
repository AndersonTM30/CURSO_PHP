## Variáveis
São a forma que temos para __declarar um valor e salvá-lo na memória__; <br>
Uma variável em PHP tem o __$__ na frente do seu nome; <br>
Ex: ``` $nome = 'Nome'; ``` <br>
Podemos salvar __qualquer tipo de dado__; <br>
Podemos __alterar o valor de uma variável__ no decorrer do programa; <br>
Podemos imprimir o valor de uma variável com o método __echo__;

## Variável de variável
Podemos criar uma __variável por meio do nome de outra variável__, com um valor diferente; <br>
O símbolo para esta função é __$$__; <br>
Exemplo: <br>
```
$x = 'teste';
$$x = 5;
```
Após a Execução do código, a variável teste(conteúdo de $x), será criada com o valor 5;

## Variável por referência
Podemos criar uma __variável com referência a outra__; <br>
O símbolo é __=&__; <br>
Se mudamos a variável de refer~encia a referenciada muda o valor e ao contrário também gera a mudança; <br>
Exemplo:
```
$x = 2;
$y =& $x;
```

## Escopo de variáveis
Como em outras linguagens, no PHP também temos escopo de variáveis; <br>
__Local__: variável declarada em uma função; <br>
__Global__: variável declarada fora de funções; <br>
__Static__: variável declarada dentro de uma função, porém o seu valor permanece salve entre chamadas da função; <br>
__Parâmetros de função__: variáveis passadas para uma função, podendo ser utilizadas ao longo da mesma;

## Variável Local
A variável local tem seu __escopo definido dentro de uma função__; <br>
Ela __não é acessível__ fora da mesma; <br>
O __seu valor sempre é resetado__ quando a função é finalizada; <br>

## Variável Global
A principal característica da variável global __é ser declarada fora de funções__; <br>
Por comportamento padrão __não são acessíveis dentro de funções__; <br>
Precisamos utilizar a palavra __global__ para isso; <br>
Essa função da variável global não ser acessível dentro de funções; <br>
previne muitos problemas no software;

## Variável Estática
A variável estática é declarada com a instrução __static__; <br>
O valor da mesma __é mantido e alterado a cada execução de uma função__; <br>
É importante esse comportamento pois as variáveis de __escopo local sempre são resetadas__;

## Parâmetro de função
Os parâmetros de função __também são considerados tipos de variáveis__;<br>
Este recurso nos ajuda a __criar funções com valores dinâmicos__;<br>
Podendo __alterá-los a cada invocação__ da mesma; <br>
Podemos passar mais de um parâmetro para uma função;