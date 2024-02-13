<div class="title">Desafio Impressão</div>

<?php
    $ar = [
        "AAA",
        "BBB",
        "CCC",
        "DDD",
        "EEE",
        "FFF"
    ];

    for ($i=0; $i < count($ar); $i++)
    {
        if ($i % 2 === 0)
        {
            echo "{$ar[$i]} ";
        }
    }

    echo "<br>";
    
    foreach ($ar as $i => $a)
    {
        if ($i % 2 === 0)
        {
            echo "$a ";
        }
    }
    
    echo "<br>";
?>