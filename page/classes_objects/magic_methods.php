<div class="title">Métodos Mágicos</div>

<?php
    class Pessoa {
        public $nome;
        public $idade;

        function __construct($nome, $idade) {
            echo "construtor invocado<br>";
            $this->nome = $nome;
            $this->idade = $idade;
        }
        
        function __destruct() {
            echo "E morreu <br>";
        }

        public function __toString() {
            return "{$this->nome} tem {$this->idade} anos.";
        }

        public function apresentar() {
            echo $this . "<br>";
        }

        public function  __get($atrib) {
            echo "Lendo atributo não declarado {$atrib}<br>";
        }

        public function __set($atrib, $valor) {
            echo "Alterando atributo não declarado: {$atrib}/{$valor}<br>";
        }

        public function __call($metodo, $param) {
            echo "tentando executar método '$metodo' ";
            echo "com os parametros: ";
            print_r($param);
        }
    }

    $pessoa = new Pessoa('Ricardo', 40); // o construtor é chamado
    $pessoa->apresentar();
    echo $pessoa, "<br>";
    $pessoa->nome = "Reinaldo";
    $pessoa->apresentar();

    // tentar ler um atributo que não existe, chama o __get
    echo $pessoa->nomeCompleto . "<br>";

    // tentar escrever em um atributo que não existe, chama o __set
    $pessoa->nomeCompleto = "Muito legal";

    // chamar um método que não existe, chama o método __call
    $pessoa->exec(1,2,3,'teste');

    $pessoa = null // o destrutor é chamado
?>