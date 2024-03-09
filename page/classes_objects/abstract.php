<div class="title">Classe Abstrata</div>

<?php
    abstract class Template2 {
        public abstract function method1();
        protected abstract function method2($param);
    }

    abstract class Template2Son extends Template2 {
        public function method1() {
            echo "classe abstrata filha pode implementar método<br>";
        }

        public abstract function method3();
    }

    class Concret extends Template2Son {
        protected function method2($param) {
            echo "Executando Método 2<br>";
        }

        public function method3() {
            echo "Execuntando o método 3<br>";
            $this->method2("oi");
        }
    }

    $c =  new Concret();
    $c->method1();
    $c->method3();
    echo "<br>";
    var_dump($c);
    echo "<br>";
    var_dump($c instanceof Template2);
    echo "<br>";
    var_dump($c instanceof Template2Son);
    echo "<br>";
    var_dump($c instanceof Concret);
    echo "<br>";
    echo "Fim!";
?>