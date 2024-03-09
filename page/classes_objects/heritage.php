<div class="title">Herança</div>

<?php
    class Civilian {
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
            echo "Pessoa diz tchau<br>";
        }
        
        public function show()
        {
            echo "Nome: {$this->name}; Idade: {$this->age}<br>";
        }
    }

    class User extends Civilian {
        public $login;

        function __construct($name, $age, $login)
        {
            parent::__construct($name, $age);
            $this->login = $login;
            echo "Usuário criado!!!<br>";
        }

        function __destruct()
        {
            echo "Usuário saiu<br>";
        }

        function show() 
        {
            echo "user: {$this->login}; ";  
            parent::show();
        }
    }

    $u = new User("Heitor", 18, "Hlegal");
    $u->show();
?>