# Curso de PHP para iniciantes

## Sintaxe do PHP
O código PHP funciona dentro do bloco ``` <?php ``` e ``` ?>```. Sempre deve ter um ponto e vírgula (;) no fim de cada instrução.

## PHP e suas dependências
Para checar as funções padrões do PHP, usamos o método ``` phpinfo() ```. Ela exibe as versões e também os pacotes instalados. Muito útil para saber como o servidor está configurado.

## Case Sensitivity
Significa que os nomes de variáveis, classes ou funções com diferenças entre maiúsculas e minúsculas, ou seja, $nome != $NOME. <br>
Para Instruções PHP não tem essa diferença, ou seja, ``` echo = ECHO; ```. <br>
Obs: veremos variáveis em detalhes mais adiante;

## Quebra de linha
No PHP permite quebra de linha como no exemplo:
```
echo 'quebra 
de 
linha<br>';
```

## Comentários
Os comentários servem para dar informações e direções importantes de como o código funciona; <br>
Iniciamos um comentário com ```//```. <br>
Todo conteúdo que está em um comentário é ignorado na execução; <br>
Não insira informações sensíveis nos comentários; <br>
Outra forma de inserir comentários é com ```#```; <br>
Comentários multi linhas são feitos com : ``` /* comentário */ ```;

## Palavras Reservadas
Algumas palavras são ```reservadas da linguagem``` e já tem suas funcionalidades definidas, então não podemos utilizar em nossos programas; <br>
Pois caso fosse possível ```poderíamos substituir``` a sua função original; <br>
``` Alguns exemplos são ```: __echo__, __insteadof__, __else__, __interface__, __namespace__, __pow__, __DIR__, __FILE__, __endif__, __print__, __private__, __protectes__, __and__ , __require__, __public__, __as__, __break__, __case__, __for__, __finally__, __switch__, __throw__ e etc. <br>

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

## Estrutura If
A estrutura **if** checa se uma expressão é verdadeira; <br>
Podemos incluir **operadores lógicos nas expressões**; <br>
Exemplo: **if(expressão){bloco de código}**; <br>

## Estrutura else
A estrutura **else** pode executar um outro bloco de código, isso acontece quando a expressão de if é falsa; <br>
Em else **não inserimos expressões**; <br>
Exemplo:
```
if(exp) {

}else {
    
}
```

## If aninhado
Podemos também inserir **um if dentro de outro if**; <br>
Neste caso o segundo bloco precisa apenas ficar dentro do primeiro if, exemplo;
```
    if(exp) {
        if(exp) {
            
        }
    }
```

## Else if
Com o **else if** podemos criar um **novo bloco de expressão**; <br>
Este bloco **será executado caso o primeiro if seja falso**; <br>
O else if fica entre o **if** e o **else**; <br>
Exemplo:
```
    if(exp) {
        else if(exp) {

        }
    }
```

## Switch
O **switch** é uma estrutura de condição, que pode substituir o if em alguns casos; <br>
Podemos adicionar a instrução **break**, para ele não ser mais executado; <br>
Há a possibilidade também de adicionar a instrução **default**, que é executada caso nenhuma condição seja satisfeita; <br>

## While
O while é uma **estrutura de repetição**, pode executar um código n vezes; <br>
Até **satisfazer a sua condição**; <br>
Geralmente é necessário um **contador** para atingir a condição; <br>
Exemplo: 
```
    while(condicao) {
        código
    }
```

## Saindo de loop
Podemos sair de um loop while **antes do seu fim**; <br>
Para isso é necessário adicionar a instrução **break**; <br>
Após interpretada, **o loop será automaticamente finalizado**; <br>
Geralmente inserimos esta instrução em uma **condição if**; <br>

## Loop dentro de loop
Como nas estruturas de if, podemos **adicionar um loop dentro de outro**; <br>
O **contador dever ser único**, para que um loop não afete o outro; <br>
O loop interno será executado tantas vezes quanto o loop externo for; <br>
E em cada uma das suas execuções, serão passadas todas as suas etapas; <br>

## Continue
O **continue** pula uma execução do loop; <br>
Ou seja, quando o interpretador encontrar esta instrução, **a proóxima etapa do loop será executada**; <br>
Novamente constumamos aplicar **dentro de uma estrutura de condição**;<br>

## Do While
O **do while** é também uma estrutura de repetição; <br>
Porém **menos utilizada** que o while; <br>
A sintaxe é invertida, veja um exemplo:
```
    do {
        codigo
    } while(condicao);
```

## A estrutura for
A **for** é com certeza a estrutura de repetição mais utilizada; <br>
Sua **sintaxe é mais organizada**, em apenas uma linha e apresenta ser mais difícil, ao primeiro olhar; <br>
Exemplo: 
```
    for(contador; condicao; incremento) {
        codigo
    }
```

## Loop infinito
O **loop infinito** é um erro que pode ser ocasionado quando uma estrutura de repetição não tem uma condição de término que seja possível; <br>
**Por exemplo**: x > 10 e a variável de referência tem um decremento, não um incremento; <br>
Isso vai fazer **o software trava**, e pode ser um grande problema caso usuários estejam acessando o mesmo; <br>

## Foreach
A **foreach** também é uma estrutura de repetição; <br>
Porém, **ela é orientada a um array**, devemos utilizar um para que a estrutura repita em todos os elementos do mesmo; <br>
Exemplo:
```
    foreach($array as $item) {
        codigo
    }
```

## Include
Com o **include** inserimos um arquivo de PHP, ou até mesmo um HTML, em outro; <br>
Podendo assim **utilizar tudo que está declarado no arquivo incluído**; <br>
O include **não gera erro fatal** se o arquivo não existir, e sim um **warning**; <br>
Exemplo:
``` include "arquivos.ext"```;