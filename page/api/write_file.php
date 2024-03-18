<?php
    $file = fopen('./files/test.txt','w');
    fwrite($file, "Novo valor\n");
    fclose($file);

    $file = fopen('./files/test.txt','a');
    fwrite($file, "Adicionar\n");
    fclose($file);

    echo "procurar aquivo na pasta files<br>";
?>