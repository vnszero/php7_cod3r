<?php
    require_once('civilian.php');
    class User extends Civilian {
        public $login;

        function __construct($name, $age, $login)
        {
            parent::__construct($name, $age);
            $this->login = $login;
        }

        function show() 
        {
            $user = "Usuário: {$this->login}; ";  
            return $user . parent::show();
        }
    }
?>