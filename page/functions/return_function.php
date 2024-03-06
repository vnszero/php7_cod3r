<div class="title">Retornando Função</div>

<?php
    function sum($a) {
        return function ($b) use ($a) {
            return $a + $b;
        };
    }

    echo sum(13)(4) . "<br>";

?>