<div class="title">Array Multidimensional</div>

<?php
    $data = [
        [
            "name" => "Maria",
            "age" => "23",
            "hometown" => "BH"
        ],
        [
            "name" => "Caio",
            "age" => "25",
            "hometown" => "Contagem"
        ]
    ];
    
    print_r($data);
    echo "<br>";
    print_r($data[0]);
    echo "<br>";

    $data[] = [
        "name" => "Jorge",
        "age" => "26",
        "hometown" => "Ouro Preto"
    ];

    unset($data[0]);
    print_r($data);

?>