<div class="title">Criar Tabela</div>

<?php
    
    
    require_once "connection.php";

    // DDL - data definition language
    $sql = "CREATE TABLE IF NOT EXISTS register (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        _name VARCHAR(100) NOT NULL,
        birth_day DATE,
        email VARCHAR(100) NOT NULL,
        _site VARCHAR(100),
        children INT,
        wage FLOAT
    )";

    $connection = newConnection();
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