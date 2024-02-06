<div class="title">Operador Ternário</div>
<?php
    $idade = 40;

    $alternativa = $idade >= 65 ? "Idoso" : "Maior de idade";
    $status = $idade >= 18 ? $alternativa : "Menor de idade";
    echo $status . "<br>";
?>