<div class="title">Desafio Recursivo</div>
<?php
    function print_array($array, $arrows){
        foreach ($array as $item)
        {
            if (is_array($item))
            {
                print_array($item, $arrows . ">");
            }
            else
            {
                echo "$arrows $item<br>";
            }
        }
    }

    $array = [
        1,
        2,
        [
            3,
            4,
            5
        ],
        6,
        [
            7,
            [
                8,
                9
            ]
        ],
        10
    ];

    print_array($array, ">");
?>