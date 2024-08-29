<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        //sequênciais(numéricos)
        $lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva', 'Abacate');
        $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva', 'Abacate'];
        $lista_frutas[] = 'Abacaxi';
        echo '<pre>';
        var_dump($lista_frutas);
        echo '</pre>';
        echo '<hr/>';
        echo '<pre>';
        print_r($lista_frutas);
        echo '</pre>';
        echo '<hr/>';
        echo $lista_frutas[3];
        echo '<hr/>';

        //associativos
        $lista_frutas2 = array('a' => 'Banana',
         'b' => 'Maçã',
         'x' => 'Morango',
         'z' => 'Uva',
         '2' => 'Abacate');

         echo '<pre>';
         var_dump($lista_frutas2);
         echo '</pre>';

         echo $lista_frutas2['2'];
         $lista_frutas2['w'] = 'Abacaxi';
         echo $lista_frutas2['w'];

    ?>
</body>
</html>