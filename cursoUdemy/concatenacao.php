<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //nome
        $nome = 'Hiago';

        //cor
        $cor = 'preto';

        //idade
        $idade = 21;

        //atividade
        $atividade = 'programação';

        //Operador .

        //aspas simples
        echo 'Olá ' . $nome . ', vi que sua cor preferida é ' . $cor . ', estou vendo também que você possui ' .$idade. ' anos e gosta de estudar ' .$atividade. '</br>';

        //aspas duplas
        echo "Olá $nome, vi que sua cor preferida é $cor, estou vendo também que você possui $idade anos e gosta de estudar $atividade </br>";

        //aspas simples sem concatenação
        echo 'Olá $nome vi que sua cor preferida é $cor, estou vendo também que você possui $idade anos e gosta de estudar $atividade</br>';
    ?>
</body>
</html>