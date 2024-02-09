<div class="title">Operações</div>

<?php
    $data1 = array(
        "nome" => "Joao",
        "idade" => 21,
    );
    $data2 = array(
        "nome" => "Jose",
        "altura" => 1.90
    );
    $all_data = $data1 + $data2; // key overlay, left operator has preference
    print_r($all_data);

    echo "<br>" . is_array($all_data);
    echo "<br>" . count($all_data);
    $index = array_rand($all_data);
    echo "<br>" . $index . " => " . $all_data[$index] . "<br>";
    echo "$index => {$all_data[$index]}<br>";
    unset($all_data["nome"]);
    print_r($all_data);
    echo "<br>";

    $odds = array(1,3,5,7,9);
    $even = array(2,4,6,8);
    $numbers = $even + $odds; // it will be 2,4,6,8,9 because of index overlay, + is a union operator
    print_r($numbers);
    echo "<br>";

    $numbers = array_merge($even, $odds);
    print_r($numbers);
    echo "<br>";

    sort($numbers);
    print_r($numbers);
    echo "<br>";

?>