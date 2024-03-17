<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="title">Formulário</div>

<h2>Cadastro</h2>
<form action="#" method="post">
    <div class="form-row">
        <div class="form-group col-md-9">
            <label for="name">Nome</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nome" value="<?= $_POST['name'] ?>">
        </div>
        <div class="form-group col-md-3">
            <label for="birth-day">Nascimento</label>
            <input type="text" class="form-control" id="birth-day" name="birth-day" placeholder="Nascimento" value="<?= $_POST['birth-day'] ?>">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= $_POST['email'] ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input type="text" class="form-control" id="site" name="site" placeholder="Site" value="<?= $_POST['site'] ?>">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="children">Qtde de filhos</label>
            <input type="text" class="form-control" id="children" name="children" placeholder="Qtde de filhos" value="<?= $_POST['children'] ?>">
        </div>
        <div class="form-group col-md-6">
            <label for="wage">Salário</label>
            <input type="text" class="form-control" id="wage" name="wage" placeholder="Salário" value="<?= $_POST['wage'] ?>">
        </div>
    </div>
    <button class="btn btn-primary btn-lg">Enviar</button>
</form>