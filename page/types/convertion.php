<div class="title">Conversões</div>

<?php
    echo is_int(PHP_INT_MAX).'<br>';
    echo var_dump(PHP_INT_MAX + 1).'<br>';
    echo var_dump((float) 3).'<br>';
    echo var_dump((int) 3.4).'<br>';
    echo intval('1101',2).'<br>';
    echo var_dump(round(21.8)).'<br>';
    echo var_dump((int) round(21.8)).'<br>';
    
    echo "<p> Regras para string </p>";
    echo var_dump (3 + "2").'<br>';
    echo var_dump ('3' + 2).'<br>';
    echo var_dump ('3' . 2).'<br>';
    // echo var_dump (1 + "cinco").'<br>'; // isso quebra
    echo var_dump ('3' + '3.1').'<br>';
    echo var_dump ((float) '10.3').'<br>';
    echo var_dump ('10.3').'<br>';
?>