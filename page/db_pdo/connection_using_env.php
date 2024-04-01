<?php
    class Database {
        public static function getConnection() {
            $envPath = realpath(dirname(__FILE__) . '/../env.ini');
            $env = parse_ini_file($envPath);
            
            try {
                $connection = new PDO("mysql:host={$env['host']};dbname={$env['database']}", $env['username'], $env['password']);
            
                return $connection;
            }
            catch (PDOException $e)
            {
                die('Erro: ' . $e->getMessage());
            }          
        }

        public static function getResultFromQuery($sql) {
            $connection = self::getConnection();
            $result = $connection->query($sql);
            
            // close connection
            $connection = null;
            
            return $result;
        }
    }

?>