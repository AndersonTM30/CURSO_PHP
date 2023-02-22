## O que é o DAO?
**DAO** = Data Access Object;  
Padrão de código utilizado para persistência de dados;  
Utilizada apenas em **abordagens orientadas a objetos**;  
Há uma classe DAO que será **responsável pelas interações ao DB**;  
Atua como um intermediário de aplicação de banco de dados;  
Separa a regra de negócio da interação com o banco de dados;  
Possibilita também a troca de bancos ou modelo de conexão facilmente;  

## DAO na teoria
Trabalhamos com duas classes;  
Exemplificando com uma classe de usuário;  
**UserDAO**: Manipulação de dados do banco;  
**User**: Todas as ações que não envolvem o banco;  
**Create**: User monta um novo usuário com seus campos necessários do banco, UserDAO recebe este objeto e insere o usuário no banco;  

## Interface do DAO
Normalmente também é criada uma **interface** para o DAO;  
Esta interface molda a classe DAO, definindo sues métodos;  
Desta maneira temos um esqueleto para seguir e implementar a classe que vai manipular o banco de dados;  
Os métodos principais da interface são pelo menos **os que constituem o CRUD**;  
A interface pode ser re-implementada em diversos bancos;  