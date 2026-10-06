<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criação de variáveis no PHP</title>
</head>
<body>
    <?php
        /*
        Forma de declaração de valores para os salvar na memória;
        Sintaxe de criação de variável em PHP $variavel;
        $anomalia = "Gelo";
        Podemos com variável:
            Podemos salvar qaulquer tipo de dado;
            Podemos alterar o valor da variável ao decorrer do programa;
            Podemos imprimir o valor uma variável com 'echo'
        */

        $nome = "Ellen";
        $idade = 19;
        $altura = 1.68;
        $ativo = true;
        $categorias = ["Java", "MySQL", "PHP"];

        /*
        Regras de nome de variáveis:
            Obrigatório uso do $
            Após o $, deve-se iniciar com uma letra ou sublinhado (_). Nunca um número
            Apenas letras (A-Z, a-z), números (0-9) e sublinhados (_)
            Case sensitive ($VALOR =/= $valor)
        */

        //Exemplos de nomes válidos
        $_atacante = "Gelo";
        $nomeCompleto = "Ellen Joe";
        $dano1 = 198211.92;

        //Exemplos de nomes inválidos
        //$6numero = 10; //ERRO: Começa com número
        //$user-name = "A"; //ERRO: Contém hífen
    ?>
</body>
</html>