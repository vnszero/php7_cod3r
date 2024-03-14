<?php namespace App; ?>
<div class="title">Sub Namespace</div>

<?php
    echo __NAMESPACE__ . "<br>";
    const VALUE = 123;

    namespace App\Main;

    echo __NAMESPACE__ . "<br>";
    const VALUE = 456;

    namespace App\Main\Topic;

    echo __NAMESPACE__ . "<br>";
    const VALUE = 789;

    echo VALUE . "<br>";
    echo constant('\\' . __NAMESPACE__ . '\VALUE') . "<br>";
    echo \App\VALUE . "<br>";
    echo \App\Main\VALUE . "<br>";
    echo \App\Main\Topic\VALUE . "<br>";
?>