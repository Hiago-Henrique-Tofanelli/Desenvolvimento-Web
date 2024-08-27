<?php

$busca = 5;

switch($busca){ //comparação por igualdade/equalidade (==)
    case '1':
        $retornoSwitch = 'Encontrou';
        break;
    case '2':
        $retornoSwitch = 'Encontrou';
        break;
    default:
        $retornoSwitch = 'Não encontrou';    
}

echo "Resultado switch: $retornoSwitch";
echo "<hr/>";

$retornoMatch = match($busca) { //comparação por identidade/estrita (===)
    '1'=> 'Encontrou o texto 1',
     1 => 'Encontrou o número 1',
    '2'=> 'Encontrou o texto 2',
     2 => 'Encontrou o número 2',
     5, '8', 12, 'X' => 'Encontrou o valor 5 ou 12, ou os textos 8 ou X',
     default => 'Não encontrou'
};

echo "Resultado Match: $retornoMatch";

echo "<hr/>";

$retornoCondicional = match(true) {
    $busca < 20 => 'Encontrou ',
    $busca >= 20 && $busca <= 30 => 'Encontrou um valor maior que
    20 e menor que 30',
    default => 'Não encontrou'
};

echo "Resultado Match com condicional: $retornoCondicional";