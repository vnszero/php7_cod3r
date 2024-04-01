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
                    $this->$key = $value;
                }
            }
        }

        public function __get($key)
        {
            return $this->values[$key];
        }

        public function __set($key, $value)
        {
            $this->values[$key] = $value;
        }
    }

    $m = new Model(['name' => 'Joao', 'email' => 'j@zmail.com']);

    echo $m->name . "<br>";
    echo $m->email . "<br>";

?>