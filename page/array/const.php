<div class="title">Array Constante</div>

<?php
    const FRUITS = ['banana', 'apple'];
    // FRUITS = 'teste' // can't change var type
    // FRUITS[0] = 'orange' // can't change items value
    // FRUITS[] = 'tomato' // can't add new items

    // alternative declaration
    const CARS = array('fiat' => 'Uno', 'BMW' => '325i');
    define('CITIES', array('Belo Horizonte', 'Recife'));

    var_dump(CITIES);
    echo "<br>";
    var_dump(FRUITS);
    echo "<br>";
    var_dump(CARS);
?>