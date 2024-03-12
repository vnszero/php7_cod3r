<?php
    echo "Carregando: include_arquivo<br>";

    $variavel = "Estou definida";

    if (!function_exists('soma')) { // caso o arquivo seja chamado + de 1 vez
        function soma($a, $b) {
            return $a + $b;
        }
    }
?>