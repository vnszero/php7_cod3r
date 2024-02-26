<div class="title">Argumentos Padrões</div>

<?php
    function greatings($name = "Senhor(a)", $last_name = "Cliente")
    {
        echo "Olá $name $last_name!<br>";
    }

    greatings();
    greatings("Vinícius");
    greatings("Vinícius", "Silva");
    greatings(null);
    greatings(null, null);

    function meal($dish, $drink = "Água")
    {
        echo "O prato escolhido é $dish<br>";
        echo "A bebida será $drink<br>";
    }

    echo "<br>";
    meal("Burguer");
    echo "<br>";
    meal("Pizza", "Soda");
?>