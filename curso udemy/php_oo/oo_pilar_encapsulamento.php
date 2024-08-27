<?php 

    class Pai{
        private $nome = 'Jorge';
        protected $sobrenome = 'Silva';
        public $humor = 'Feliz';
/*
        public function getNome(){
            return $this->nome;
        }

        public function setNome($value){

            if(strlen($value) >= 3){
                return $this->nome = $value;
            }
        }

        public function getSobreNome(){
            return $this->sobrenome;
        }

        public function setSobreNome($value){

            if(strlen($value) >= 3){
                return $this->sobrenome = $value;
            }
        }
*/
        public function __get($attr){
            return $this->$attr;
        }

        public function __set($attr, $value){
            $this->$attr = $value;
        }

        private function executarMania(){
            echo 'Assobiar';
        }

        protected function responder(){
            echo 'oi';
        }

        public function executarAcao(){
            $x = rand(1,10);
            echo $x;
            echo '</br>';
            if($x >= 1 && $x <= 8){
                $this->responder();
            } else{
                $this->executarMania();
            }
        }
    }

    $pai = new Pai();
    echo $pai->humor;
    echo '</br>';
    echo $pai->humor = 'Triste';
    echo '</br>';
    echo $pai->humor;
    echo '</br>';
    echo $pai->nome;
    echo '</br>';
    echo $pai->sobrenome;
    $pai->sobrenome = 'Tofanelli';
    echo '</br>';
    echo $pai->sobrenome;
    /*echo '</br>';
    echo $pai->getNome();
    $pai->setNome('Hiago');
    echo '</br>';
    echo $pai->getNome();
    echo '<hr/>';
    echo '</br>';
    echo $pai->getSobreNome();
    $pai->setSobreNome('Tofanelli');
    echo '</br>';
    echo $pai->getSobreNome();*/
    echo '</br>';
    echo $pai->executarAcao();