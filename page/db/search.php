<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="title">Buscar Registros</div>

<?php
    require_once "connection.php";

    $sql = "SELECT * FROM register";

    $connection = newConnection();

    $result = $connection->query($sql);

    $registers = [];

    if ($result->num_rows > 0)
    {
        while ($row = $result->fetch_assoc())
        {
            $registers[] = $row;
        }
    } 
    elseif ($connection->error)
    {
        echo "Erro: " . $connection->error;
    }

    print_r($registers);

    $connection->close();
?>

<table class="table table-hover table-striped table-bordered">
    <thead>
        <th>Código</th>
        <th>Nome</th>
        <th>Data de Nascimento</th>
        <th>E-mail</th>
    </thead>
    <tbody>
        <?php foreach($registers as $register): ?>
            <tr>
                <td><?= $register['id'] ?></td>
                <td><?= $register['_name'] ?></td>
                <td>
                    <?= 
                        date('d/m/Y', strtotime($register['birth_day'])); 
                    ?>
                </td>
                <td><?= $register['email'] ?></td>
            </tr>    
        <?php endforeach ?>
    </tbody>
</table>

<style>
    table {
        font-size: 1.2rem;
    }
</style>