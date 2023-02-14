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