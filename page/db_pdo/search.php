<div class="title">Consultar</div>

<?php
    require_once "connection.php";

    $connection = newConnection();
    $sql = "SELECT * FROM register";
    // PDO::FETCH_NUM
    // PDO::FETCH_ASSOC
    // PDO::FETCH_CLASS
    // PDO::FETCH_BOTH
    $result = $connection->query($sql)->fetchAll(PDO::FETCH_CLASS);

    print_r($result);

    echo "<br><br><hr>";

    $sql = "SELECT * FROM register LIMIT :qtde OFFSET :ref";

    $statement = $connection->prepare($sql);
    $statement->bindValue(':qtde', 2, PDO::PARAM_INT);
    $statement->bindValue(':ref', 3, PDO::PARAM_INT);

    // print_r(get_class_methods($statement));

    if($statement->execute())
    {
        $result = $statement->fetchAll();
        print_r($result);
    }
    else
    {
        echo "Código: " . $statement->errorCode();
        print_r($statement->errorInfo());
    }

    echo "<br><br><hr>";

    $sql = "SELECT * FROM register WHERE id = :id";
    $statement = $connection->prepare($sql);
    
    // set param alternatives
    $statement->bindValue(':id', 5, PDO::PARAM_INT);
    // if ($statement->execute([5]))
    // if ($statement->execute([':id' => 15]))
    
    if ($statement->execute())
    {
        $result = $statement->fetch();
        print_r($result);
    }
    else
    {
        echo "Código: " . $statement->errorCode() . "<br>";
        print_r($statement->errorInfo());
    }

    // close pdo connection
    $connection = null;
?>