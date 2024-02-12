<div class="title">Coparação de Array</div>
<?php
    $arr1 = ['name' => 'Maria', 'age' => 20];
    $arr2 = ['name' => 'Maria', 'age' => 20];
    var_dump($arr1 == $arr2);
    echo " ";
    var_dump($arr1 === $arr2);
    echo "<br>";

    $arr3 = ['age' => 20, 'name' => 'Maria'];
    var_dump($arr1 == $arr3);
    echo " ";
    var_dump($arr1 === $arr3);
    echo " ";
    var_dump($arr1 != $arr3);
    echo " ";
    var_dump($arr1 !== $arr3);
    echo "<br>";

    $arr4 = ['age' => '20', 'name' => 'Maria'];
    var_dump($arr1 == $arr4);
    echo " ";
    var_dump($arr1 === $arr4);
    echo "<br>";
?>