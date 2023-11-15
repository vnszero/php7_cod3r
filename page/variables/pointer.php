<div class="title">Ponteiro</div>

<?php
    $value = 'atribuicao por copia';
    $copy = $value;
    $copy = 'somente a copia foi modificada';
    echo $copy . '<br>';
    echo $value . '<br>';

    $var = 'atribuicao por ref';
    $ptr = &$var;
    $ptr = 'atribuicao por referencia';
    echo $ptr . '<br>';
    echo $var . '<br>';
?>