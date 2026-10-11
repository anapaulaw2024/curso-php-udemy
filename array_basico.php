<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php
     //Sequenciais
     //$lista_frutas = array('banana','Maça','Morango', 'Uva');
     $lista_frutas = ['banana','Maça','Morango', 'Uva'];
     $lista_frutas [] = 'Abacaxi';
      echo '<pre>';
     var_dump($lista_frutas);
      echo '</pre>';
      echo '<hr>';
     echo '<pre>';
     print_r($lista_frutas);
     echo '</pre>';
     echo $lista_frutas[2];

     //associativos - associar indices a valor de um item de array para facilitar a visualizaçao e solicitaçao dos valores
     $lista_frutas = array('a'=>'banana',
    'b'=>'Maça',
    'x'=>'Morango',
    '2'=>'Uva');
    ?>
</body>
</html>