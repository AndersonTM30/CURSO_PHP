## PHP e Banco de Dados
O PHP tem suporte para **mais de 20 bancos de dados**;  
O mais comum a ser utilizado é o **MySQL**;  
Há algumas formas de conexão a bancos disponíveis no PHP, a mais famosa é o **PDO** (PHP Data Objects), porém também temos a **mysqli**;  
PDO costuma ser implementado por causa da **abordagem orientada a objetos** e outras vantagens sobre a mysqli;  

## Bancos de dados Relacionais
Bancos de dados relacionais te sua principal característica **trabalhar com tabelas**;  
Onde ela **possui colunas** que categorizam os dados, que são inseridos nas tabelas;  
O PHP é muito utilizado com DBs relacionais, como o **MySQL**;    
A linguagem para operações com estes bancos é a **SQL**;  
As instruções em SQL costumam ser escritas em **letras maiúsculas**;  

## Criando banco de dados
Podemos criar banco de dados manualmente em softwares como o **phpMyAdmin** ou por SQL;  
Iremos utilizar **comandos de query** com  o intuito de aprender SQL que vão servir ao longo da sua carreira de programação;  
Para criar bancos vamos utilizar o comando: ``` CREATE DATABASE nome_do_banco; ```  

## Removendo banco de dados
Podemos também **remover os bancos**, ou seja deletá-los do sistema;  
Isso fará com que **todos os dados e tabelas sejam perdidos**, então tome cuidado;  
O comando para deletar bancos é : ``` DROP DATABASE nome_do_banco; ```  

## Principais tipos de dados
Os tipos de dados do banco funcionam como os tipos de dados de variáveis, porém em **vários 'níveis' para a melhor performace**;  
**VARCHAR**: texto de 0 a 65535 caracteres;  
**TEXT**: texto com o máximo 65535 bytes;  
**INT**: números inteiros;  
**BIGINT**: números inteiros com maior proporção que o INT;  
**DATE**: data no formato YYYY-MM-DD;  

## Criando tabelas
As **tabelas ficam dentro dos bancos**, e os **dados ficam dentro das tabelas**, ou seja, é uma parte fundamental do banco relacional;  
Podemos criar tabelas facilmente por SQL, o comando é: 
```
    CREATE TABLE nomeDaTabela(
        coluna tipoDeDado,
        coluna2 tipoDeDado
    );
```

## Removendo tabelas
Há também a possibilidade de **remover tabelas do banco**;  
Os **dados serão removidos** para sempre;  
O comando para deletar tabelas é: ``` DROP TABLE nomeDaTabela; ```  

## Alterando tabela
Podemos **alterar uma tabela já criada**, com algumas operações: **adicionar coluna, remover coluna, modificar coluna**;  
Normalmente **o banco não costuma mudar após a sua criação**, a operação mais provável é a adição de coluans;  
Comandos de alterar tabelas começam com:  
```
ALTER TABLE nomeDaTabela
ADD/DROP COLUMN/MODIFY COLUMN nomeDaColunaNaTabela
```

## Constraints
Constraints são **características que podem ser adicionadas na hora da criação** de uma tabela;  
Podemos definir: **campos que não podem ser nulos, campos únicos, chaves primárias e mais**;  
O comando fica após o tipo da coluna: ``` coluna tipoDeDado constraint ```;  

## NOT NULL
A NOT NULL é uma **constraint**;  
Esta constraint não permite que o dado adicionando a esta coluna esteja vazio;  
Exemplo: ``` nome VARCHAR(100) NOT NULL ```  

## UNIQUE
A UNIQUE é uma **constraint** que garante que todoso os valores da coluna que foi adicionada sejam únicos;  
**Obs**: podemos unir várias constraints;  
Exemplo:
```
CREATE TABLE PESSOA (
    NOME VARCHAR(100) UNIQUE,
    EMAIL VARCHAR(255) NOT NULL UNIQUE
);
```

## Primary Key
A PRIMARY KEY  é uma **constraint**;  
As chaves primárias devem ter valores únicos e não podem ser nulas, geralmente colocadas na coluna de ID;  
Uma tabela **só pode ter uma PRIMARY KEY**;  
Exemplo : ``` id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY ```;  

