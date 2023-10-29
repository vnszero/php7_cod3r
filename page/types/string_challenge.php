<div class="title">Desafio String</div>

<?php
    // na string '!AbcaBcabc', preciso procurar por 'abc' e retornar 1
    $target = '!AbcaBcabc';
    $goal = 'abc';

    echo strpos(strtolower($target), $goal).'<br>';
    echo stripos($target, $goal).'<br>';
?>