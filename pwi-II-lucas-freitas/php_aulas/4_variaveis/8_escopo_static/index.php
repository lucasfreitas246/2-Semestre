<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Varíavel de Escopo Estática</title>
</head>
<body>
    <?php
    /*
    Varíavel Estática
    A Varíavel estatica é declarada com a instrução static;
    O valor da mesma é mantido e alterado a cada execução de uma função;
    É interessante este comportamento pois as varíaveis de escopo local
    sempre são resetadas.
    */

    function teste(){
        $a=0;
        $a++;

        echo "$a <br>";
    }

    teste();
    teste();
    teste();

    function testeStatic(){
        static $a=0;
        $a++;
        echo "$a <br>";
    }

    testeStatic();
    testeStatic();
    testeStatic();


    ?>
</body>
</html>