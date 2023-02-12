## Função date
A função date recebe um parâmetro, que é o **formato da data**, e este é o primeiro parâmetro da mesma; <br>
A resposta será a **data atual**; <br>
Exemplo: ``` date("d/m/y"); //day/month/year ```; <br>

## Função strtotime
**Recebe uma string** como parâmetros, que é um texto sinalizando tempo; <br>
A função tenta interpretar e transformar em data; <br>
Veja um exemplo de utilização: ``` echo date('d/m/y', strtotime('+2 years')); // 2 anos a mais ```; <br>

## Função mktime
A função mktime recebe em seus parâmetros: **hora, minuto, segundo, mês, dia e ano**; <br>
Assim podemos criar uma data a partir desta informação; <br>
Exemplo:
```
    $date = mktime(01, 18, 00, 03, 12, 2000);
    echo date('d/m/y', $date);
```

## Objeto DateTime
O objeto **DateTime** permite tratar a data como um objeto; <br>
Podemos passar um parâmetro que será a data criada, se não passamos nada a data será a atual; <br>
Podemos exibir as informações do objeto com **print_r**; <br>
Exemplo: ``` $dataAtual = new DateTime(); ``` <br>

## Métodos format e modify
Os métodos **format** e **modify** são da classe DateTime e nos ajudam a manipular os dados nestes objetos; <br>
**format** => Formata a data; <br>
**modify** => Altera a data; <br>

## Métodos setDate e setTime
Temos mais dois métodos interessantes em DateTime: **setDate** e **setTime**; <br>
setDate => Recebe ano, mês e dia, alterando completamente a data; <br>
setTime => Recebe hora, minuto e segundo, alterando o tempo da data; <br>

## Diferenças entre datas
Podemos calcular a **diferença entre duas datas** como o método **diff**; <br>
O resultado pode ser formatado com **format**; <br>
Exemplo: ``` $diferenca = $dateA->diff($dateB); ```

## Comparação de datas
Datas que foram criadas com o objeto de DateTime podem ser comparadas utilizando os **operadores de comparação**; <br>
Operadores como: **>,< ou ==**; <br>
Exemplo: ``` $dataA > $dataB ``` <br>

## Alterando o fuso horário
O PHP por padrão vai utilizar **o fuso horário da máquina que está sendo executado**, ou seja, do servidor; <br>
Porém podemos alterar manualmente o fuso com a função **date_default_timezone_set**; <br>
Esta função recebe como parâmetro o novo fuso horário em string; <br>