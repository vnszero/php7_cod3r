<div class="title">Break e Continue</div>

<?php
    $count = 0;
    for(;;)
    {
        echo "$count <br>";
        $count++;
        if ($count > 5)
        {
            break;
        }
    }

    for(;;)
    {
        $count++;
        if ($count % 2 === 1)
        {
            continue;
        }
        echo "$count <br>";
        if ($count > 12)
        {
            break;
        }
    }

    foreach (array(1,2,3,4,5,6,7) as $value)
    {
        if ($value === 5) break;
        if ($value % 2 === 0) continue;
        echo $value . "<br>";
    }

    echo "FIM <br>";
?>