<?php
    echo "ler uma parte" . "<br>";
    $file = fopen('./files/test.txt', 'r');
    echo fread($file, 5) . "<br>" . "<br>";
    fclose($file);
    
    $file = fopen('./files/test.txt', 'r');
    echo "ler completo" . "<br>";
    echo fread($file, filesize('./files/test.txt')) . "<br>";
    fclose($file);
    
    echo "ler uma linha" . "<br>";
    $file = fopen('./files/test.txt', 'r');
    echo fgets($file) . "<br>"; // lê linha por linha
    fclose($file);

    echo "ler caracter por caracter" . "<br>";
    $file = fopen('./files/test.txt', 'r');
    while(!feof($file))
    {
        echo fgetc($file) . "<br>"; // ler caracter por caracter!!!
    }
    fclose($file);
?>