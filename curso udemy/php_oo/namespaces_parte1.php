<?php

    namespace A;
    class Cliente implements \B\CadastroInterface {
        public $nome = 'Jorge';

        public function __construct(){
            echo '<pre>';
                print_r(get_class_methods($this));
            echo '</pre>';
        }

        public function __get($attr){
            return $this->$attr;
        }

        public function salvar(){
            echo 'salvar';
        }

        public function remover(){
            echo 'remover';
        }
    }

    interface CadastroInterface {
        public function salvar();
    }

    namespace B;
    class Cliente implements \A\CadastroInterface {
        public $nome = 'Hiago';

        public function __get($attr){
            return $this->$attr;
        }

        public function remover(){
            echo 'remover';
        }

        public function salvar(){
            echo 'salvar';
        }
    }

    interface CadastroInterface {
        public function remover();
    }

    //-----------

    $c = new \A\Cliente();
    print_r($c);
    echo $c->__get('nome');