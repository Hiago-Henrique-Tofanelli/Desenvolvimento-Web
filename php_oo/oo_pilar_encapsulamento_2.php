<?php 

    class Pai{
        private $nome = 'Jorge';
        protected $sobrenome = 'Silva';
        public $humor = 'Feliz';

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

    class Filho extends Pai {
        public function __construct(){
            //exibir todos os métodos do objeto
            echo '<pre>';
                print_r(get_class_methods($this));
            echo '</pre>';
        }
        private function executarMania(){
            echo 'Cantar';
        } //private não pode ser sobrescrito no filho

        public function x(){
            $this->executarMania();
        } //maneira de sobrescrever o método do pai no filho

        protected function responder(){
            echo 'olá';
        } //protected pode ser sobrescrito no filho

        /*public function getAtributo($attr) {
            return $this->$attr;
        }

        public function setAtributo($attr, $value) {
            $this->$attr = $value;
        }*/
        /*public function __get($attr){
            return $this->$attr;
        }

        public function __set($attr, $value){
            $this->$attr = $value;
        }*/
    }

    $filho = new Filho();

    echo '<pre>';
        print_r($filho);
    echo '</pre>';

    echo '<pre>';
    print_r(get_class_methods($filho));
    echo '</pre>';

    $filho->executarAcao();
    echo '</br>';
    $filho->x();
    echo '</br>';

    /*echo $filho->__get('humor');
    echo '</br>';
    echo $filho->__get('sobrenome');
    echo '</br>';
    echo $filho->__get('nome');
    echo '</br>';
    $filho->__set('nome', 'Hiago');
    echo $filho->__get('nome');

    echo '<pre>';
        print_r($filho);
    echo '</pre>';
    */

    /*echo '<pre>';
    print_r($filho);
    echo '</pre>';
    echo $filho->getAtributo('nome');


    $filho->setAtributo('nome', 'Pereira');
    echo '<pre>';
        print_r($filho);
    echo '</pre>';
    echo $filho->getAtributo('nome');
    echo $filho->getAtributo('humor');
    echo $filho->getAtributo('nome');
    echo $filho->getAtributo('sobrenome');
    $filho->setAtributo('humor', 'Triste');
    echo $filho->getAtributo('humor');*/