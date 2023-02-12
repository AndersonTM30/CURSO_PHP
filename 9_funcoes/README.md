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