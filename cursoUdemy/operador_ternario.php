<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        //Operador ternário estrutura
        // <condição> ? true : false

        $usuario_possui_cartao_loja = true;
        $valor_compra = 99;
        $valor_frete = 50;
        $recebeu_desconto_frete = false;


        $valor_frete_aux = $usuario_possui_cartao_loja && $valor_compra >= 400 ? 0 : ($usuario_possui_cartao_loja && $valor_compra >= 300 ? 25 : ($usuario_possui_cartao_loja && $valor_compra >= 100 ? 10 : $valor_frete));

        $recebeu_desconto_frete = $valor_frete != $valor_frete_aux ? true : false;

        $valor_frete = $valor_frete_aux;
        /*
        if($usuario_possui_cartao_loja && $valor_compra >= 400){
            $valor_frete = 0;
            $recebeu_desconto_frete = true;
        } else if ($usuario_possui_cartao_loja && $valor_compra >= 300) {
            $valor_frete = 10;
            $recebeu_desconto_frete = true;
        } else if ($usuario_possui_cartao_loja && $valor_compra >= 100) {
            $valor_frete = 25;
            $recebeu_desconto_frete = true;
        } else{
            $recebeu_desconto_frete = false;
        }
        */

    ?>

    <h1>Detalhes do pedido</h1>

    <p>Possui cartão da loja? <?= $usuario_possui_cartao_loja ? 'SIM' : 'NÃO'; ?> </p>
    <?php
       echo $usuario_possui_cartao_loja ? 'SIM' : 'NÃO';
    ?>

    <p>Valor da compra: <?= $valor_compra ?> </p>

    <p>Recebeu desconto no frete?</p>
    <?php
        $teste = $recebeu_desconto_frete ? 'SIM' : 'NÃO';
        echo $teste;
    ?>

    <p>Valor do frete: <?= $valor_frete ?> </p>

</body>
</html>