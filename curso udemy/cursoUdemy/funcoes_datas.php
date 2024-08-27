<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        //recuperação da data atual / data corrente
        echo date('d/m/Y H:i' );

        echo '</br>';

        //ver qual timezone estamos utilizando
        echo date_default_timezone_get();

        echo '</br>';

        //modificar o timezone
        date_default_timezone_set('America/Sao_Paulo');
        echo '</br>';
        echo date('d/m/Y H:i' );

        echo '<hr/>';

        $data_inicial = '2018-04-24'; 
        $data_final = '2018-05-15';

        //timestamp (js -> milissegundos / php -> segundos)
        //01/01/1970 

        $time_inicial = strtotime($data_inicial);
        $time_final = strtotime($data_final);

        echo $data_inicial . ' - ' . $time_inicial;
        echo '</br>';
        echo $data_final . ' - ' . $time_final;

        //abs inverte os sinais
        $diferenca_times = abs($time_inicial - $time_final);

        echo '</br>';

        echo 'A diferença de segundos entre data inicial e final é '. $diferenca_times;

        $segundos_existem_dia = 24 * 60 * 60;
        
        echo '</br>';

        echo "Um dia possui $segundos_existem_dia segundos";

        $dias_de_dias_entre_as_datas = $diferenca_times / $segundos_existem_dia;

        echo '</br>';

        echo "Existem $dias_de_dias_entre_as_datas dias entre as datas"
    ?>
</body>
</html>