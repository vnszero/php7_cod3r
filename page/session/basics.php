<div class="title">Fundamentos</div>

<?php
    session_start();

    print_r($_SESSION);
    echo "<br>";

    if (!$_SESSION['name'])
    {
        $_SESSION['name'] = "Gabriel";
    }
    if (!$_SESSION['email'])
    {
        $_SESSION['email'] = "gabs@zmail.com";
    }

?>

<p>
    <a href="/session/session_swap.php">Alteral sessão</a>
</p>