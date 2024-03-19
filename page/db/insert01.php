<div class="title">Inserir Registros #01</div>

<?php
    require_once "connection.php";

    $sql = "INSERT INTO register
            (_name, birth_day, email, _site, children, wage)
            VALUES (
                'Marieta',
                '1989-10-29',
                'marieta123@email.com.br',
                'https://marieta123.sites.com.br',
                2,
                13000.87
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