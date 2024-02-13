<div class="title">For</div>
<?php
    for ($cont = 1; $cont <= 5; $cont++)
    {
        echo $cont . "<br>";
    }

    echo "<hr>";

    for (;$cont <= 10; $cont++)
    {
        echo $cont . "<br>";
    }

    echo "<hr>";

    for (; $cont <= 15;)
    {
        echo $cont . "<br>";
        $cont += 1;
    }

    echo "<hr>";

    $days = [1 => 'Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];

    for ($i=1; $i <= count($days); $i++)
    {
        echo $days[$i] . "<br>";
    }

    echo "<hr>";

    $alpha_matrix = [
        ['a', 'e', 'i', 'o', 'u'],
        ['b', 'c', 'd']
    ];

    for ($j = 0; $j < count($alpha_matrix); $j++)
    {
        for ($k = 0; $k < count($alpha_matrix[$j]); $k++)
        {
            echo "{$alpha_matrix[$j][$k]} ";
        }
        echo "<br>";
    }
?>