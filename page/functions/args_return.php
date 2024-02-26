<div class="title">Argumentos e Retorno</div>

<?php
    function recoverMessage()
    {
        return "Bem-vindo!!";
    }

    function recoverMessageWithName($name)
    {
        return "Bem-vindo $name!!!";
    }

    function sum($a, $b)
    {
        return $a + $b;
    }

    function passByValue($value, $new_value)
    {
        $value = $new_value;
        return $value;
    }

    function passByReference(&$reference, $new_value)
    {
        $reference = $new_value;
        return $reference;
    }

    $x = 3;
    $y = 4;
    echo recoverMessage() . "<br>";
    echo recoverMessageWithName("Vitor") . "<br>";
    echo sum(45, 21) . "<br>";
    echo sum($x, $y) . "<br>";
    echo passByValue($x, 81) . "<br>";
    echo $x . "<br>";
    echo passByReference($x, 13) . "<br>";
    echo $x . "<br>";
?>