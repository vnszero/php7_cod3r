<div class="title">Construindo Select</div>

<?php
    // Nota: Pesquisar exemplo de uso de get_called_class no projeto
    // isso permite transformar o resultado de uma consulta em objeto

    class Model {
        public static $table_name = "register";

        function __construct()
        {
            // just pass
        }

        private static function getFormatedValue($value)
        {
            if(is_null($value))
            {
                return null;
            }
            elseif (gettype($value) == 'string')
            {
                return "'" . $value . "'";
            }
            else
            {
                return $value;
            }
        }

        public static function getFilters(array $filters) : string 
        {
            $sql = "";
            
            if(!empty($filters))
            {
                $sql .= " WHERE ";
                $conditions = [];
                foreach ($filters as $column => $value)
                {
                    $conditions[] = "$column = " . static::getFormatedValue($value);
                }
                $sql .= implode(" AND ", $conditions);
            }
            return $sql;
        }

        public static function getSelect(array $filters = [], string $columns = "*") : string 
        {
            $sql = "SELECT $columns FROM "
                . static::$table_name
                . static::getFilters($filters);
            return $sql;
        }
    }

    $m = new Model();

    echo $m->getSelect(['name' => 'Chaves', 'email' => 'ccc@zmail.com'], 'name, email, wage');
    echo "<br>";
    echo $m->getSelect([], 'name, email');
    echo "<br>";
    echo $m->getSelect(['name' => 'Chaves', 'email' => 'ccc@zmail.com']);
?>