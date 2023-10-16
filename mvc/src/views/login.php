
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link type='text/css' rel='stylesheet' href='css/style.css'>
    <title>Login | Apartamentos Figueres</title>
</head>

<body>
    <div class="container">
        <div class="row align-items-center" style="height: 100vh">
            <div class="mx-auto col-10 col-md-8 col-lg-6">
                <div class="mb-3">
                    <h3>Iniciar Sessión</h3>
                </div>
                <form class="form-control" action="login.php" method="post">
                    <div class="mb-3">
                        <label class="col-form-label-lg" for="user">Correo Electronico</label>
                        <input class="form-control form-control-lg" type="text" name="mail" id="mail" placeholder="Correo Electronico" required>
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label-lg" for="password">Contraseña</label>
                        <input class="form-control form-control-lg" type="password" name="password" id="password" placeholder="Contraseña" required>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary btn-lg" type="submit" value="login">Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>