<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php
     //in array() - true ou faslse para a existencia do que esta sendo procurado.
     //array_search() - retorna o valor pesquisado caso ele exista.
     $lista_frutas = ['banana','Maça','Morango', 'Uva'];

     echo '<pre>';
     print_r($lista_frutas);
     echo '</pre>';
     //echo array_search('Uva',$lista_frutas);
     $existe = in_array('Maça', $lista_frutas);
     //true - 1
     //false - vazio
     if($existe){ 
        echo 'Sim, existe o valor pesquisado';
     }else{ 
        echo 'Nao, o valor pesquisado nao existe.';
     }
     $lista_coisas = ['frutas' => $lista_frutas,
     'pessoas' => 'Joao', 'Maria', 'Carlos'];
     echo '<pre>';
     print_r($lista_coisas);
     echo '</pre>';
     echo in_array('Uva', $lista_coisas['frutas']);
    ?>
</body>
</html>