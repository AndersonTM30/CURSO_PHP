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