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

## Onde são salvas as sessions?
As **sessions são salvas em arquivos** no computador que estamos ou no servidor da aplicação; <br>
O caminho para onde os arquivos são salvos fica em php.ini na configuração **session.save_path**; <br>
As sessions podem ser salvas em dois formatos: o próprio do PHP e também o Web Distributed Data eXchange (WDDX); <br>

## Introdução ao SSL
SSL vem de **Secure Sockets Layer**; <br>
O PHP não se importa muito e não tem vantagens sobre o SSL; <br>
Porém garantimos que as requisições de dados entre nosso site e servidor estejam mais seguras com a **encriptação de dados**; <br>
Devemos apenas ter cuidado com os formulários, para que sejam **enviados para a URL com HTTPS**, pois alguns servidores bloqueiam a conexão HTTP; <br>