## Inserindo dados
Para inserir dados vamos utilizar a instrução **INSERT**;  
Devemos determinar a **tabela, colunas e também os dados** que serão inseridos;  
Exemplo: ``` INSERT INTO TABELA(coluna, coluna2) VALUES (valor, valor2); ```  

## Selecionando dados
Para selecionar dados vamos utilizar a instrução **SELECT**;  
Devemos determinar a **tabelas e as colunas** que serão selecionadas;  
Podemos utilizar o * para selecionar todas as colunas;  
Exemplo: ``` SELECT * FROM tabela; ```  

## Selecionando dados WHERE
O WHERE é uma cláusula utilizada para **filtrar registros**;  
Vamos poder **resgatar os dados que batem apenas com as características** que estamos procurando;  
Exemplo: ``` SELECT colunas FROM tabela WHERE condição; ```;

## AND, OR e NOT
Os operadores **AND, OR e NOT** são semelhantes aos do PHP e podem auxiliar o WHERE a filtrar mais ainda os dados;  
Podemos utilizar os operadores em conjunto;  
Veja um exemplo: ``` WHERE condicao AND condicao2 ```  

## ORDER BY
Com o ORDER BY é possível **ordenar o retorno com base em alguma coluna**;  
Podemos ordenar de forma crescente (**ASC**) ou descendente (**DESC**);  
Exemplo: ``` ORDER BY email ASC ```;  

## Atualizando dados
Para atualizar dados em uma tabela vamos utilizar a instrução **UPDATE**;  
Precisamos determinar a **tabela, colunas e valores**;  
**Obs**: um UPDATE sem WHERE vai atualizar todos os dados da tabela;  
Exemplo: ``` UPDATE tabela SET coluna1 = valor1 WHERE condicao;  ```  

## Deletando dados
Para deletar dados de uma tabela vamos utilizar o **DELETE FROM**;  
**Obs**: DELETE sem WHERE vai deletar todos os dados da tabela;  
Exemplo: ``` DELETE FROM tabela WHERE condicao ```;

## Criando usuários
Podemos criar usuários no banco, depois utilizá-los para conectar e realizar as queries;  
Além de criar precisamos **adicionar os privilégios**;  
Exemplo:
```
CREATE USER 'usuario'@'localhost' IDENTIFIED BY 'senha';
GRANT ALL PRIVILEGES ON *.* 'usuario'@'localhost';
FLUSH PRIVILEGES;
```

## mysqli x PDO
O **mysqli** é uma extensão do próprio PHP para conectar ao banco MySql, e tem uma proximidade do código nativo, sendo **mais rápida do que a PDO**;  
**PDO** é uma API para conexão de banco de dados, **não limitada ao MySQL**, que abstrair alguns conceitos com código PHP tornando esta abordagem mais lenta;  
Ambas as formas podem ser utilizadas da forma orientada a objetos;  

## Conectando com mysqli
Para conecttar ao MySQL com o mysqli é muito simples, precisamos utilizar a função **mysqli_connect**;  
Passar os parâmetros de : **host, usuário, senha e banco de dados**;  
Com a conexão feita podemos utilizar as queries;  
Exemplo: ```$conn = new mysqli("host", "user", "pass", "db") ```  

## Checando a conexão
Para verificar se houve algum erro na conexão podemos utilizar a propriedade **connect_errno**;  
E para verificar o erro podemos utilizar o método **connect_error()**;  
Podemos inserir a checagem em um if e mostrar a mensagem de erro com um echo;  

## Executando uma query
Para executar uma query vamos usar o metodo **query**;  
Ele deve ser utilizado **a partir do objeto que fez a conexão**;  
Vamos receber um determinado retorno como resultado, que podem ser os dados, caso seja um SELECT, por exemplo;  
É importante ao fim de todas as queries fechar a conexão, com o método **close**;  
Conexão abertas gastam recursos do servidor e prejudicam a aplicação;   

## Criando e deletando tabelas com mysqli
Para criar e deletar tabelas vamos utilizar as mesmas queries de SQL puro, porém com o auxílio do método **query**;  
**DROP TABLE** para deletar tabelas;  
**CREATE TABLE** para criar tabelas;  
Lembre de fechar a conexão!  

