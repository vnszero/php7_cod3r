<?php
    namespace Name\Really\Big;

    echo __NAMESPACE__ . "<br>";

    const NUMB = 123;

    function soma($a, $b) {
        return $a + $b;
    }

    class Model {
        public $var;

        function func() {
            echo __NAMESPACE__ . " -> " . 
                    __CLASS__ . " -> " . 
                    __METHOD__ . "<br>";
        }
    }