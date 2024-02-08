<div class="title">Desafio Switch</div>
<form action="#" method="post">
    <input type="text" name="param">
    <select name="converter" id="converter">
        <option value="km-to-milles">kilometros > milhas</option>
        <option value="milles-to-km">milhas > kilometros</option>
        <option value="km-to-meters">kilometros > metros</option>
        <option value="meters-to-km">metros > kilometros</option>
        <option value="celsius-to-fahrenheit">celsius > fahrenheit</option>
        <option value="fahrenheit-to-celsius">fahrenheit > celsius</option>
    </select>
    <button>Executar</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>
<?php
    const CONV_MILLES_KM = 0.621371;
    const CONV_METERS_KM = 1000;
    const CONV_CELSIUS_FAHRENHEIT = 9/5;
    const CONV_CELSIUS_FAHRENHEIT_BETA = 32;
    if(isset($_POST["param"]) and isset($_POST["converter"]))
    {
        $param = $_POST['param'];
        $converter = $_POST['converter'];
        $message = "";
        switch($converter)
        {
            case "km-to-milles":
                $out_value = $param * CONV_MILLES_KM;
                $message = "$param kilometro(s) equivale à $out_value milhas";
                break;
            case "milles-to-km":
                $out_value = $param / CONV_MILLES_KM;
                $message = "$param milhas equivale à $out_value kilometro(s)";
                break;
            case "km-to-meters":
                $out_value = $param * CONV_METERS_KM;
                $message = "$param kilometro(s) equivale à $out_value metros";
                break;
            case "meters-to-km":
                $out_value = $param / CONV_METERS_KM;
                $message = "$param metros equivale à $out_value kilometro(s)";
                break;
            case "celsius-to-fahrenheit":
                $out_value = $param * CONV_CELSIUS_FAHRENHEIT + CONV_CELSIUS_FAHRENHEIT_BETA;
                $message = "$param grau(s) Celsius equivale à $out_value grau(s) Fahrenheit";
                break;
            case "fahrenheit-to-celsius":
                $out_value = ($param - CONV_CELSIUS_FAHRENHEIT_BETA) * (CONV_CELSIUS_FAHRENHEIT**(-1));
                $message = "$param grau(s) Fahrenheit equivale à $out_value grau(s) Celsius";
                break;
        }
        echo "<p>$message</p>";
    }
?>