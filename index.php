<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	  <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Sistema de Login com PHP e MySQL</title>
</head>
<body>
   
    <div class="login">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h3>Acesso Restrito</h3>
                        </div>

                        <div class="login">
    <form action="login.php" method="POST">
        <div class="mb-3">
            <label for="usuario">Usuário</label>
            <input type="text" id="usuario" name="usuario" class="form-control">
        </div>
        <div class="mb-3">
            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" class="form-control">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
</div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
