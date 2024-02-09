<div class="title">Desafio Sorteio</div>
<?php
    $characters = array("McQueen", "Po", "Guts", "Leona", "Fiona", "Silva");
    $index = array_rand($characters);
    echo "<h1 center>{$characters[$index]}</h1>";
?>
<style>
    [center] {
        display: flex;
        justify-content: center;
    }
</style>