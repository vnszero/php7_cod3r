<div class="title">Desafio PI</div>
<?php
echo pi()."<br>";
$pi = 3.14;
$piError = 2.8;

$inTestPi = $piError;

if ((pi() - $inTestPi)*(pi() - $inTestPi) < 0.01){
    echo "iguais<br>";
}
else
{
    echo "diferentes<br>";
}
?>