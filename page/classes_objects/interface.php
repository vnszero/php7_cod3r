<div class="title">Interface</div>

<?php
    /* 
        Interface 0% implementado: apenas assinaturas dos métodos
        Classe abstrata x% implementada: uma parte pode ser implementada e uma parte não. Não pode ser instanciada
        Classe concreta 100% dos métodos implementados
    */


    interface Animal {
        function breathe(); // publico por padrão
    }

    interface Vertebrate {
        function stretches();
    }

    interface Canine extends Animal, Vertebrate { // interfaces podem herdar de duas interfaces diferentes
        public function bark() : string;
    }

    class Dog implements Canine { // interface me obriga a implementar todos os métodos
        // classe só pode herdar de outra classe uma única vez
        function breathe(){
            echo "respirar<br>";
        }

        function stretches(){
            return "alongar";
        }

        function bark() : string {
            return "Au Au";
        }

        function run(){
            return "correr";
        }
    }

    $animal1 = new Dog;
    $animal1->breathe();
    echo $animal1->bark() . "<br>";
    echo $animal1->stretches() . "<br>";
    echo $animal1->run() . "<br>";

    var_dump($animal1);
    echo "<br>";
    var_dump($animal1 instanceof Animal);
    echo "<br>";
    var_dump($animal1 instanceof Vertebrate);
    echo "<br>";
    var_dump($animal1 instanceof Canine);
    echo "<br>";
    var_dump($animal1 instanceof Dog);
    echo "<br>";
    echo "Fim!";
?>