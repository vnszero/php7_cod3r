<div class="tile">Datas #1</div>

<?php
    echo time() . "<br>";
    
    echo date('D, d/m/y, d \d\e M \d\e Y H:i A') . "<br>";
    
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8');
    
    $tomorrow = time() + 60 * 60 * 24;
    echo date('D, d/m/y, d \d\e M \d\e Y H:i A', $tomorrow) . "<br>";
    
    $next_week = strtotime('+1 week');
    echo date('D, d/m/y, d \d\e M \d\e Y H:i A', $next_week) . "<br>";
    
    $set_date = mktime(15,30,50,1,25,1975);
    echo date('D, d/m/y, d \d\e M \d\e Y H:i A', $set_date) . "<br>";

?>