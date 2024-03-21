<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="title">Formulário</div>

<h2>Cadastro</h2>

<?php
    if(count($_POST) > 0)
    {
        $errors = [];

        // isset($_POST['_name']) // construção equivalente
        if(!filter_input(INPUT_POST, "_name"))
        {
            $errors['_name'] = "Nome é Obrigatório";
        }

        if(filter_input(INPUT_POST, "birth-day"))
        {
            $date = DateTime::createFromFormat('d/m/Y', $_POST['birth-day']);
            if(!$date)
            {
                $errors['birth-day'] = "Data deve estar no padrão dd/mm/aaaa";
            }
        }

        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
        {
            $errors['email'] = "Email inválido";
        }

        if (!filter_var($_POST['_site'], FILTER_VALIDATE_URL))
        {
            $errors['_site'] = "Site inválido";
        }

        $childrenConfig = ["options" => ["min_range"=>0, "max_range"=>20]];
        if (!filter_var($_POST['children'], FILTER_VALIDATE_INT, $childrenConfig) && $_POST['children'] != 0)
        {
            $errors['children'] = "Quantidade de filhos inválida";
        }

        $wageConfig = ["options" => ["decimal" => ',']];
        if (!filter_var($_POST['wage'], FILTER_VALIDATE_FLOAT, $wageConfig))
        {
            $errors['wage'] = 'salário inválido';
        }
    }
?>

<?php foreach ($errors as $error): ?>
    <div class="alert alert-danger" role="alert">
        <?= $error ?>
    </div>
<?php endforeach ?>

<form action="#" method="post">
    <div class="form-row">
        <div class="form-group col-md-8">
            <label for="_name">Nome</label>
            <input type="text" class="form-control <?= $errors['_name'] ? 'is-invalid' : '' ?>" id="_name" name="_name" placeholder="Nome" value="<?= $_POST['_name'] ?>">
            <div class="invalid-feedback">
                <?= $errors['_name'] ?>
            </div>
        </div>
        <div class="form-group col-md-4">
            <label for="birth-day">Nascimento</label>
            <input type="text" class="form-control <?= $errors['birth-day'] ? 'is-invalid' : '' ?>" id="birth-day" name="birth-day" placeholder="Nascimento" value="<?= $_POST['birth-day'] ?>">
            <div class="invalid-feedback">
                <?= $errors['birth-day'] ?>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="text" class="form-control <?= $errors['email'] ? 'is-invalid' : '' ?>" id="email" name="email" placeholder="Email" value="<?= $_POST['email'] ?>">
            <div class="invalid-feedback">
                <?= $errors['email'] ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="_site">Site</label>
            <input type="text" class="form-control <?= $errors['_site'] ? 'is-invalid' : '' ?>" id="_site" name="_site" placeholder="Site" value="<?= $_POST['_site'] ?>">
            <div class="invalid-feedback">
                <?= $errors['_site'] ?>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="children">Qtde de filhos</label>
            <input type="number" class="form-control <?= $errors['children'] ? 'is-invalid' : '' ?>" id="children" name="children" placeholder="Qtde de filhos" value="<?= $_POST['children'] ?>">
            <div class="invalid-feedback">
                <?= $errors['children'] ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="wage">Salário</label>
            <input type="text" class="form-control <?= $errors['wage'] ? 'is-invalid' : '' ?>" id="wage" name="wage" placeholder="Salário" value="<?= $_POST['wage'] ?>">
            <div class="invalid-feedback">
                <?= $errors['wage'] ?>
            </div>
        </div>
    </div>
    <button class="btn btn-primary btn-lg">Enviar</button>
</form>