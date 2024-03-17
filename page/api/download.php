<div class="title">Download</div>

<?php
    session_start();

    echo "preciso resolver problemas de permissão do XAMPP<br><br>";
    
    $files = $_SESSION['files'] ?? [];
    
    $uploadDirectory = __DIR__ . '/../files/';
    $fileName = $_FILES['file']['name'];
    $tmp = $_FILES['file']['tmp_name'];
    if (move_uploaded_file($tmp, $file))
    {
        echo "<br>Arquivo válido e enviado com sucesso.";
        $files[] = $fileName;
        $_SESSION['files'] = $files;
    }
    else
    {
        echo "<br>Erro no upload de arquivo";
    }

?>

<form action="#" method"post" enctype="multipart/form-data">
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