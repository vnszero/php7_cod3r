<div class="title">Switch</div>
<?php
    $class = "sedan";
    $price = 0.0;
    $model = "";
    switch($class)
    {
        case "luxo":
            $model = "clk180";
            $price = 150000;
            break;
        case "SUV":
            $model = "Dakar";
            $price = 120000;
            break;
        case "sedan":
            $model = "Corolla";
            $price = 90000;
            break;
        default:
            $model = "Kwid";
            $price = 70000;
            break;
    }
    $toShowPrice = number_format($price, 2, ',', '.');
    echo "<p>Carro: $model, Preço: R$ $toShowPrice</p>";
?>