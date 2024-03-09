<div class="title">Construtor e Destrutor</div>

<?php
    class Person {
        public $name;
        public $age;

        function __construct($name, $age = 18)
        {
            echo "Construtor chamado<br>";
            $this->name = $name;
            $this->age = $age;
        }
        
        function __destruct()
        {
            echo "Destruindo objeto<br>";
        }

        public function show() 
        {
            echo "Nome: {$this->name}; Idade: {$this->age}<br>";
        }
    }

    $c1 = new Person("Rebeca", 30);
    $c1->show();
    
    $c2 = new Person("Maria");
    $c2->show();

    unset($c1);
    $c2 = "substituir a variavel por outra coisa força a chamada do destrutor";
?>