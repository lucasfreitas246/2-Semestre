<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variável de Variável no PHP</title>
</head>
<body>
    <?php
        /*
        Variável por varíavel
        É possível criar uma varíavel através de outra varíavel;
        O símbolo usado é $$;
        $x = teste;
        $$x = 5;

        Após a execução do código, a varíavel teste (conteúdo de $x) será criada com valor 5
        */

        $x = "nome"; // Valor de nome

        echo "$x <br>";

        $$x = "Gato Gay com Síndrome de Down"; // Var com nome de x (nome), com valor de Gato Gay com Síndrome de Down

        echo "$nome <br>";
    ?>
</body>
</html>