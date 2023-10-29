<div class="title">Tipo string</div>

<?php
    echo 'eu sou uma string', '<br>';
    var_dump("outra string");
    echo '<br>';

    // concatenacao
    echo "concatenar" . " duas strings";
    echo '<br>';
    echo "concatenar string com ". 123 ."<br>";

    echo "o comando echo suporta", "varias strings", "separadas por ,", "mas isso nao eh concatenacao";
    echo '<br>';

    // aspas dentro de strings
    echo "'aspas simples'".' "aspas duplas"', '<br>';
    echo "\'aspas simples\'".' \"aspas duplas\"', '\\', '<br>';
    print("'aspas simples'".' "aspas duplas"'.'<br>');
    print("\'aspas simples\'".' \"aspas duplas\"'.'\\'.'<br>');

    // funcoes
    echo strtoupper('maximizar').'<br>';
    echo strtolower('MINIMIZAR').'<br>';
    echo ucfirst('primeira LETRA MAiuscula').'<br>';
    echo ucwords('primeira LETRA de todas as palavras').'<br>';
    echo strlen("Quantas letras tem?").'<br>';
    echo mb_strlen("para utf também", "utf-8").'<br>';
    echo substr("apenas um pedaco da string", 7, 6).'<br>';
    echo str_replace("isso", "aquilo", "substitui isso e isso todas as vezes").'<br>';


?>