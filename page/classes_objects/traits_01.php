<div class="title">Traits #01</div>

<?php
    trait validacao {
        public $a = "valor a";
        private $c = "valor pricado de C";

        public function validarString($str) {
            return isset($str) && $str !== '';
        }
    }

    trait validacaoMelhor {
        public $b = "valor b" ;
        
        public function validarStringMelhor($str) {
            return isset($str) && trim($str);
        }
    }

    class Usuario {
        use validacao, validacaoMelhor;
    
        public function imprimirValorC() {
            echo "{$this->c}<br>";
        }
    }

    // var_dump(validacao->validarString('')); // não pode usar uma trait diretamente, ela preisar pertencer a uma classe

    $usuario = new Usuario();
    var_dump($usuario->validarString(' '));
    echo "<br>";
    var_dump($usuario->validarStringMelhor(" "));
    echo "<br>";
    echo $usuario->a, "<br>", $usuario->b, "<br>";
    $usuario->imprimirValorC();
?>