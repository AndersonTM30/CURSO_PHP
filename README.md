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

## Require
Com o **require** inserimos um arquivo de PHP, ou até mesmo um HTML, em outro; <br>
Podendo assim **utilizar tudo que está declarado no arquivo incluído**; <br>
O require **gera erro fatal** se o arquivo não existir, parando o script; <br>
Exemplo:
``` require "arquivo.ext"```;

## include_once require_once
Os dois **funcionam da mesma maneira** que o rquire e include; <br>
Porém **impedem que o mesmo arquivo seja adicionado mais de uma vez** na página; <br>
Este **pode ser o método mais indicado** quando estamos montando templates com PHP; <br>

## Short tags
A **short tag** é uma funcionalidade para adicionar código PHP em uma página; <br>
Este recurso **depende de uma configuração do servidor** para funcionar; <br>
Por isso é desencorajado seu uso, **pode ser que o código não funcione**; <br>
Exemplo: ``` <? echo "teste"; ?> ```;

## Exibição de conteúdo
Com uma **técnica semelhante ao short tags**, podemos exibir conteúdo sem o echo; <br>
Ótima estratégia para resumir as chamados PHP **apenas para exibição de valores**; <br>
Exemplo: ``` <?= "teste"; ?> ```;

## Inserindo PHP ao HTML
Podemos **inserir código dinâmico entre nossas tags**; <br>
As extensões para este tipo de arquivo podem ser de **.php** ou **.phtml**; <br>
Exemplo: ``` <h1><?= $titulo; ?></h1> ```;

## O que são funções?
São **blocos de códigos** que **possuem nomes**; <br>
**Realizam uma ação** e **podem ser reaproveitadas** (chamadas novamente) ao longo do programa; <br>
Podemos passar parâmetros para funções, que moldam a sua execução; <br>
A criação de funções **reduz a duplicidade** de código; <br>
E também **melhora a manutenção** do mesmo; <br>
O PHP possui **diversas funções prontas**, que podemos utilizar;<br>

## Chamando funções
Para chamar uma função basta colocar o seu **nome e abrir e fechar parênteses**; <br>
Exemplo: ``` funcaoTeste() ```; <br>
Algumas funções **exigem parâmetros**; <br>
O ato de chamar uma função também é conhecido como **invocar**; <br>
O PHP tem diversas funções para utilizarmos no nosso código, exemplos: ``` strlen strtoupper, strtolower, print_t, var_dump ```; <br>

## Função com parâmetro
Podemos passar **parâmetros** para a função; <br>
Estes **parâmetros são como variáveis**, que são utilizados dentro da função para moldar a sua execução; <br>
**Não há número máximo** de parâmetros; <br>
Exemplo:
```
    function teste(param, param2)
    {
        // codigo
    }
```

## Retorno de funções
Normalmente funções retornam algo, para isso utilizamos a instrução **return**; <br>
O objetivo é **armazenar o valor de retorno em uma variável** e utilizá-lo posteriormente no código; <br>
Exemplo:
```
    function x(a, b){
        return algumaCoisa;
    }
```

## Relembrando escopo e funções
Nas funções temos um escopo específico chamado de **local**, onde as suas variáveis são exclusivamente delas; <br>
Podemos utilizar as variáveis globais com a instrução **global**; <br>
E também há o **static**, onde podemos manter um valor após a execução de uma função, o que normalmente é resetado; <br>

## Parâmetros default
Podemos passar parâmetros que já possuem um valor pré-determinado; <br>
Então caso você não passe este parâmetro, o valor **default** entra em cena; <br>
A **função será executada normalmente** com o valor definido; <br>
Exemplo:
```
    function teste($a = "padrão"){
        // codigo
    }
```

## Descobrindo argumentos
No PHP temos duas funções interessantes para aprender mais sobre funções; <br>
**func_get_arg** = retorna uma lista com os argumentos de uma função; <br>
**func_num_args** = retorna o número de argumentos de uma função; <br>

## Retornando múltiplos valores
Caso seja necessário retornanr vários valores em uma função, podemos **formar um array para retorno**; <br>
E então **acessar os índices de forma isolada** com a nova variável que contém o retorno; <br>
contém o retorno:
```
    function teste() {
        return ["a", 10, true];
    }
```

## Depuração de valores
Utilizamos duas funções para verificar dados formatados; <br>
**print_r** e **var_dump**; <br>
As duas apresentam os dados de forma semelhante; <br>
Porém var_dump exibe de uma forma "**human readable**", traduzindo seria algo como "para humanos lerem"; <br>

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

## Dividindo arrayas
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

