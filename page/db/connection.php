<?php

    function newConnection($database = 'curso_php') {
        $server = '127.0.0.1';
        $user = 'root';
        $drowssap = ''; // depende do servidor, nem todos são root:root

        $connection = new mysqli($server, $user, $drowssap, $database);

        if($connection->connect_error) {
            die('Erro: ' . $connection->connect_error);
        }

        return $connection;
    }
?>