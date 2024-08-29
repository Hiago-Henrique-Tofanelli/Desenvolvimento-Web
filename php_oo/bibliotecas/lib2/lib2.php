<?php
    namespace B;
    class Cliente implements CadastroInterface {
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