<div class="title">Foreach</div>
<?php
    $days = [1 => 'Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];

    foreach ($days as $valor)
    {
        echo $valor . "<br>";
    }

    foreach ($days as $index => $value)
    {
        echo $index . " => " . $value . "<br>";
    }

    $alpha_matrix = [
        ['a', 'e', 'i', 'o', 'u'],
        ['b', 'c', 'd']
    ];

    foreach ($alpha_matrix as $row)
    {
        foreach ($row as $letter)
        {
            echo "$letter ";
        }
        echo "<br>";
    }

    $numbers = [1, 2, 3, 4, 5];
    foreach ($numbers as &$number) //& will hold the address to change the value of the array
    {
        $number *= 2;
    }
    print_r($numbers);
?>