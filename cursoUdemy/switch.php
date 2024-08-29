<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        $parametro = 'abc';

        switch ($parametro){
            case 1:
                echo 'Entrou no case 1';
                break;

            case 'abc':
                echo 'Entrou no case 2';
                break;

            case false:
                echo 'Entrou no case 3';
                break;

            default:
                echo 'Entrou no case default';
                break;
        }
    ?>

</body>
</html>