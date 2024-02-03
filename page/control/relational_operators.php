<div class="title">Relational Operators</div>

<?php
var_dump(1 == 1);
echo "<br>";
var_dump(1 > 1);
echo "<br>";
var_dump(1 <> 1);
echo "<br>";
var_dump(2 != 1);
echo "<br>";
var_dump('1' !== 1);
echo "<br>";
var_dump(111 === '111');
echo "<br>";
var_dump(1 >= 1);
echo "<br>";
var_dump(1 < 45);
echo "<br>";

echo "<p>Relacionais no If/Else</p><hr>";
$idade = 15;
if($idade < 18) 
{
    echo "Menor de idade = $idade anos<br>";
}
elseif($idade <= 65)
{
    echo "Adulto = $idade anos<br>";
}
else
{
    echo "Terceira idade = $idade anos!";
}

echo "<p>Spaceship<\p><hr>";
var_dump(500 <=> 3);
var_dump(500 <=> 500);
var_dump(50 <=> 600);

echo "<p>Valores podem ser verdadeiros ou falsos<\p><hr>";

var_dump(!!5);
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");
?>