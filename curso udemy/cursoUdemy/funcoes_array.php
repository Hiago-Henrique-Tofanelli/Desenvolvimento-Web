<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $array = 'String';
        $retorno = is_array($array);

        if($retorno){
            echo 'Sim, é um array';
        } else {
            echo 'Não, não é um array';
        }

        echo '<hr/>';
        
        $array2 = [1 => 'a' , 7 => 'b', 18 => 'c'];
        echo '<pre>';
            print_r($array2);
        echo '</pre>';

        $chaves_array = array_keys($array2); // cria um array com as chaves como parâmetros
        echo '<pre>';
            print_r($chaves_array);
        echo '</pre>';

        echo '<hr/>';
        
        $array3 = array('teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'notebook');
        echo '<pre>';
            print_r($array3);
        echo '</pre>';

        sort($array3); // true ou false -> reorganiza os índices
        echo '<pre>';
            print_r($array3);
        echo '</pre>';

        echo '<hr/>';

        $array4 = array('teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte atx', 'notebook');
        echo '<pre>';
            print_r($array4);
        echo '</pre>';

        asort($array4); // true ou false -> preserva os índices
        echo '<pre>';
            print_r($array4);
            echo count($array4); //retorna a quantidade de itens no array
        echo '</pre>';

        echo '<hr/>';
        
        $array5 = ['osx', 'windows'];
        $array6 = array('linux');
        $array7 = ['solaris'];

        $novo_array = array_merge($array5, $array6, $array7);
        echo '<pre>';
            print_r($novo_array);
        echo '</pre>';
        
        echo '<hr/>';
        
        $string = '26/04/2018';
        $array_retorno = explode('/', $string);
        echo '<pre>';
            echo $string;
            echo '</br>';
            print_r($array_retorno);
            echo $array_retorno[2].'-'.$array_retorno[1].'-'.$array_retorno[0];
        echo '</pre>';

        echo '<hr/>';

        $array8 = ['a', 'b', 'x', 'y']; //a,b,x,y
        $string_retorno = implode(',', $array8);
        echo '<pre>';
            print_r($array8);
            print_r($string_retorno);
        echo '</pre>';

    ?>
</body>
</html>