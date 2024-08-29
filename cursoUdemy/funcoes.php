<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        //void (sem retorno)
        function exibirBoasVindas(){
            echo "Bem-vindo ao curso de PHP! </br>";
        }

        //return (com retorno)
        function calcularAreaTerreno($largura, $comprimento){
            $area =  $largura * $comprimento;
            return $area;
        }

        exibirBoasVindas();
        exibirBoasVindas();

        echo calcularAreaTerreno(10, 20);
        echo "</br>";
        echo calcularAreaTerreno(2, 30);

    ?>

</body>
</html>