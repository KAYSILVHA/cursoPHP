<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testes</title>
</head>

<body>
    <h1>Variáveis e constantes</h1>
    <?php

    //variaveis
    $nome="Kayra";
    $sobrenome="Makkena";
    echo "Muito prazer, $nome $sobrenome";


    //constantes
    const PAIS = "Brasil";
    echo "Você mora no " . PAIS;

    //Regras
    //1 - Variáveis sempre começam com o símbolo $

    //2 - O segundo caractere pode ser letra ou simbolo

    //3 - aceita caracteres [a-z],[A-Z], [0-9] e [_]

    //4 - aceita caracteres da tabela ASCII a partir de 128

    //5 - aceita caracteres acentuados como á, õ, ç

    //6 - A linguagem é case sensitive em relação aos nomes

    //7 - nomes especiais como $this não podem ser usados(palavras reservadas)

    ?>
</body>

</html>