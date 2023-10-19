<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets\css\style.css">
    <link rel="stylesheet" href="assets\css\exercice.css">
    <title>Exercício</title>
</head>
<body class="exercice">
    <header class="header">
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercício</h2>
    </header>
    <nav class="navigation">
        <a href="<?="/{$_GET['dir']}/{$_GET['file']}.php" ?>" class="green">Sem Formatacao</a>
        <a href="index.php" class="red">Voltar</a>
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