## O que são objetos?
Objetos são entidades que possuem **comportamentos e características**; <br>
As características são conhecidas como **propriedades** (variáveis); <br>
Os comportamentos como **métodos** (funções); <br>
Os objetos interagem entre si e sistemas são escritos orientados a objetos (paradigma de **Orientação a Objetos**); <br>
No PHP podemos desenvolver neste paradigma; <br>

## O que são calsses?
Classes são os "pais" dos objetos; <br>
Em PHP sempre que vamos criar ou **instanciar** um objeto vamos precisar de uma classe; <br>
A classe contém o **molde do objeto**, ou seja, seus métodos e suas propriedades; <br>
Podemos mudar o valor para cada objeto criado, mas ele parte do que a classe impõe; <br>

## Declarando uma classe
Para iniciar uma classe vamos precisar da palavra reservada **class**, e também dar um nome para a classe; <br>
Por convenção, a **inicial do nome é sempre em maiúscula**, ex: User; <br>
Como é um bloco de código, a classe é envolvida por **{}**; <br>
Exemplo:
```
    class User 
    {
        //code...
    }
```

## Instanciando objeto
Para instanciar um objeto vamos utilizar a palavra reservada **new** em conjunto do nome da classe; <br>
A partir daí uma entidade com as características da classe será criada; <br>
Normalmente encapsulamos este valor em uma variável; <br>
Exemplo:
``` $matheus = new User; ``` <br>

## Declarando Métodos
Para declarar um método vamos utilizar a **sintaxe de function**, porém **dentro de uma class**; <br>
O restante é exatamente igual a sintaxe de função; <br>
Podemos retornar ou imprimir dados, dependendo da nossa regra de negócios; <br>

## Declarando propriedades
Para declarar propriedades vamos basicamente criar uma **variável dentro de uma class**; <br>
Porém precisamos definir a sua privacidade, como por exemplo **public**; <br>
Exemplo: ``` public $idade = 20; ```; <br>

## Conhecendo o $this
O **$this** se refere a instância atual do objeto; <br>
Podendo assim alterar um valor de uma propriedade do objeto com : ``` $this->propriedade = "x"; ``` <br>
Tradução literal = este; <br>
Podemos invocar um método do objeto com this também; <br>

## Constantes em classes
As **constantes são parecidas com variáveis**, salvam valores em memória; <br>
Porém o seu **valor não pode ser alterado**; <br>
Exemplo de sintaxe: <br>
```
    public const CHAVE_API = 'AST4059lakjglk@#$';
```

## Visibilidade
Temos três formatos de visibilidade: **public**, **protected** e **private**; <br>
**public**: A propriedade ou método pode ser acessada de qualquer forma; <br>
**protected**: A propriedade ou método pode ser acessada apenas pela classe de origem ou as que recebem a mesma herança; <br>
**Private**: a propriedade ou método pode ser acessada apenas pela classe que foi criada; <br>

## Herança
A herança é o recurso da OOP que dá a possibilidade de uma classe **herdar métodos e propriedades de outra**; <br>
A palavra reservada é **extends**; <br>
Exemplo: 
```
    class Programador extends Pessoa
    {

    }
```

## Checando ancestralidade
Para checar a ancestralidade de uma classe utilizamos o operador **instanceof**; <br>
Podemos inseriri essa operação em um if, pois vai retornar um booleano; <br>
Exemplo: ``` $objeto instanceof Humano ```; <br>

## Interfaces
As interfaces criam um **modelo de uma classe**; <br>
Então toda classe que inplementar uma interface, deverá implementar também suas propriedades e métodos, obrigatoriamente; <br>
A palavra reservada é **implements**; <br>
Exemplo : ```class Humano implements Caracteristicas```;<br>

## Traits
As **traits** permitem o reuso do código sem heirarquia de classes, ou seja, sem herança; <br>
Podemos assim utilizar os métodos da classe que foi feita a trait; <br>
Utilizamos a palavra reservada **use**; <br>
Exemplo:
```
    class Teste
    {
        use ClasseTrait
    }
```

## Classes Abstratas
As **classes abstratas** não podem ser instanciadas; <br>
Podemos ter métodos abstratos, que devem ser implementados obrigatoriamente se uma clsse herdar a abstrata;<br>
A palavra reservada tanto para classes como para métodos é **abstract**; <br>
Exemplo:

``` abstract class ClasseAbstrata{} ```;<br>
## Construtores
Pelos Construtores **podemos inicializar objetos com valores** de propriedades únicas para cada objeto; <br>
Passamos como argumentos os valores das propriedades; <br>
Exemplo: 
```
    function __construct($portas, $motor, $teto_solar){

    }
```

## Classes anônimas
As **classes anônimas** são criadas em uma variável e não possuem nome; <br>
Elas **funcionam como qualquer outra classe**; <br>
Precisamos fechar ela com ";"; <br>
Exemplo: ``` $anonima = new class() {} ```; <br>

