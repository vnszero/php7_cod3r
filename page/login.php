<?php
    session_start();
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($_POST['email'])
    {
        $users_db = [
            [
                'name' => 'admin',
                'email' => 'admin',
                'password' => 'admin'
            ],
            [
                'name' => 'Aluno Cod3r',
                'email' => 'aluno@cod3r.com.br',
                'password' => '1234567'
            ],
            [
                'name' => 'Outro',
                'email' => 'outro@zmail.com.br',
                'password' => '7654321'
            ]
        ];

        foreach ($users_db as $user)
        {
            $validEmail = $email === $user['email'];
            $validPassword = $password === $user['password'];

            if ($validEmail && $validPassword) 
            {
                $_SESSION['errors'] = null;
                $_SESSION['user'] = $user['name'];
                $exp = time() + 60 * 60 * 24 * 30;
                setcookie('user', $user['name'], $exp);
                header('Location: index.php');
            }
        }

        if (!$_SESSION['user'])
        {
            $_SESSION['errors'] = ['Usuário/Senha inválidos!'];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets\css\style.css">
    <link rel="stylesheet" href="assets\css\login.css">
    <title>Curso PHP</title>
</head>
<body class="login">
    <header class="header">
        <h1>Curso PHP</h1>
        <h2>Seja Bem-vindo</h2>
    </header>
    <main class="main">
        <div class="content">
            <h3>Identifique-se</h3>
            <?php if ($_SESSION['errors']): ?>
                <div class="errors">
                    <?php foreach($_SESSION['errors'] as $error): ?>
                        <p><?= $error ?></p>    
                    <?php endforeach ?>
                </div>
            <?php endif ?>
            <form action="#" method="post">
                <div>
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email">
                </div>
                <div>
                    <label for="password">Senha</label>
                    <input type="password" name="password" id="password">
                </div>
                <button>Entrar</button>
            </form>
        </div>
    </main>
    <footer class="footer">
        COD3R & ALUNOS @ <?= date('D M Y'); ?>
    </footer>
</body>
</html>