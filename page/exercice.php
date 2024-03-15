<?php
    session_start();
    
    if($_COOKIE['user']){
        $_SESSION['user'] = $_COOKIE['user'];
    }

    if (!$_SESSION['user'])
    {
        header('Location: ./login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets\css\style.css">
    <link rel="stylesheet" href="assets\css\exercice.css">
    <title>Exercício</title>
</head>
<body>
    <header class="header">
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercício</h2>
    </header>
    <nav class="navigation">
        <span class="user">Usuário: <?= $_SESSION['user'] ?></span>
        <a href="<?="/{$_GET['dir']}/{$_GET['file']}.php" ?>" class="green">Sem Formatacao</a>
        <a href="index.php" class="red">Voltar</a>
        <a href="logout.php">Sair</a>
    </nav>
    <main class="main">
        <div class="content">
            <?php
                // include("test/test.php");
                // include($_GET['dir'] . "/" . $_GET['file'] . ".php");
                include("{$_GET['dir']}/{$_GET['file']}.php");
            ?>
        </div>
    </main>
    <footer class="footer">
        COD3R & ALUNOS @ <?= date('D M Y'); ?>
    </footer>
</body>
</html>