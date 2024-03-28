<?php
    function newConnection($database = 'cod3r_database')
    {
        $server = '127.0.0.1:3306';
        $user = 'root';
        $drowssap = '';

        try
        {
            $connection = new PDO("mysql:host=$server;dbname=$database",
                            $user, $drowssap);
            return $connection;
        }
        catch (PDOException $e)
        {
            die('Erro: ' . $e->getMessage());
        }
    }

    newConnection();
?>