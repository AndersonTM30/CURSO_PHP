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