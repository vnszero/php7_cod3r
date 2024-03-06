<div class="title">Clousure e Callable</div>

<?php

    function classic_function($a, $b){
        return $a + $b;
    }

    $sum = function ($a, $b){
        return $a + $b;
    };

    echo $sum(2,3) . '<br>';
    echo (is_callable($sum) ? "Sim" : "Não") . "<br>";

    function execute1($a, $b, $op, Callable $funct){
        $resultado = $funct($a, $b) ?? 'nada';
        echo "$a $op $b = $resultado";
    }

    execute1(1,2,'+',$sum);

    function execute2($a, $b, $op, Closure $funct){
        $resultado = $funct($a, $b) ?? 'nada';
        echo "$a $op $b = $resultado";
    }

    execute2(3,4, '+', $sum);
    
    $sum = 5;
    echo (is_callable($sum) ? "Sim" : "Não") . "<br>";
?>