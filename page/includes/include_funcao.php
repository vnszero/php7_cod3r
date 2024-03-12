<div class="title">Include Função</div>

<?php
    echo "Carregando: include_funcao<br>";

    function carregarArquivo() {
        include("include_arquivo.php");

        echo $variavel . "<br>";
        echo soma(2,5) . "!<br>";
    }

    carregarArquivo();
    echo "novamente no arquivo include_funcao<br>";
    echo "Variável = '{$variavel}'.<br>";
    echo soma(1,8) . "!<br>"; // funcão soma estará funcionando
    var_dump($variavel); // a variavel não estará disponível fora do escopo de carregar arquivo
    
?>