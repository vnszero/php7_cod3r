<div class="title">Inserir Registro</div>

<?php
    require_once "connection.php";

    $sql = "INSERT INTO register
            (_name, email, birth_day, _site, children, wage)
            VALUES (
                'Guilherme Filho',
                'guiadagalera@zmail.com',
                '1998-7-21',
                'http://guiadagalera.com.br',
                0,
                3000
            )";

    $connection = newConnection();
    // print_r(get_class_methods($connection));

    if ($connection->exec($sql))
    {
        $id = $connection->lastInsertId();
        echo "Novo cadastro com id $id.";
    }
    else
    {
        echo $connection->errorCode() . "<br>";
        print_r($connection->errorInfo());
    }
    
    // close pdo connection
    $connection = null;
?>