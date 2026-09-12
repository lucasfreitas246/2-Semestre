<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Varíavel De Escopo Global</title>
</head>
<body>
    <?php
    /*
    Varíavel Global
    A principal característica da varíavel global é ser declarada fora de funções;
    Por comportamento padrão não são acessíveis dentro de funções;
    PRecisamos utilizar a palavra global não ser acessivel dentro de funções,
    previne muitos problemas no software;
    */
    $teste="asd";
    echo"$teste global 1 <br>";
    if(5>2){
        $teste="dsa";
        echo"$teste if <br>";
    }

    echo "$teste global 2 <br>";

    function funcao(){
        $teste="xsxs";
        echo"$teste local <br>";
    }

    funcao();

    function testandoGlobal() {
        global $teste;
        $teste=2;
        echo "$teste global função <br>";
    }

    testandoGLobal();
    
    echo "$teste global 3 <br>";
    ?>
</body>
</html>