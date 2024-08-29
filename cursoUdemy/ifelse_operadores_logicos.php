<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        //AND ou && -> ambos verdadeiros = verdadeiro
        //OR ou || -> um dos dois verdadeiro = verdadeiro
        //XOR -> um verdadeiro e outro falso = verdadeiro
        //! -> negação

        //() -> estabelecer precedência

        if( (5 == 3 XOR 10 > 3) && 5 == 5 ){
            echo 'Verdadeiro';
        } else {
            echo 'Falso';
        }

    ?>

</body>
</html>