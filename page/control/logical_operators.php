<div class="title">Operadores Lógicos</div>
<?php
echo "<p>V ou F</p><hr>";
var_dump(true);
echo "<br>";
var_dump(!true);

echo "<p>Tabela verdade AND</p><hr>";
var_dump(false && false);
var_dump(false && true);
var_dump(true && false);
var_dump(true && true);
echo "<br>";
var_dump(false and false);
var_dump(false and true);
var_dump(true and false);
var_dump(true and true);
echo "<br>";

echo "<p>Tabela verdade OR</p><hr>";
var_dump(false || false);
var_dump(false || true);
var_dump(true || false);
var_dump(true || true);
echo "<br>";
var_dump(false or false);
var_dump(false or true);
var_dump(true or false);
var_dump(true or true);

echo "<p>Tabela verdade XOR</p><hr>";
var_dump(false != false);
var_dump(false != true);
var_dump(true != false);
var_dump(true != true);
echo "<br>";
var_dump(false xor false);
var_dump(false xor true);
var_dump(true xor false);
var_dump(true xor true);

echo "<p>Exemplo</p><hr>";
$idade = 62;
$sexo = 'F';
$pagouPrevidencia = true;
$criterioMasculino = $idade >= 65 and $sexo === 'M';
$criterioFeminino = $idade >= 60 and $sexo === 'F';
$criterioAposentadoria = $criterioMasculino or $criterioFeminino;
$podeAposentar = $pagouPrevidencia and $criterioAposentadoria; 

if ($podeAposentar)
{
    echo "pode aposentar -> $sexo<br>";
}
else
{
    echo "vai ter que trabalhar mais um pouco...<br>";
}

// old model
// if ($pagouPrevidencia && $idade >= 60 && $sexo === 'F')
// {
//     echo "pode aposentar -> $sexo<br>";
// }
// elseif ($pagouPrevidencia && $idade >= 65 && $sexo === 'M')
// {
//     echo "pode aposentar -> $sexo<br>";
// }
// else
// {
//     echo "vai ter que trabalhar mais um pouco...<br>";
// }
?>
