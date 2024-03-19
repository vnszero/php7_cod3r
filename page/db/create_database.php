<div class="title">Criar Banco</div>

<?php
    require_once "connection.php";

    $connection = newConnection(null);
    $sql = 'CREATE DATABASE IF NOT EXISTS cod3r_database';

    $result = $connection->query($sql);

    if ($result)
    {
        echo "Sucesso :)";
    } 
    else 
    {
        echo "Erro: " . $connection->error;
    }

    $connection->close();
?>