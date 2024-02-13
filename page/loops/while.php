<div class="title">While e Do While</div>
<?php
    const MAX_VALUE = 5;
    $count = 0;
    while ($count < MAX_VALUE)
    {
        echo "while $count <br>";
        $count++;
    }
    do {
        echo "do while $count <br>";
        $count++;
    } while ($count < MAX_VALUE);

    while (true)
    {
        $count++;
        echo "while(true) $count <br>";
        if ($count > MAX_VALUE) break;
    }
?>