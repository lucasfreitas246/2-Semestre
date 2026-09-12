<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variavel por referência</title>
</head>
<body>
    <?php

    /*
    Varíavel por referência

    Em PHP, uma varíavel por referência permite que duas ou mais varíaveis
    apontem para o mesmo conteúdo na memória.
    Para criar uma varíavel por referência, utiliza-se o caractere
    &(e comercial) antes da varíavel de origem.
    */

    //1.Declarando uma varíavel comum
    $original = "Azul";

    //2.Criando uma referência pra a varíavel $original
    $copiaPorReferencia = &$original;

    //3.Modificando o valor através da varíavel de referência
    $copiaPorReferencia = "Vermelho";

    /*Ambas as variaveis exibem "Vermelho", pois apontam para
    o mesmo valor na memoria
    */

    echo "Original:". $original. "\n"; //Imprime : Original: Vermelho
    echo "Referencia: ".$copiaPorReferencia. "\n"; //Imprime: Referência: Vermelho
     $x = 10;

  $y =& $x;

  echo $x;
  echo "<br>";
  echo $y;
  echo "<br>";

  $y = 15;

  echo "Atribuição após ref";
  echo "<br>";
  echo $x;
  echo "<br>";
  echo $y;
  echo "<br>";

  $x = 20;

  echo "Atribuição após ref 2";
  echo "<br>";
  echo $x;
  echo "<br>";
  echo $y;
  echo "<br>";

  $nome = "DEKKOMAYA";

  $nome2 =& $nome;

  echo $nome;
  echo "<br>";
  echo $nome2;
  echo "<br>";

  $nome2 = "João";

  echo $nome;
  echo "<br>";
  echo $nome2;
  echo "<br>";

?>
</body>
</html>