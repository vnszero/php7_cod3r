<div class="title">upload</div>

<?php
    print_r($_FILES);
    echo "<br>preciso resolver problemas de permissão do XAMPP<br>";
    if($_FILES && $_FILES['file'])
    {
        $directory = '/home/vini/Documentos/GitHub/php7_cod3r/page/files';
        $file_name = $_FILES['file']['name'];
        $file = $directory . $file_name;
        $tmp = $_FILES['file']['tmp_name'];

        if(move_uploaded_file($tmp, $file))
        {
            echo "<br>Arquivo carregado com sucesso.";
        }
        else
        {
            echo "<br>Falha ao fazer upload do arquivo.";
        }
    }
?>

<form action="#" method="post" enctype="multipart/form-data">
    <input name="file" type="file">
    <button>Enviar</button>
</form>

<style>
    button, input {
        font-size: 1.2rem;
    }
</style>