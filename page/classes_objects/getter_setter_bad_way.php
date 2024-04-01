<div class="title">getter e setter</div>

<?php
    class Model {
        protected $values = [];

        function __construct($arr)
        {
            if ($arr)
            {
                foreach ($arr as $key => $value)
                {
                    $this->set($key, $value);
                }
            }
        }

        public function get($key)
        {
            return $this->values[$key];
        }

        public function set($key, $value)
        {
            $this->values[$key] = $value;
        }
    }

    $m = new Model(['name' => 'Joao', 'email' => 'j@zmail.com']);

    echo $m->get('name') . "<br>"; // there is a built-in __set and __get to fix this access problem
    echo $m->get('email') . "<br>";
?>