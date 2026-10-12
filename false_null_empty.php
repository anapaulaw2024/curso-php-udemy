<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php
     // false (true e false) - tipo variavel boolean
     //null e empty - valores especiais
     $funcionario1 = null;
     $funcionario2 = '';

     //valores null
     if(is_null($funcionario1)){

echo 'Sim, a variavel e null';
     }else{
        echo 'Nao, a variavel n e null';
        }
        echo '<br>'

        if(empty($funcionario2)){

echo 'Sim, a variavel e empty';
     }else{
        echo 'Nao, a variavel n e empty';
        }
    ?>
</body>
</html>