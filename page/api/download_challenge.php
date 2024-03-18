<div class="titulo">Imagens</div>

<?php 
    session_start();

    $files = $_SESSION['files'] ?? [];

    $directory = __DIR__ . '/../files/';
    $file_name = $_FILES['file']['name'];
    $file = $directory . $file_name;
    $tmp = $_FILES['file']['tmp_name'];
    if (move_uploaded_file($tmp, $file)) {
        echo "<br>arquivo válido e enviado com sucesso.";
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
        <?php if(stripos($file, '.png') > 0): ?>
            <li>
                <img src="../files/<?= $file ?>"
                    height="120" />
            </li>
        <?php endif ?>
    <?php endforeach ?>
</ul>

<style>
    button, input {
        font-size: 1.2rem;
    }
</style>