## Verificando classes
Em PHP temos alguns métodos que nos ajudam a entednder as classes; <br>
**class_exists()** => verifica se uma classe existe; <br>
**get_class_methods()** => verifica os métodos de uma classe; <br>
**get_class_vars()** => mapeamento das propriedades de uma classe; <br>

## Verificando objetos
Em PHP temos alguns métodos que nos ajudam a entender melhor os objetos; <br>
**is_object()** => verifica se uma variável é um objeto; <br>
**get_class()** => verifica a classe de uma objeto; <br>
**method_exists()** => verifica se um método existe em um objeto; <br>

## Função date
A função date recebe um parâmetro, que é o **formato da data**, e este é o primeiro parâmetro da mesma; <br>
A resposta será a **data atual**; <br>
Exemplo: ``` date("d/m/y"); //day/month/year ```; <br>

## Função strtotime
**Recebe uma string** como parâmetros, que é um texto sinalizando tempo; <br>
A função tenta interpretar e transformar em data; <br>
Veja um exemplo de utilização: ``` echo date('d/m/y', strtotime('+2 years')); // 2 anos a mais ```; <br>

## Função mktime
A função mktime recebe em seus parâmetros: **hora, minuto, segundo, mês, dia e ano**; <br>
Assim podemos criar uma data a partir desta informação; <br>
Exemplo:
```
    $date = mktime(01, 18, 00, 03, 12, 2000);
    echo date('d/m/y', $date);
```

## Objeto DateTime
O objeto **DateTime** permite tratar a data como um objeto; <br>
Podemos passar um parâmetro que será a data criada, se não passamos nada a data será a atual; <br>
Podemos exibir as informações do objeto com **print_r**; <br>
Exemplo: ``` $dataAtual = new DateTime(); ``` <br>

## Métodos format e modify
Os métodos **format** e **modify** são da classe DateTime e nos ajudam a manipular os dados nestes objetos; <br>
**format** => Formata a data; <br>
**modify** => Altera a data; <br>

## Métodos setDate e setTime
Temos mais dois métodos interessantes em DateTime: **setDate** e **setTime**; <br>
setDate => Recebe ano, mês e dia, alterando completamente a data; <br>
setTime => Recebe hora, minuto e segundo, alterando o tempo da data; <br>

## Diferenças entre datas
Podemos calcular a **diferença entre duas datas** como o método **diff**; <br>
O resultado pode ser formatado com **format**; <br>
Exemplo: ``` $diferenca = $dateA->diff($dateB); ```

## Comparação de datas
Datas que foram criadas com o objeto de DateTime podem ser comparadas utilizando os **operadores de comparação**; <br>
Operadores como: **>,< ou ==**; <br>
Exemplo: ``` $dataA > $dataB ``` <br>

## Alterando o fuso horário
O PHP por padrão vai utilizar **o fuso horário da máquina que está sendo executado**, ou seja, do servidor; <br>
Porém podemos alterar manualmente o fuso com a função **date_default_timezone_set**; <br>
Esta função recebe como parâmetro o novo fuso horário em string; <br>

## Introdução ao HTTP
A web roda em cima do protocolo **HTTP** (HyperText Transfer Protocol); <br>
Quando um navegador solicita uma página web é feito um **request HTTP**; <br>
Esta requisição recebe uma resposta, ambos podem possuir um **body**; <br>
A resposta contém um **header**(cabeçalho), que é constitiuído pelo método (GET, POST), arquivo/path solicitado (index.php) e versão do protocolo HTTP(HTTP/1.x); <br>
Basicamente uma requisição é enviada e uma resposta é recebida; <br>

## Métodos HTTP
As requisições que enviamos também contém métodos, alguns deles são: <br>
**GET** => Solicita a apresentação de um recurso (ex: visualização de uma página); <br>
**POST** => Envio de dados ao servidor (ex: cadastro de usuário); <br>
**PUT** => Atualização de dados; <br>
**DELETE** => Remoção de dados; <br>
**PATCH** => Atualização de dado específico; <br>

## Variáveis globais do PHP
Para lidar com estas requisições o PHP nos dá algumas variáveis globais: <br>
**$_ENV** => variáveis de ambiente; <br>
**$_GET** => Parâmetros que foram enviados por request GET; <br>
**$_POST** => Parâmetros que foram enviados por POST; <br>
**$_COOKIE** => Valores de cookies; <br>
**$_SERVER** => Infomações sobre o servidor; <br>
**$_FILES** => Informações sobre os arquvios que vieram por upload; <br>

