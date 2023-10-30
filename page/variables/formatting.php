<div class="title">Interpolação</div>

<?php
    $variavel = 40;
    echo "o valor da variavel eh $variavel <br>";
    echo 'o valor da variavel eh $variavel <br>';
    echo 'o valor da variavel eh {$variavel} <br>';
    echo "o valor da variavel eh {$variavel} <br>";
    echo "o valor da variavel eh {$variavel} <br>";
    
    echo sprintf("operacao %d", $variavel + 1);
?>