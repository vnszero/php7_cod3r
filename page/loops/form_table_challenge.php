<div class="title">Desafio Form Tabela</div>

<form action="#" method="post">
    <div>
        <label for="rows">Linhas</label>
        <input type="number" value=<?= $_POST['rows'] ?? 10 ?> name="rows" id="rows">
    </div>
    <div>
        <label for="columns">Colunas</label>
        <input type="number" value=<?= $_POST['columns'] ?? 10 ?> name="columns" id="columns">
    </div>
    <button>Gerar Tabela</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }

    form > div {
        margin-bottom: 10px;
    }

    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table tr {
        border: 1px solid #444;
    }

    table td {
        margin: 10px 20px;
    }

    [blue] {
        background-color: blue;
    }

    [grey] {
        background-color: grey;
    }

</style>

<?php
    $rows = intval($_POST['rows']);
    $columns = intval($_POST['columns']);

    if (!$rows) $rows = 10;
    if (!$columns) $columns = 10;
    
    echo "<table>";
    $num = 1;
    for ($i = 0; $i < $rows; $i++)
    {
        echo "<tr>";
        for ($j = 0; $j < $columns; $j++){
            echo "<td>$num</td>";
            $num++;
        }
        echo "</tr>";
    }
    echo "</table>";
?>