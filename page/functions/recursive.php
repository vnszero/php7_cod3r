<div class="title">Fatorial Recursivo</div>

<?php
    function factorial($n){
        if ($n == 0 or $n == 1){
            return 1;
        }
        return $n * factorial($n-1);
    }

    echo factorial(5) . "<br>";
?>