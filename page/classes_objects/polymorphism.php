<div class="title">Polimorfismo</div>

<?php
    abstract class Comida {
        public $peso;
    }

    class Arroz extends Comida {

    }

    class ArrozAGrega extends Arroz {

    }

    class Sorvete extends Comida {

    }

    class Pessoa {
        public $peso;

        function __construct($peso) {
            $this->$peso = $peso;
        }
        
        // public function comer(Arroz $comida) { // iria amarrar o tipo em Arroz ou ArrozAGrega
        public function comer(Comida $comida) { // sorvete também é aceito agora
            $this->peso += $comida->peso;
        }
    }

    $c1 = new Arroz();
    $c1->peso = 0.45;

    $c2 = new Sorvete();
    $c2->peso = 0.2;

    $p = new Pessoa(82.28);
    $p->comer($c1);
    $p->comer($c2);

?>