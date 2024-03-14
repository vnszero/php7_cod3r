<?php namespace Other\Name; ?>
<div class="title">Use/As</div>

<?php
    echo __NAMESPACE__ . "<br>";

    include ('use_as_arq.php');

    function soma($a, $b)
    {
        return $a . $b; // eu sei!!
    }

    class Model {
        public $var;
        
        function func() {
            echo __NAMESPACE__ . " -> " . 
                    __CLASS__ . " -> " . 
                    __METHOD__ . "<br>";
        }    
    }

    echo \Name\Really\Big\NUMB . "<br>";

    use const \Name\Really\Big\NUMB;
    echo NUMB . "<br>";

    use Name\Really\Big as ctx;

    echo soma(1,2) . "<br>";
    echo ctx\soma(1,2) . "<br>";

    // use function Name\Really\Big\soma // conflito!!
    use function Name\Really\Big\soma as royalSum;
    echo royalSum(100, 212) . "<br>";

    $a = new Model();
    $a->func();

    $b = new ctx\Model();
    $b->func();

    $c = new \Name\Really\Big\Model();
    $c->func();

    use \Name\Really\Big\Model as D;
    $d = new D();
    $d->func();
?>