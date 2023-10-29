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
                    <h3>Módulo Básico</h3>
                    <ul>
                        <li><a href="exercice.php?dir=basic&file=hello">Hello PHP</a></li>
                        <li><a href="exercice.php?dir=basic&file=html">Integration HTML</a></li>
                        <li><a href="exercice.php?dir=basic&file=css">Integration CSS</a></li>
                        <li><a href="exercice.php?dir=basic&file=notes">Notes PHP</a></li>
                        <li><a href="exercice.php?dir=basic&file=challenge">Desafio</a></li>
                    </ul>
                </div>
                <div class="module green">
                    <h3>Módulo Tipos</h3>
                    <ul>
                        <li><a href="exercice.php?dir=types&file=int">Inteiros</a></li>    
                        <li><a href="exercice.php?dir=types&file=float">Decimais</a></li>    
                        <li><a href="exercice.php?dir=types&file=arithmetic">Operações Aritméticas</a></li>    
                        <li><a href="exercice.php?dir=types&file=challenge">Desafio Precedencia</a></li>    
                        <li><a href="exercice.php?dir=types&file=string">Strings</a></li>    
                        <li><a href="exercice.php?dir=types&file=string_challenge">String challenge</a></li>    
                    </ul>
                </div>
                <div class="module green">
                    <h3>Módulo Algorítmos</h3>
                    <ul>
                        <li><a href="exercice.php?dir=algorithms&file=bubble">Bubble Sort</a></li>
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