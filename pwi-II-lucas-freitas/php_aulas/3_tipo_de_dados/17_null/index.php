<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nulo em PHP</title>
</head>
<body>
    <?php
        /*
        Em PHP, o NULL (Case-sensitive);
        Representa a ausência de valor de uma variável;
        É o único valor possível do tipo de dado primitivo chamado NULL;
        */

        /*
        Como checar se uma variável é NULL?;
        Há duas formas;
         is_null: Retorna true se a variável for NULL;
         Comparação estrita (==NULL): Verifica se a variável tem valor NULL é a do tipo NULL;
        */

        echo NULL;
        $NOME = NULL;

        if(is_null($nome)){
            echo "O valor é nulo";
        }

        $nome = "Ellen";
        if(is_null($nome)){
            echo "O valor é nulo";
        }

        $nome;
        var_dump($nome);  //Resultado NULL
        $taxa = null;
        if(is_null($taxa)){
            echo "Taxa não foi informada";
        }

        if($taxa === null){
            echo "Mesma verificação usando comparação estrita";
        }
    ?>
</body>
</html>