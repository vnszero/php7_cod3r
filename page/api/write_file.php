<?php
    echo "essa parte não funcionou com o XAMPP, pode ser algum problema de permissão de escrita e leitura do SO<br>";

    $file = fopen('test.txt','w');
    fwrite($file, "valor a ser salvo\n");
    fclose($file);

    $file = fopen('test.txt','a');
    fwrite($file, "Adicionar\n");
    fclose($file);
?>