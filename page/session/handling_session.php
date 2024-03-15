<div class="title">Gerindo Sessão</div>
<?php
    // session_id('sbf13834aao1m7j4odcv9uup53');
    session_start();
    echo session_id();
    echo "<br>";
    $counter = &$_SESSION['counter'];
    $counter = $counter ? $counter + 1 : 1;
    echo $counter . "<br>";

    if ($_SESSION['counter'] % 5 === 0)
    {
        // regerar sessão para evitar de alguém roubar a sessão
        session_regenerate_id();
    }

    if($_SESSION['counter'] >= 15)
    {
        session_destroy();
    }
?>