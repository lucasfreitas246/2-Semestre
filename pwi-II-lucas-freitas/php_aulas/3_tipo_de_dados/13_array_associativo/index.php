<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Associativo em PHP</title>
</head>
<body>
    <?php
        /*
        Arrays associativos em PHP;
        É como um array, porém com chave e valor;
        A estrutura basee é a mesma, mas vamos construir dessa maneira;
        $arr = ['nome' => 'Camundongo, idade => 29]
        Chave entre aspas, seta para apontar a chave e o valor;
        */

        $arr = ['nome' => 'Shark', 'patas' => 4, 'cor' => 'Marrom'];

        echo $arr['nome'];
        echo "<br>";
        print_r($arr);
        echo "<br>";
        echo $arr['patas'];

        $arrAssoc = ['chave' => 'valor', 'bool' => true];

        echo "<br>";
        print_r($arrAssoc);
    ?>
</body>
</html>