<div class="title">Argumentos Variáveis</div>

<?php
    function sum(...$numbers)
    {
        $sum = 0;
        foreach ($numbers as $number)
        {
            $sum += $number;
        }
        return $sum;
    }

    echo sum(1) . "<br>";
    echo sum(1,1) . "<br>";
    echo sum(1,1,2) . "<br>";
    echo sum(1,1,2,3) . "<br>";
    echo sum(1,1,2,3,5) . "<br>";
    echo sum(1,1,2,3,5,8) . "<br>";

    echo "<br>Using array in this context<br>";
    $array = [7, 8, 9];
    // echo sum($array) . "<br>"; // it will not work properly
    echo sum(...$array) . "<br>"; // we must add ... to expand the array elements

    function members($holder, ...$dependents)
    {
        echo "Titular: $holder<br>";
        foreach ($dependents as $dep)
        {
            echo "Dependente: $dep<br>";
        }
    }

    echo "<br>";
    members("João", "Maria", "José", "Ricardo");

    echo "<br>";
    members("Oswaldo");
?>