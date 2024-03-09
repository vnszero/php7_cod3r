<div class="title">Encapsulamento</div>

<?php
    class Encapsulation {
        public $pub = "publico";
        protected $pro = "protegido";
        private $pri = "privado";

        public function show(){
            echo "class Encapsulation) publico = {$this->pub}<br>";
            echo "class Encapsulation) protegido = {$this->pro}<br>";
            echo "class Encapsulation) privado = {$this->pri}<br>";
            $this->dontShow();
        }

        private function dontShow(){
            echo "nao tem como acessar esse método fora da classe<br>";
        }

        protected function goesByHeritage()
        {
            echo "essa função é transmitida por herança<br>";

            // uma função protegida pode acessar um atributo privado?
            echo "Teste: $this->pri<br>";
        }
    }

    $chip = new Encapsulation();
    $chip->show();
    echo "Pode acessar = {$chip->pub}<br>";
    // echo "Pode acessar = {$chip->pro}<br>"; // inacessível fora da classe
    // echo "Pode acessar = {$chip->pri}<br>"; // inacessível fora da classe
    // echo "Pode acessar = {$chip->dontShow}<br>"; // inacessível fora da classe

    class Capsule extends Encapsulation {
        public function newShow()
        {
            echo "class Capsule) publico = {$this->pub}<br>";
            echo "class Capsule) protegido = {$this->pro}<br>";
            // echo "class Capsule) privado = {$this->pri}<br>"; // Capsule não herda pri pois é private
            // $this->dontShow(); // Capsule não herda dontShow
            $this->goesByHeritage();
        }
    }

    echo "<br>";
    $cap = new Capsule;
    $cap->newShow();
?>