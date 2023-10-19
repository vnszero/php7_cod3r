<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets\css\style.css">
    <title>Curso PHP</title>
</head>
<body>
    <header class="header">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    
    <main class="main">
        <div class="content">
            <nav class="modules">
                <div class="module green">
                    <h3>Módulo 01</h3>
                    <ul>
                        <li><a href="exercice.php?dir=test&file=test">Exercício A</a></li>
                        <li><a href="#">Exercício B</a></li>
                        <li><a href="#">Exercício C</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="footer">
        COD3R & ALUNOS @ <?= date('D M Y'); ?>
    </footer>
</body>
</html>