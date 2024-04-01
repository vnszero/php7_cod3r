<div class="title">Fundamentos</div>

<?php
    echo "Model -> acesso aos dados" . "<br>";
    echo "View -> renderização de interface" . "<br>";
    echo "Controller -> tratamento de requisições" . "<br>";

    echo "requisições chegam pelo Front-controller" . "<br>";

    echo "<hr>";

    echo "<h2>Fluxos possíveis</h2>";

    echo "Browser -> requisição -> controller -> sem dados -> view -> renderização" . "<br>";
    echo "Browser -> requisição -> controller -> preciso de dados -> model -> database -> dados recuperados -> controller -> repassa os dados -> view -> renderização" . "<br>";
    
?>