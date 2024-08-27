<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        //gettype() => retorna o tipo da variável
        $valor = 10;
        //$valor2 = (real) $valor; //float, double,real
        //$valor2 = (string) $valor;

        $valor2 = (boolean) $valor; //integer, int

        echo $valor . ' ' . gettype($valor);
        echo '</br>';
        echo $valor2 . ' ' . gettype($valor2);
    ?>

</body>
</html>