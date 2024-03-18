<div class="title">Download</div>

<?php 
    session_start();

    $files = $_SESSION['files'] ?? [];

    $directory = __DIR__ . '/../files/';
    $file_name = $_FILES['file']['name'];
    $file = $directory . $file_name;
    $tmp = $_FILES['file']['tmp_name'];
    if (move_uploaded_file($tmp, $file)) {
        echo "<br>Arquivo válido e enviado com sucesso.";
        $files[] = $file_name;
        $_SESSION['files'] = $files;
    } else {
        echo "<br>Erro no upload de arquivo!";
    }
?>

<form action="#" method="post"
    enctype="multipart/form-data">
    <input name="file" type="file">
    <button>Enviar</button>
</form>

<ul>
    <?php foreach($files as $file): ?>
        <li>
            <a href="../files/<?= $file ?>">
                <?= $file ?>
            </a>
        </li>
    <?php endforeach ?>
</ul>

<style>
    button, input {
        font-size: 1.2rem;
    }
</style>