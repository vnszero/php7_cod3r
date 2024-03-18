<div class="title">Criar Banco de Dados</div>

<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    
    require_once "connection.php";
    $connection = newConnection(null);
    $sql = 'CREATE DATABASE IF NOT EXISTS curso_php';

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