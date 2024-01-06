<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testes</title>
</head>

<body>
    <h1>Exemplo de php</h1>
    <?php
    date_default_timezone_set("America/Sao_Paulo");
    echo "Hoje é dia " . date("d/m/y");
    echo "<br>";
    echo "E a hora é " . date("G:i:s");
    ?>
</body>

</html>