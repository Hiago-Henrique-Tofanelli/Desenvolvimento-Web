<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        /*operadores comparação / lógicos
        while(condicao) {

        }*/

        $num = 1;
        echo 'Início do loop </br>';

        while($num < 10) {

            $num++; // critério de parada

            if($num == 2 || $num == 6){
                continue;
            }

            echo "$num </br>";

            /*
            if($num > 100){
                break;
            }
            */

        }

        echo 'Fim do loop';

    ?>
</body>
</html>