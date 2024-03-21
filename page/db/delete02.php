<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="title">Deletar Registro #02</div>

<?php
    require_once "connection.php";

    $connection = newConnection();
    $registers = [];

    if ($_GET['delete'])
    {
        $delete_sql = "DELETE FROM register WHERE id = ?";
        $statement = $connection->prepare($delete_sql);
        $statement->bind_param("i", $_GET['delete']);
        $statement->execute();
    }

    $sql = "SELECT id, _name, email, birth_day FROM register";
    $result = $connection->query($sql);

    if ($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            $registers[] = $row;
        }
    }
    elseif ($connection->error)
    {
        echo "Erro: " . $connection->error;
    }

    $connection->close();
?>

<table class="table table-hover table-strip">
    <thead>
        <th>Nome</th>
        <th>Email</th>
        <th>Nascimento</th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php foreach($registers as $register): ?>
            <tr>
                <td><?= $register['_name'] ?></td>
                <td><?= $register['email'] ?></td>
                <td>
                    <?= 
                        date('d/m/Y', strtotime($register['birth_day'])) 
                    ?>
                <td>
                    <a href="exercice.php?dir=db&file=delete02&delete=<?= $register['id'] ?>"
                        class="btn btn-danger">
                        Excluir
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>