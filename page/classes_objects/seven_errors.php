<div class="title">Desafio Erros</div>

<?php
    interface Template {
        function metodo1(); // missing public
        public function metodo2($parametro);
    }

    abstract class ClasseAbstrata implements Template { // abstract class implements template, never extends
        public function metodo3() {
            echo "Estou funcionando";
        }
    }

    class Classe extends ClasseAbstrata { // class extends abstract class
        function __construct($parametro) {

        }

        public function metodo1() {} // methods need a body in concrete class
        public function metodo2($parametro) {}
    }

    $exemplo = new Classe(3); // missing parameter // missing new
    $exemplo->metodo3(); // member class ->