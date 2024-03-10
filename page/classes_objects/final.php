<div class="title">Modificador Final</div>

<?php
    abstract class Abs {
        abstract public function metodo1();

        public final function metod2() {
            echo "Não vou mudar!<br>";
        }
    }

    class Classse extends Abs {
        public function metodo1() {
            echo "Executando o método 1<br>";
        }

        // public functino metod2() { // isso não pode ser feito
        //     echo "Extendendo o método 2<lbr>"
        // }
    }

    $classse = new Classse();
    $classse->metodo1();
    $classse->metod2();

    final class Unica {
        public $attr = "Valor Único!!";
    }

    $unica = new Unica();
    echo $unica->attr;

    // class Duplicata extends Unica { // it can't because Unica is final
    //     public $attr2;
    // }
?>