## Explorando $_SERVER
Como dito anteriormente $_SERVER tem diversas informações importantes; <br>
**SERVER_SOFTWARE** => Identificação do servidor; <br>
**SERVER_NAME** => Hostname, DNS ou IP do servidor; <br>
**SERVER_PROTOCOL** => Protocolo do servidor; <br>
**SERVER_PORT** => Porta do servidor; <br>
**SERVER_STRING** => Argumentos após o ? na URL; <br>

## Processamento de formulários teoria
Vamos realizar processamentos de formulário de duas maneiras: via **GET** e via **POST**; <br>
Com o GET vamos processar os parâmetros que vem na query string, ou seja, na URL; <br>
Com o POST vamos processar as informações que vem na requisição, estas não aparecem na URL; <br>
Exemplos de uso: ``` Buscas => GET, Registro de usuário => POST ```; <br>

## Teste de formulários com GET
Vamos precisar criar um formulário e definir o **método como GET**, e também o arquivo ou rota que vamos acessar em **action**; <br>
No lado do servidor vamos acessar a variável **$_GET** que contém os parâmetros enviados para o servidor; <br>
Faremos o processamento e retornamos algo para o usuário; <br>

## Teste de formulários com POST
Vamos precisar criar um formulário e definir o **método como POST**, e também o arquivo ou rota que vamos acessar em **action**; <br>
No lado do servidor vamos acessar a variável **$_POST** que contém os parâmetros enviados para o servidor; <br>
Faremos o processamento e retornamos algo para o usuário; <br>

## Autoprocessamento de páginas
Podemos criar uma página que faz o **processamento dos dados e também exibe o input de informações**; <br>
Para isso devemos criar um if que checa se o método de requisição (**$_SERVER['REQUEST_METHOD']**) é **GET** ou **POST**; <br>
Depois criar as duas variaçãoes, para cada uma das possibilidades; <br>
Ou checar se algum parâmetro veio pela requisição e então criar as variações; <br>

## Preenchimento de formulário
Podemos preencher o formulário com dados que viearam da requisição; <br>
Isso acontece bastante em resultados de busca ou edições de registros; <br>
Podemos fazer uma **checagem de se o dado foi enviado e recebido** para a página, e utilizar o echo para exibir no **atributo value** do input; <br>
Exemplo: ``` <input type="text" value="<?php echo $nome; ?>"> ```; <br>

## Parâmetro com mais de um valor
Os inputs de checkbox **podem conter mais de um valor**; <br>
Para receber todos eles no backend, precisamos adicionar uma **sintaxe de array** no name; <br>
Assim receberemos todos os inputs marcados; <br>
Exemplo: ``` name="caracteristicas[]" ```; <br>

## Upload de arquivos
Para enviar arquivos ao servidor vamos precisar mudar o enctype do formulário para: **multipart/form-data**; <br>
Também será necessário um input de **tipo file**; <br>
O tamanho do arquivo pode exaurir a memória do servidor; <br>
Depois do envio, todos os dados da imagem estarão em **$_FILES**; <br>

## Validação de formulários
A validação de formulários é uma parte importante do **recebimento de dados**; <br>
Devemos checar se os dados enviados **condizem com o que estamos esperando**; <br>
Para isso podemos criar condicionais fazendo as **verificações**; <br>
Caso alguma não atenda ou um campo obrigatório esteja vazio, retornamos uma mensagem ao usuário; <br>
**Obs**: é possível fazer validações com HTML e também JavaScript; <br>

## Mantendo o estado
O **HTTP** é um protocolo que não mantém o estado (**stateless**); <br>
Ou seja, após o fim ada requisição **a conexão entre usuário e servidor é finalizada**, a próxima conexão não possui mais relação entre ambos; <br>
Para conseguir manter estes dados podemos utilizar os **cookies**; <br>
O problema desta abordagem é que alguns navegadores não permitem o uso de cookies ou o bloqueiam; <br>

## Cookies
Os cookies são strings que contém informações; <br>
A função para adicionar um cookie é **setcookie**; <br>
A função deve ser chamada antes do corpo da página, pois envia dados como **header** (cabeçalho); <br>
O cookie leva dados como : nome, valor e data de expiração; <br>
Podemos acessar os cookies de volta com **$_COOKIE**; <br>

## Sobre as sessions
Com **session** podemos criar uma variável que persiste em diferentes páginas e também perdura por várias visitas ao mesmo site; <br>
A session **utiliza recursos de cookies** para seu funcionamento, e se o recurso estiver desabilitado propaga a sessão via URL; <br>
Sessions são utilizadas para : autenticação, carrinho de compras e tudo o que precisa persistir de página em página; <br>
Acaba sendo o recurso mais utilizado, comparando o com o cookie; <br>
