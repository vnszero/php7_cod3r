<div class="title">Delete</div>
<?php
    require_once "connection.php";

    $connection = newConnection();
    $sql = "DELETE FROM register WHERE id = :id";

    $statement = $connection->prepare($sql);
    $statement->bindValue(':id', 5, PDO::PARAM_INT);

    if ($statement->execute())
    {
        echo "Deletado com sucesso!";
    }
    else
    {
        echo "erro :(";
        print_r($statement->errorInfo());
    }


    $connection = null;
?>