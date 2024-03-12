<div class="title">Require & Return</div>

<?php
    $valorRetorno = require('return_usado.php');
    echo $valorRetorno . "<br>"; // recebeu o retorno
    echo $variavelRetornada . "<br>"; // pois ela foi incluida no escopo

    echo __DIR__ . "<br>";

    $valorRetorno2 = require(__DIR__ . '/return_nao_usado.php');
    echo "$valorRetorno2<br>"; // 1 ou 0, se o arquivo foi ou não carregado com sucesso
    echo "$variavelDeclarada<br>";
?>