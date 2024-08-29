<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //string
        $nome = 'Hiago Tofanelli';
        
        //int
        $idade = 21;
        
        //float
        $peso = 125.3;
        
        //boolean
        $fumante_sn = false; //(true = 1) ou
                             // (false = vazio)

        //... lógica ...//
        $idade = 30
    ?>

    <h1>Ficha cadastral</h1>
    <br>
    <p>Nome: <?php print $nome ?></p>
    <p>Idade: <?php print $idade ?></p>
    <p>Peso: <?php print $peso ?></p>
    <p>Fumante: <?php print $fumante_sn ?></p>
</body>
</html>