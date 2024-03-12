<div class="title">Include</div>

<?php
    echo "Executei essa linha do arquivo include<br>";
    include("include_arquivo.php");
    // include("include_arquivo.php"); // podia ter um ifnot def

    echo soma(3,4) . "!<br>";
    echo "o conteúdo da variável é '{$variavel}'.";
?>