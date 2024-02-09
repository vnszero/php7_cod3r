<div class="title">Mapeamento em array</div>

<?php
    $data = array(
        "idade" => 25,
        "nome" => "Joao",
        "peso" => 71.5
    );
    print_r($data);

    echo "<br>";
    var_dump($data[0]); // NULL, because there is no index 0

    echo "<br>" . $data["idade"];
    echo "<br>" . $data["peso"];
    echo "<br>" . $data["nome"];

    $data["telefone"] = "99999999";

    echo "<br>" . $data["telefone"];
?>