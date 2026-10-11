<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funçoes Data PHP</title>
</head>
<body>
    <?php
    //recuperacao da data atual / data corrente
    //echo date('d');
    //echo date('D');
    echo date('d/m/Y H:i');

    //recuperar timezone default
    echo '<br>';
    echo date_default_timezone_get();
    echo date_default_timezone_set('America/Sao_Paulo');
     echo '<br>';
     echo date('d/m/Y H:i');

     //transformar datas textuais em segundos
     $data_inicial = '2018-04-24';
     $data_final = '2018-05-15';
     //timestamp
     //01/01/1970
     $time_inicial = strtotime($data_inicial);
     $time_final = strtotime($data_final);
     echo $data_inicial . '-' . $time_inicial;
      echo '<br>';
      echo $data_final . '-' . $time_final;
      $diferenca_times = abs($time_final - $time_inicial);
      echo '<br>';
      echo 'A diferença de segundos entre a data inicial e a data final é'.$diferenca_times;

    ?>
    
</body>
</html>