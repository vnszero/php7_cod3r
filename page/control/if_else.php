<div class="title">If Else</div>

<?php
if (true)
{
    echo 'será executado' . "<br>";
    echo 'deve aparecer na sequencia' . "<br>";
}
else
{
    echo 'nao deve aparecer' . "<br>";
}

if (false)
{
    echo 'nao sera executado' . '<br>';
}
else if (true)
{
    echo 'else if verdadeiro' . '<br>';
}
else
{
    echo 'nao vai chegar aq' . '<br>';
}

echo 'vai aparecer também' . "<br>";
?>