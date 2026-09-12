<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escopo de Variavel em PHP - LOCAL</title>
</head>
<body>
    <?php
    /*
    Escopo de Variavel
    Como em outras linguagens em PHP também temos o escopo de varíaveis;
    Local; varíavel declarada em função;
    */

    $x = 10;

    echo "$x global <br>";

    function teste() {
        $x = 5;
        echo "$x local <br>";
    }

    teste();

    function testando() {
        $x = 12;

        echo "$x local 2 <br>";
    }

    $x = 99;

    testando();
    teste();
    echo "$x global <br>"
    ?>
</body>
</html>