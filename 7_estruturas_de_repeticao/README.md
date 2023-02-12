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