<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> no PHP</title>
</head>
<body>
    <?php
        /*
        Parâmetros de função
        Também consderados tipos de variáveis;
        Este recurso nos ajuda a criar funções com valores dinâmicos;
        Podendo alterá-los a cada invocação da mesma;
        Podemos passar mais de um parâmetro para uma função;
        */

        function soma() {
            echo $a + $b;
            echo "<br>";
        }

        soma(2, 4);
        soma(6, 8);
        soma(10, 10);
    ?>
</body>
</html>