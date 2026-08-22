<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHECAGEM DE STRINGS EM PHP</title>
</head>
<body>
    <?php
    /*
    Checando se é uma string
    Podemos utilizar a função is_String() para verificar se um dado é uma
    string;
    A função recebe um valor como parâmetro;
    Novamente receberemos true or false, dependendo dos dados enviados;
    Smpre precisamos utilizar a estrutura IF para validar o valor.
    */

    $str="JULIANA";
    $num=12;

    if(is_string($str)) {
        echo "$str é uma string 1<br>";
    }

    if(is_string($num)){
        echo "$num é uma string 2<br>";
    }

    if(is_string("asd")) {
        echo "é uma string 3 <br>";
    }
    ?>
</body>
</html>