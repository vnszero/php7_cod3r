<div class="title">Bubble Sort</div>

<?php
function bubbleSort($arr) {
    $n = count($arr);
    for ($i = 0; $i < $n-1; $i++) {
        for ($j = 0; $j < $n-$i-1; $j++) {
            if ($arr[$j] > $arr[$j+1]) {
                // swap arr[j] and arr[j+1]
                $temp = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $temp;
            }
        }
    }
    return $arr;
}

// Example usage:
$arr = array(64, 34, 25, 12, 22, 11, 90);
$arr = bubbleSort($arr);
print_r($arr);
echo '<br>';
?>