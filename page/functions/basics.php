<div class="title">Fundamentos</div>

<?php
    function printMessage()
    {
        echo "até a próxima!<br>";
    }

    printMessage();
    printMessage();
    printMessage();
    printMessage();

    $var = 1;

    function changeValue()
    {
        $var = 2;
        echo "Durante a função: $var <br>";
    }

    echo "<br>";
    echo "Antes: $var <br>";
    changeValue();
    echo "Depois: $var <br>";

    function changeValueGlobal()
    {
        global $var;
        $var = 3;
        echo "Durante a função: $var <br>";
    }

    echo "<br>";
    echo "Antes: $var <br>";
    changeValueGlobal();
    echo "Depois: $var <br>";
?>