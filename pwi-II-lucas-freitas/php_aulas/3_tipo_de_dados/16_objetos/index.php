<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objetos em PHP</title>
</head>
<body>
    <?php
        /*
        PHP Possui a POO
        Crinado classes e objetos, o objeto é considerado um tipo de dado;
        Objetos possuem métodos que são suas ações e propriedades;
        Veremos objetos em maiores detalhes futuramente;
        */

        class Pessoa {

            function falar(){
                echo "Olá pessoal";
            }
        }

        $ellen = new Pessoa();

        $ellen->nome = "Ellen Joe";

        echo $ellen->nome;

        echo "<br>";

        $ellen->falar();
    ?>
</body>
</html>