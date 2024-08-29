<?php

    //modelo
    class Funcionario {

        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;

        //getters e setters
        function setNome ($nome){
            $this->nome = $nome;
        }

        function setTelefone ($telefone){
            $this->telefone = $telefone;
        }

        function setNumFilhos ($numFilhos){
            $this->numFilhos = $numFilhos;
        }

        function getNome (){
            return $this->nome;
        }

        function getTelefone (){
            return $this->telefone;
        }
        
        function getNumFilhos (){
            return $this->numFilhos;
        }
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
    $y->setNome('Hiago');
    $y->setNumFilhos(0);
    //echo $y->resumirCadFunc();
    echo $y->getNome() .' possui '. $y->getNumFilhos() .' filho(s)';

    echo '<hr/>';

    $x = new Funcionario();
    $x->setNome('Maria');
    $x->setNumFilhos(3);
    //echo $y->resumirCadFunc();
    echo $x->getNome() .' possui '. $x->getNumFilhos() .' filho(s)';