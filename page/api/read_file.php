<?php
    echo "essa parte não funcionou com o XAMPP, pode ser algum problema de permissão de escrita e leitura do SO" . PHP_EOL . PHP_EOL;

    echo "ler uma parte" . PHP_EOL;
    $file = fopen('test.txt', 'r');
    echo fread($file, 5) . PHP_EOL . PHP_EOL;
    fclose($file);
    
    $file = fopen('test.txt', 'r');
    echo "ler completo" . PHP_EOL;
    echo fread($file, filesize('test.txt')) . PHP_EOL;
    fclose($file);
    
    echo "ler uma linha" . PHP_EOL;
    $file = fopen('test.txt', 'r');
    echo fgets($file) . PHP_EOL; // lê linha por linha
    fclose($file);

    echo "ler caracter por caracter" . PHP_EOL;
    $file = fopen('test.txt', 'r');
    while(!feof($file))
    {
        echo fgetc($file) . PHP_EOL; // ler caracter por caracter!!!
    }
    fclose($file);
?>