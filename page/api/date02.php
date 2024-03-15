<div class="title">Datas #2</div>

<?php
    $formatDate1 = 'D, d \d\e M \d\e Y';
    $formatDate2 = '%A, $d de %B de %Y';
    $formatDateHour = '%A, $d de %B de %Y - %H:%M:%S';

    $now = new DateTime();

    print_r($now);
    echo '<br>';

    echo $now->format($formatDate1) . "<br>";

    $yesterday = new DateTime('-1 day');
    echo $yesterday->format($formatDate1) . "<br>";

    $past = new DateTime('1975-03-20 15:30:50');
    echo $past->format($formatDate1) . "<br>";

    $past->modify('+1 year');
    echo $past->format($formatDate1) . "<br>";

    echo ($now > $yesterday ? 'maior' : 'menor') . "<br>";
    echo ($past > $yesterday ? 'maior' : 'menor') . "<br>";
    echo ($now === $yesterday ? 'igual' : 'diferente') . "<br>";
    echo ($now == $yesterday ? 'igual' : 'diferente') . "<br>"; 
?>