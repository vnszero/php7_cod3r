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
                    <h3>4. Módulo Controle</h3>
                    <ul>
                        <li><a href="exercice.php?dir=control&file=if_else">if_else</a></li>
                    </ul>
                </div>
                <div class="module green">
                    <h3>3. Módulo Variáveis</h3>
                    <ul>
                        <li><a href="exercice.php?dir=variables&file=var1">Variáveis #1</a></li>
                        <li><a href="exercice.php?dir=variables&file=equation_challenge">Fibonacci O(1)</a></li>
                        <li><a href="exercice.php?dir=variables&file=assign">Atribuições</a></li>
                        <li><a href="exercice.php?dir=variables&file=formatting">Interpolação ou Formatting String</a></li>
                        <li><a href="exercice.php?dir=variables&file=dinamic_variables">Variaveis Variaveis</a></li>
                        <li><a href="exercice.php?dir=variables&file=challenge_var">Desafio Variaveis Variaveis</a></li>
                        <li><a href="exercice.php?dir=variables&file=pointer">Variavel por referencia</a></li>
                        <li><a href="exercice.php?dir=variables&file=define">Constantes</a></li>
                    </ul>
                </div>
                <div class="module green">
                    <h3>2. Módulo Tipos</h3>
                    <ul>
                        <li><a href="exercice.php?dir=types&file=int">Inteiros</a></li>    
                        <li><a href="exercice.php?dir=types&file=float">Decimais</a></li>    
                        <li><a href="exercice.php?dir=types&file=arithmetic">Operações Aritméticas</a></li>    
                        <li><a href="exercice.php?dir=types&file=challenge">Desafio Precedencia</a></li>    
                        <li><a href="exercice.php?dir=types&file=string">Strings</a></li>    
                        <li><a href="exercice.php?dir=types&file=string_challenge">String challenge</a></li>    
                        <li><a href="exercice.php?dir=types&file=bool">Booleanos</a></li>    
                        <li><a href="exercice.php?dir=types&file=convertion">Conversões</a></li>    
                    </ul>
                </div>
                <div class="module green">
                    <h3>1. Módulo Básico</h3>
                    <ul>
                        <li><a href="exercice.php?dir=basic&file=hello">Hello PHP</a></li>
                        <li><a href="exercice.php?dir=basic&file=html">Integration HTML</a></li>
                        <li><a href="exercice.php?dir=basic&file=css">Integration CSS</a></li>
                        <li><a href="exercice.php?dir=basic&file=notes">Notes PHP</a></li>
                        <li><a href="exercice.php?dir=basic&file=challenge">Desafio</a></li>
                    </ul>
                </div>
                <div class="module green">
                    <h3>0. Módulo Algorítmos</h3>
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