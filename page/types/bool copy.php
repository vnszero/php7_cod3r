<div class="title">Bool</div>

<?php
    echo TRUE; // eh convertido para 1
    echo '<br>';
    echo FALSE; // nem eh exibido

    echo '<br>'.var_dump(true);
    echo '<br>'.var_dump(false);
    echo '<br>'.var_dump('false');
    echo '<br>'.var_dump(TRUE);
    echo '<br>'.var_dump(True);
    echo '<br>'.var_dump(TrUe);
    echo '<br>'.is_bool(true);

    // regras de conversao
    echo '<p>Regras</p>';
    echo var_dump((bool) 0) . '<br>'; // false
    echo var_dump((bool) 23) . '<br>'; // true
    echo var_dump((bool) -1) . '<br>'; // true
    echo var_dump((bool) 0.0) . '<br>'; // false
    echo var_dump((bool) 0.00000001) . '<br>'; // true
    echo var_dump((bool) "") . '<br>'; // false
    echo var_dump((bool) "0") . '<br>'; // false
    echo var_dump((bool) " ") . '<br>'; // true
    echo var_dump((bool) "00") . '<br>'; // true
    echo var_dump((bool) "false") . '<br>'; // true
    
    echo var_dump(!"false") . '<br>'; // false
?>