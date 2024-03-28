<div class="title">Alterar Registro</div>

<?php
    require_once "connection.php";

    $sql = "UPDATE register
            SET _name = ?, birth_day = ?, email = ?,
            _site = ?, children = ?, wage = ?
            WHERE id = ?";
        
    $connection = newConnection();
    $statement = $connection->prepare($sql);

    $result = $statement->execute([
        'Gui',
        '1980-12-12',
        'gui@gui.com.br',
        'http://gui.co',
        1,
        12000,
        10
    ]);

    if($result)
    {
        echo "Sucesso :)";
    }
    else
    {
        print_r($statement->errorInfo());
    }
?>