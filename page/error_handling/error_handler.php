<div class="title">Error Handler</div>

<?php
    $vecor = [];
    ini_set('display_errors', 1);
    error_reporting(E_ERROR);
    echo $vector[1] . "<br>";
    echo "Não apareceu warning pois error_reporting está apenas para erros<br>";
    error_reporting(~E_ALL);
    echo "o ~ é o operador lógico de negação bit a bit e portando nenhum erro será exibido<br>";
    echo $vector[1] . "<br>";
    echo "até erro fatal como divisão por zero passa<br>";
    error_reporting(E_ALL);
    echo "A partir de agora será possível ver os warnigns lançados pelo php<br>";
    echo $vector[1] . "<br>";

    include("arquivo_inexistente.php");
    function messageFilter($errno, $errstring)
    {
        $text = "include";
        return !!strpos(" $errstring", $text);
    }

    set_error_handler('messageFilter', E_WARNING);
    echo "Esse warning será filtrado<br>";
    include("arquivo_inexistente.php");
    echo "Esse warning foi filtrado<br>";

    restore_error_handler();
    include("arquivo_inexistente.php");
?>