<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <title>Lista de Clientes CRUD</title>
</head>
<body style="margin: 1em;">
    <h1>Lista de Clientes</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome do cliente</label>
            <input type="text" class="form-control" id="nome" required>
        </div>
        <div class="mb-3">
            <label for="cpf" class="form-label">CPF</label>
            <input 
                type="text" class="form-control" id="cpf" 
                required
                pattern="\d{3}\.\d{3}\.\d{3}-\d{2}"
                title="Digite o CPF no formato 'nnn.nnn.nnn-nn'"
            >
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" required>
        </div>
        <div class="mb-3">
            <label for="datanascimento" class="form-label">Data de nascimento</label>
            <input type="date" class="form-control" id="datanascimento" required>
        </div>
        <button type="submit" class="btn btn-primary" id="send_btn">Salvar</button>
    </form>
    <h2 class="mt-4 mb-2">Cadastrados</h2>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">CPF</th>
            <th scope="col">Email</th>
            <th scope="col">Data de Nascimento</th>
            </tr>
        </thead>
        <?php
        /*
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
            </tr>
        </tbody>
        */
        ?>
    </table>
    <?php /*Import validation script*/ ?>
    <script src="validation.js"></script>
</body>
</html>