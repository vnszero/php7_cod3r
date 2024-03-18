<div class="title">upload</div>

<?php
    print_r($_FILES);
    if($_FILES && $_FILES['file'])
    {
        $directory = './files/';
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