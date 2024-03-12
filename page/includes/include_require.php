<div class="title">Include vs Require</div>

<?php
    ini_set('display_errors', 1);

    echo "Usando include com arquivo inexistente...<br>";
    include("arquivo_inexistente.php"); // lança warning mas a aplicação segue rodando.
    
    echo "usando require com arquivo inexistente...<br>";
    require('arquivo_inexistente.php'); // lança fatal error e quebra aplicação se não encontrar o arquivo.

    echo "Não achou mesmo... <br>";
?>