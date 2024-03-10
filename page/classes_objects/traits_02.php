<div class="title">Traits #02</div>

<?php
    trait validacao {
        public function validarString($str) {
            return isset($str) && $str !== '';
        }
    }

    trait validacaoMelhor {
        public function validarString($str) {
            return isset($str) && trim($str);
        }
    }

    class Usuario {
        use validacao, validacaoMelhor {
            validacaoMelhor::validarString insteadOf validacao;  // tem que resolver o conflito
            // validacao::validarString insteadOf validacaoMelhor; // caso queira usar da outra trait
        
            validacao::validarString as validacaoSimples; // mesmo renomeando tem que resolver conflito
        }
    }

    $usuario = new Usuario();
    var_dump($usuario->validarString(" "));
    echo "<br>";
    var_dump($usuario->validacaoSimples(" "));
?>