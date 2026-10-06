<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaeríavel por referência no PHP</title>
</head>
<body>
    <?php
        /*
        Varíavel por referência
        Em PHP, uma varíavel por referência permite duas ou mais varíaveis
        apontem para o mesmo conteúdo na memória;
        Símbolo utilizado (antes da varíavel de origem): &
        */

        // 1. Declarando uma varíavel comum
        $original = "Azul";

        // 2. Criando uma referência para a varíavel original
        $copiaPorReferencia = &$original;

        // 3. Modificando o valor através da varíavel de referência
        $copiaPorReferencia = "Vermelho";

        // Ambas as varíaveis exibem "Vermelho", pois apontam para o mesmo valor na memória

        echo "Original: ", $original, "<br>"; // Imprime Original: Vermelho
        echo "Referência: ", $copiaPorReferencia, "<br>"; // Imprime Referência: Vermelho
    ?>
</body>
</html>