<?php
    class Civilian {
        public $name;
        public $age;

        function __construct($name, $age = 18)
        {
            $this->name = $name;
            $this->age = $age;
        }
        
        public function show()
        {
            return "Nome: {$this->name}; Idade: {$this->age}";
        }
    }
?>