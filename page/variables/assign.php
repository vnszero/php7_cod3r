<div class="title">Atribuições</div>

<?php 
    $numero = 10;
    echo $numero . "<br>";
    $numero += 5;
    echo $numero . "<br>";
    $numero -= 13;
    echo $numero . "<br>";
    $numero++;
    echo $numero . "<br>";
    $numero--;
    echo $numero . "<br>";
    
    echo "<hr>";
    // diferencas entre operacoes de ++ ou --
    echo $numero-- . "<br>";
    echo --$numero . "<br>";
    echo ++$numero . "<br>";
    echo $numero++ . "<br>";
    echo $numero . "<br>";

    echo "<hr>";
    // atribuicoes ?=
    $numero %= 5;
    echo $numero . "<br>";
    $numero *= 40;
    echo $numero . "<br>";
    $numero /= 4;
    echo $numero . "<br>";
    $numero **= 4;
    echo $numero . "<br>";
    $numero .= 5;
    echo $numero . "<br>";

    echo "<hr>";
    // valor default em atribuicao
    // $variavel_inexistente = "essa variavel nao existe";
    $nova_variavel = $variavel_inexistente ?? "valor padrao";
    echo $nova_variavel . '<br>';

?>