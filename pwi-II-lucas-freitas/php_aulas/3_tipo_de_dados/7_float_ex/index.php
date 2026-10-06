<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimindo floats e checando</title>
</head>
<body>
    <?php
        $a = 1.2;
        $b = 2.8;
        $c = 6.9;

        echo($a);
        echo "<br>";
        echo($b);
        echo "<br>";
        echo($c);
        echo "<br>";
        echo "É float (1 = Sim && 0 = Não)?: ";
        echo is_float($c);
    ?>
</body>
</html>
