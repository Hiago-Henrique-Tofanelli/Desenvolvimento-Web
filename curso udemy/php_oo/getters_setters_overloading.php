<?php

    //modelo
    class Funcionario {

        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;

        //getters  setters (overloading / sobrecarregar)

        //function __set($atributo, $value){}
        function __set($atributo, $valor){
            $this->$atributo = $valor;
        }
        function __get($atributo){
            return $this->$atributo;
        }

        //getters e setters
        /*function setNome ($nome){
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
        }*/

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
    $y->__set('nome','Hiago');
    $y->__set('numFilhos', 0);
    //echo $y->resumirCadFunc();
    echo $y->__get('nome') .' possui '. $y->__get('numFilhos') .' filho(s)';

    echo '<hr/>';

    $x = new Funcionario();
    $y->__set('nome','Maria');
    $y->__set('numFilhos', 1);
    //echo $y->resumirCadFunc();
    echo $y->__get('nome') .' possui '. $y->__get('numFilhos') .' filho(s)';