## Inserindo dados com mysqli
Para inseriri dados com o mysqli vamos utilizar a mesma query do SQL puro e novamente o método **query**;  
A instrução para inserir dados é a **INSERT INTO**;  
Devemos passar a **tabela, colunas e valores**;  

## Selecionando dados com mysqli
Para resgatar dados com o mysqli vamos utilizar a mesma query do SQL puro e novamente o método **query**;  
A instrução para inserir dados é a **SELECT**;  
Vamos inseriri o método query em uma variável, que é onde receberemos os resultados;  
Com o método **fetch__assoc**, transformamos os resultados em um array;  

## Prepared statements teoria
Prepared statements é quando criamos uma **query com placeholders** em vez dos valores reais;  
Aumentando a segurança e a performace da requisição;  
Neste caso o fluxo muda um pouco, vamos utilizar o método **prepare** para preparar a query;  
O **bind_param** para resgatar os parâmetros, e o **execute** para rodar a query;  

## Inserindo dados com prepared
Para inserir dados com **prepared statements** vamos seguir a ideia da aula anterior;  
``` prepare => bind_param => execute ```;  
Como teremos uma variável para guardar estes três passos, também devemos fechar a conexão desta variável;  
Ela é comumente chamada de **statement**; (declaração)  
Lembre-se de **fechar a conexão**;  

## Selecionando dados com prepared statement
Para selecionar dados com prepared statements devemos resgatar os dados com o método **fetch_all**;  
A sequência será: prepare => bind_param => execute => get_result => fetch_all;  
E depois devemos **fechar a conexão**;  

## Resgatando apenas uma linha
Para os selects que precisamos de apenas um dados retornado, podemos utilizar o **fetch_row**;  
Este método pode ser inserido depois de obter o resultado, ou seja, após o **get_result**;  

## Atualizando dados com prepared statement
Para atualizar dados vamos **seguir os mesmos passos de INSERt e SELECT**;  
Na hora de inserir o **SET** para atulaizar os campos, vamos inserir os prepared statements;  
Sequência: prepare => bind_param => execute;  

## Deletando dados com prepared
Para atualizar dados vamos **seguir os mesmo passos de INSERT e SELECT**;  
Na hora de inserir o **WHERE** para remover os registros, vamos inserir os prepared statements;  
Sequência: prepared => bind_param => execute;  
Lembrando que DELETE sem WHERE, causa a remoção de todos os registros;  

## Habilitando o PDO
Antes de começar a de fato utilizar o PDO, é necessário checar se a lib está habilitada;  
Vamos checar no **php.ini** por duas linhas, e descomentar caso estejam: **php_pdo**, **php_pdo_mysql**;  

## Conexão com PDO
A conexão com **PDO** é um pouco diferente do **mysqli**, mas vamos informar basicamente os mesmo parâmetros;  
Que são: banco de dados, host, nome do banco, usuário e senha;  
Exemplo: ``` $conn = new PDO("mysql:host=localhost;dbname=teste", $user, $pass) ```;  

## Inserindo dados com PDO
Em PDO vamos tuilizar uma abordagem parecida com o mysqli;  
Utilizaremos o método **preapre** para realizar a query com **prepared statements**;  
Depois **bind_param** para estabelecer os valores dos parâmetros;  
Por fim **execute** fará a execução da query;  
Exemplo: ``` $stmt = $conn-> prepare("INSERT INTO x(a,b) VALUES(?,?)); ```;  

## Atualizando dados com PDO
Para atualizar a abordagem também é parecida;  
Vamos serguir com a sequência: **prepare => bind_param => execute**  
E então a query persistirá no banco:
``` $stmt = $con->prepare("UPDATE x SET a = ?, b = ? WHERE c = ?") ```;  

## Selecionando dados com PdO
Para selecionar dados a abordagem tabém é parecida com mysqli;  
Vamos seguir com a sequência: **prepare> bindParam => execute**;  
Porém para o resgate dos dados tempos dois métodos:  
**fetch**: recebe apenas a primeira ocorrência;  
**fetchAll**: recebe todos os dados;  