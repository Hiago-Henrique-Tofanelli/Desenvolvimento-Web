<?php

    function sendEmail($destinatarios = "", $cc="", $assunto = "", $mensagem = ""){
        echo "Destinatário: ".$destinatarios."</br>";
        echo "CC: ".$cc."</br>";
        echo "Assunto: ".$assunto."</br>"; 
        echo "Mensagem: ".$mensagem."</br>";
    }

    sendEmail(
    assunto: "Argumentos nomeados",
        destinatarios: "hiagotofanelli@hotmail.com",
mensagem: "Dominando a feature de argumentos nomeados do PHP 8"
    );

    echo "<hr/>";

    /* convencional -> respeitando a ordem dos parâmetros */
    sendEmail(
        "hiagotofanelli@hotmail.com",
        "teste@hotmail.com",
        "Argumentos nomeados",
        "Dominando a feature de argumentos nomeados do PHP 8"
    );

    echo "<hr/>";

    /* convencional -> respeitando a ordem dos parâmetros */
    sendEmail(
        "hiagotofanelli@hotmail.com",
        "Argumentos nomeados",
        "Dominando a feature de argumentos nomeados do PHP 8"
    );