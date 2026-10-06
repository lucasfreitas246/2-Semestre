<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays em PHP</title>
</head>
<body>
    <?php
        /* 
        Arrays em linguagem php;
        Conjunto e lista de valores em uma só variável;
        Podemos inserir qualquer tipo de dado em uma array;
        Sintaxe: [1, 2, 3, 4, 5];
        Sempre separada por [];
        */

        $a = [1,2,3];

        print_r($a);
        echo "<br>";
        echo $a[0];

        $arr=["Vinicius", 1069, true];

        echo "<br>";
        print_r($arr);
        echo "<br>";
        print_r($arr[1]);
    ?>
</body>
</html>