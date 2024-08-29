<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        function calcularImposto($salario){
            if($salario < 1903.98){
                echo "Isento";
            } else if ($salario >= 1903.99 && $salario <= 2826.65) {
                echo $salario *= 0.075;
            } else if ($salario >= 2826.66 && $salario <= 3751.05) {
                echo $salario *= 0.15;
            } else if ($salario >= 3751.06 && $salario <= 4664.68) {
                echo $salario *= 0.225;
            } else {
                echo $salario *= 0.275;
            }
        }

        echo calcularImposto(4000);

    ?>

</body>
</html>