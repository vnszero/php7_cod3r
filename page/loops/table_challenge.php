<div class="title">Desafio Tabela</div>

<style>
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
    $matrix = [
        ['01', '02', '03', '04', '05'],
        ['06', '07', '08', '09', '10'],
        ['11', '12', '13', '14', '15'],
        ['16', '17', '18', '19', '20']
    ];

    echo "<table>";
    foreach ($matrix as $array)
    {
        echo "<tr>";
        foreach ($array as $item)
        {
            echo "<td>$item</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    echo "<br>";

    echo "<table>";
    foreach ($matrix as $index => $array)
    {
        echo "<tr>";
        foreach ($array as $item)
        {
            if ($index % 2 == 1)
            {
                echo "<td blue>$item</td>";
            }
            else
            {
                echo "<td grey>$item</td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
?>