<div class="title">Desafio For</div>

<!--
#
##
###
####
#####
1) using $i++
2) $i++ not allowed
-->

<?php
    $var = "#";
    for ($i=0; $i<5; $i++)
    {
        echo $var . "<br>";
        $var .= "#";
    }

    echo "<hr>";
    
    for ($var = "#";$var!="######";$var .= "#")
    {
        echo $var . "<br>";
    }
?>