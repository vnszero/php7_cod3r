<div class="title">Fixando Tipos</div>

<?php
    function somar1($a, $b)
    {
        echo "<span>Somando $a + $b = </span>";
        return $a + $b;
    }

    echo somar1(1,2) . "<br>";
    echo somar1(1.7,2.5) . "<br>";
    echo somar1(1,"4dois") . "<br>";

    echo "<br>";

    function somar2(int $a, int $b)
    {
        echo "<span>Somando $a + $b = </span>";
        return $a + $b;
    }

    echo somar2(1,2) . "<br>";
    echo somar2(1.7,2.5) . "<br>";
    // echo somar2(1,"4dois") . "<br>"; // does not work in this case

    echo "<br>";

    function somar3(int $a, float $b)
    {
        echo "<span>Somando $a + $b = </span>";
        return $a + $b;
    }

    echo somar3(1,2) . "<br>";
    echo somar3(1.7,2.5) . "<br>";
    // echo somar3(1,"4dois") . "<br>"; // does not work in this case

    echo "<br>";

    function somar4($a, $b) : int
    {
        echo "<span>Somando $a + $b = </span>";
        return $a + $b;
    }

    echo somar4(1,2) . "<br>";
    echo somar4(1.7,2.5) . "<br>";
    echo somar4(1,"4dois") . "<br>";

    echo "<br>";

    function somar5(int $a, float $b) : int
    {
        echo "<span>Somando $a + $b = </span>";
        return $a + $b;
    }

    echo somar5(1,2) . "<br>";
    echo somar5(1.7,2.5) . "<br>";
    // echo somar5(1,"4dois") . "<br>"; // does not work in this case

    echo "<br>";
?>