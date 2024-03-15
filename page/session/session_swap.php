<?php
    session_start();
    print_r($_SESSION);

    $_SESSION['email'] = "ze@zmail.com";
?>

<p>
    <b>Nome: </b> <?= $_SESSION['name'] ?><br>
    <b>Nome: </b> <?= $_SESSION['email'] ?><br>
</p>

<p>
    <a href="/session/basics.php">Voltar</a>
</p>

<p>
    <a href="/session/clear_session.php">Limpar Sessão</a>
</p>