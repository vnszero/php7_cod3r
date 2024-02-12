<div class="title">$_POST</div>
<form action="#" method="post">
    <input type="text" name="name" id="name">
    <input type="text" name="last_name" id="last_name">
    <select name="state" id="state">
        <option value="MG">Minas Gerais</option>
        <option value="SP">São Paulo</option>
        <option value="RJ">Rio de Janeiro</option>
    </select>
    <button>Enviar</button>
</form>
<style>
    form > * {
        font-size: 1.8rem;
    }
</style>
<?php
    print_r($_GET);
    echo "<br>";
    print_r($_POST);
?>