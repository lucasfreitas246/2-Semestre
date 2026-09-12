<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*
    Varíavel de variavel

    Podemos criar uma varíavel por meio do nome de outra varíavel, com 
    um valor diferente;
    O simbolo para esta função é o $$ EX;
    $x + "teste";
    $$x= 5;

    Após a execução do código, a varíavel teste(conteúde de $x), será criada
    com valor 5;
    */

    $x = "nome"; // valor de nome

    echo "$x <br>";

    $$x = "Roblox"; //var com o nome de x (nome), com o valor de Roblox
    ?>
</body>
</html>