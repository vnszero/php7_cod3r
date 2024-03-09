<div class="title">Fundamentos Classe</div>

<?php
    class P {
        // encapsulamento
        // public representa a visibilidade externa
        // protected representa o meio do caminho e permite propriedades de herança
        // private representa a visibilidade restritiva à classe
        public $name = 'Anônimo';
        public $age = 18;

        // herança e composição (reuso de código)
        // herança é um ...
        // composição tem um ...

        // polimorfismo
        // estático ou dinâmico
        // estático: sobrecarga de método - mesmo nome mas parametros diferentes (não existe no PHP) - é possível mudar um método na classe filha sem mudar os parâmetros
        // dinâmico: permite que uma variável genérica possa assumir a forma de variáveis específicas que herdam da forma mais genérica

        // abstração
        // compreender e modelar o mundo real para o contexto do software

        public function show() {
            echo "Nome: {$this->name}; Idade: {$this->age}<br>";
        }
    }

    $c1 = new P();
    $c1->name = "Ana";
    $c1->age = 21;
    $c1->show();

    $c2 = new P;
    $c2->name = "Gustavo";
    $c2->age = 23;
    $c2->show();
?>