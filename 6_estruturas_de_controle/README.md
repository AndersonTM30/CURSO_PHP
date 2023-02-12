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