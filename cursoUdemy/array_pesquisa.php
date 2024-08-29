<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        //in_array() -> true ou false para a existência
        //do que está sendo procurado
        //array_search()
        $lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva');

        echo '<pre>';
        print_r($lista_frutas);
        echo '</pre>';

        echo '<h5>in_array(parâmetro a ser pesquisado, array da pesquisa)</h5>';
        //echo in_array('Maçã', $lista_frutas);
        $existe = in_array('Abacate', $lista_frutas);
        //true -> texto = 1
        //false -> texto = vazio
        if($existe) {
            echo 'Sim, o valor pesquisado existe no array'; 
        } else {
            echo 'Não, o valor pesquisado não existe no array';
        }

        echo '<hr/>';

        echo '<h5>array_search(parâmetro a ser pesquisado, array da pesquisa)</h5>';
        echo array_search('Abacate', $lista_frutas);
        //true -> texto = índice que se encontra no array
        //false -> texto = vazio
        $existe2 = array_search('Abacate', $lista_frutas);
        if($existe2) {
            echo 'Sim, o valor pesquisado existe no array'; 
        } else {
            echo 'Não, o valor pesquisado não existe no array';
        }

        echo '<hr/>';

        $lista_coisas = [
            'frutas' => $lista_frutas,
            'pessoas' => ['João', 'Maria']
        ];

        echo '<pre>';
        print_r($lista_coisas);
        echo '</pre>';

        echo in_array('Uva', $lista_coisas['frutas'])
    ?>
</body>
</html>