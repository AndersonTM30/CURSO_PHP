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