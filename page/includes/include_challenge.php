<div class="title">Desafio Include</div>

<?php
    include_once('user.php');
    $user = new User('Helio', 50, 'Hlegal');
    echo $user->show() . "<br>";
?>