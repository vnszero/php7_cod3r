<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="title">Atualizar Registro</div>

<?php
    require_once "connection.php";
    $connection = newConnection();

    if($_GET['code'])
    {
        $sql = "SELECT * FROM register WHERE id = ?";
        $statement = $connection->prepare($sql);
        $statement->bind_param("i", $_GET['code']);

        if ($statement->execute())
        {
            $result = $statement->get_result();
            if ($result->num_rows > 0)
            {
                $information = $result->fetch_assoc();
                print_r($information);
                if ($information['birth_day'])
                {
                    $date = new DateTime($information['birth_day']);
                    $information['birth_day'] = $date->format('d/m/Y');
                }
                if ($information['wage'])
                {
                    $information['wage'] = str_replace(".", ",", $information['wage']);
                }
            }
        }
    }

    if(count($_POST) > 0)
    {
        $information = $_POST;
        $errors = [];

        if(trim($information['_name']) === '')
        {
            $errors['_name'] = "Nome é Obrigatório";
        }

        if(isset($information['birth_day']))
        {
            $date = DateTime::createFromFormat('d/m/Y', $information['birth_day']);
            if(!$date)
            {
                $errors['birth_day'] = "Deve estar no padrão dd/mm/aaaa";
            }
        }

        if (!filter_var($information['email'], FILTER_VALIDATE_EMAIL))
        {
            $errors['email'] = "Email inválido";
        }

        if (!filter_var($information['_site'], FILTER_VALIDATE_URL))
        {
            $errors['_site'] = "Site inválido";
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
            $sql = "UPDATE register
                SET _name = ?, birth_day = ?, email = ?, _site = ?, children = ?, wage = ?
                WHERE id = ?";

            $statement = $connection->prepare($sql);

            $params = [
                $information['_name'],
                $date ? $date->format('Y-m-d') : null,
                $information['email'],
                $information['_site'],
                $information['children'],
                $information['wage'] ? str_replace(",", ".", $information['wage']) : null,
                $information['id']
            ];

            $statement->bind_param("ssssidi", ...$params);

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

<form action="/exercice.php" method="get">
    <input type="hidden" name="dir" value="db">
    <input type="hidden" name="file" value="update">
    <div class="form-group row">
        <div class="col-sm-10">
            <input type="number" name="code" class="form-control" value="<?= $_GET['code'] ?>" placeholder="Informe o código para consultar">
        </div>
        <div class="col-sm-2">
            <button class="btn btn-success mb-4">
                Consultar
            </button>
        </div>
    </div>
</form>

<form action="#" method="post">
    <input type="hidden" name="id" value="<?= $information['id'] ?>">
    <div class="form-row">
        <div class="form-group col-md-8">
            <label for="_name">Nome</label>
            <input type="text" class="form-control <?= $errors['_name'] ? 'is-invalid' : '' ?>" id="_name" name="_name" placeholder="Nome" value="<?= $information['_name'] ?>">
            <div class="invalid-feedback">
                <?= $errors['_name'] ?>
            </div>
        </div>
        <div class="form-group col-md-4">
            <label for="birth_day">Nascimento</label>
            <input type="text" class="form-control <?= $errors['birth_day'] ? 'is-invalid' : '' ?>" id="birth_day" name="birth_day" placeholder="Nascimento" value="<?= $information['birth_day'] ?>">
            <div class="invalid-feedback">
                <?= $errors['birth_day'] ?>
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
            <label for="_site">Site</label>
            <input type="text" class="form-control <?= $errors['_site'] ? 'is-invalid' : '' ?>" id="_site" name="_site" placeholder="Site" value="<?= $information['_site'] ?>">
            <div class="invalid-feedback">
                <?= $errors['_site'] ?>
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