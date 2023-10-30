<div class="title">Variables</div>

<?php
    $numeroA = 13;
    echo $numeroA . "<br>";
    var_dump($numeroA);
    echo "<br>";
    $soma = $numeroA * 2;

    echo isset($soma) . "<br>";
    unset($soma);
    echo var_dump($soma) . "<br>";
    $soma = "Agora eh um texto";
    echo var_dump($soma) . "<br>"; // funciona, mas tem que ser usado com sabedoria

    // nomes de variaveis
    $var = "valido";
    $var1 = "valido";
    $VAR = "valido";
    $_var = "valido";
    $vár = "valido"; // mas eh melhor evitar
    // $6var = "invalido";
    // $%var = "invalido";
    // $var8% = "invalido";

    // variaveis pre definidas do php
    var_dump($_SERVER);
?>
