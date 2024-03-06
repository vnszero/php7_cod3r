<div class="title">Funções Anônimas</div>

<?php
    $sum = function ($a, $b) {
        return $a + $b;
    };

    echo $sum(1,2) . '<br>';

    function execute($a, $b, $op, $funcao){
        $resultado = $funcao($a, $b);
        echo "$a $op $b = $resultado<br>";
    }

    execute(3,2,'+',$sum);

    $multiply = function ($a, $b){
        return $a * $b;
    };

    execute(4,6,'*',$multiply);

    $divide = function ($a, $b){
        return $a / $b;
    };

    execute(9,3,'/',$divide);
?>