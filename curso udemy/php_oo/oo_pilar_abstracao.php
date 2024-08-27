<?php

    //modelo
    class Funcionario {

        //atributos
        public $nome = 'Hiago';
        public $telefone = '17 0000-0000';
        public $numFilhos = 0;

        //métodos
        function resumirCadFunc(){
            echo "$this->nome possui $this->numFilhos filho(s)";
        }

        function modificaNumFilhos($numFilhos){
            //afetar um atributo do objeto
            $this->numFilhos = $numFilhos;
        }

    }

    $y = new Funcionario();
    echo $y->resumirCadFunc();
    echo '</br>';
    $y->modificaNumFilhos(3);
    echo $y->resumirCadFunc();

    echo '<hr/>';

    $x = new Funcionario();
    echo $x->resumirCadFunc();
    echo '</br>';
    $y->modificaNumFilhos(1);
    echo $y->resumirCadFunc();