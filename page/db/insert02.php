<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="title">Inserir #02</div>

<?php
    if(count($_POST) > 0)
    {
        $information = $_POST;
        $errors = [];

        if(trim($information['name']) === '')
        {
            $errors['name'] = "Nome é Obrigatório";
        }

        if(!isset($information['birth_day']))
        {
            $date = DateTime::createFromFormat('d/m/Y', $information['birth-day']);
            if(!$date)
            {
                $errors['birth-day'] = "Deve estar no padrão dd/mm/aaaa";
            }
        }

        if (!filter_var($information['email'], FILTER_VALIDATE_EMAIL))
        {
            $errors['email'] = "Email inválido";
        }

        if (!filter_var($information['site'], FILTER_VALIDATE_URL))
        {
            $errors['site'] = "Site inválido";
        }

        $childrenConfig = ["options" => ["min_range"=>0, "max_range"=>20]];
        if (!filter_var($information['children'], FILTER_VALIDATE_INT, $childrenConfig) && $information['children'] != 0 || trim($information['children']) === '')
        {
            $errors['children'] = "Quantidade de filhos inválida";
        }

        $wageConfig = ["options" => ["decimal" => ',']];
        if (!filter_var($information['wage'], FILTER_VALIDATE_FLOAT, $wageConfig))
        {
            $errors['wage'] = 'salário inválido';
        }

        if (!count($errors))
        {
            require_once "connection.php";

            $sql = "INSERT INTO register
                (_name, birth_day, email, _site, children, wage)
                VALUES (?, ?, ?, ?, ?, ?)";

            $connection = newConnection();
            $statement = $connection->prepare($sql);

            $params = [
                $information['name'],
                $date ? $date->format('Y-m-d') : null,
                $information['email'],
                $information['site'],
                $information['children'],
                $information['wage']
            ];

            $statement->bind_param("ssssid", ...$params);

            if ($statement->execute())
            {
                unset($information);
            }

            $connection->close();
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
            <label for="name">Nome</label>
            <input type="text" class="form-control <?= $errors['name'] ? 'is-invalid' : '' ?>" id="name" name="name" placeholder="Nome" value="<?= $information['name'] ?>">
            <div class="invalid-feedback">
                <?= $errors['name'] ?>
            </div>
        </div>
        <div class="form-group col-md-4">
            <label for="birth-day">Nascimento</label>
            <input type="text" class="form-control <?= $errors['birth-day'] ? 'is-invalid' : '' ?>" id="birth-day" name="birth-day" placeholder="Nascimento" value="<?= $information['birth-day'] ?>">
            <div class="invalid-feedback">
                <?= $errors['birth-day'] ?>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="text" class="form-control <?= $errors['email'] ? 'is-invalid' : '' ?>" id="email" name="email" placeholder="Email" value="<?= $information['email'] ?>">
            <div class="invalid-feedback">
                <?= $errors['email'] ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input type="text" class="form-control <?= $errors['site'] ? 'is-invalid' : '' ?>" id="site" name="site" placeholder="Site" value="<?= $information['site'] ?>">
            <div class="invalid-feedback">
                <?= $errors['site'] ?>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="children">Qtde de filhos</label>
            <input type="number" class="form-control <?= $errors['children'] ? 'is-invalid' : '' ?>" id="children" name="children" placeholder="Qtde de filhos" value="<?= $information['children'] ?>">
            <div class="invalid-feedback">
                <?= $errors['children'] ?>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="wage">Salário</label>
            <input type="text" class="form-control <?= $errors['wage'] ? 'is-invalid' : '' ?>" id="wage" name="wage" placeholder="Salário" value="<?= $information['wage'] ?>">
            <div class="invalid-feedback">
                <?= $errors['wage'] ?>
            </div>
        </div>
    </div>
    <button class="btn btn-primary btn-lg">Enviar</button>
</form>