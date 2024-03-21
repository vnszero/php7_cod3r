<div class="title">Deletar Registro</div>

<?php
    require_once "connection.php";

    $sql = "DELETE FROM register WHERE id = 1";
    
    $connection = newConnection();

    $result = $connection->query($sql);

    if ($result) {
        echo "Sucesso :)";
    }
    else
    {
        echo "Erro: " . $connection->error;
    }

    $connection->close();
?>