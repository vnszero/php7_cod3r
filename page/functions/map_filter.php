<div class="title">Map e Filter</div>

<?php
    $scores = [5.3, 5.8, 3.7];
    $final_scores = [];

    foreach ($scores as $score){
        $final_scores[] = round($score);
    }

    print_r($final_scores);
    echo "<br>";

    $round_func = function($number) {
        if ($number - (int) $number >= 0.5)
        {
            return ((int) $number) + 1;
        }
        else
        {
            return (int) $number;
        }
    };

    // using map
    $map_scores = array_map($round_func, $scores);

    print_r($map_scores);
    echo "<br>";

    $criterion = function ($score){
        if ($score >= 6)
        {
            return true;
        }
        else
        {
            return false;
        }
    };

    $approved = array_filter($map_scores, $criterion);

    print_r($approved);
    echo "<br>";
?>