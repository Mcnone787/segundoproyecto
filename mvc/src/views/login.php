<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link type='text/css' rel='stylesheet' href='srcs/style.css'>
    <title>Login | Apartamentos Figueres</title>
    <link rel="icon" href="imgs/logo/logo-removebg-preview.png" type="image/x-icon">
</head>

<body>
    <?php include "nav.php"; ?>
    <?php include "ERROR_MANAGMENT.php"; ?>
    <div class="container">
        <div class="row align-items-center" style="height: 100vh">
            <div class="mx-auto col-10 col-md-8 col-lg-6">
                <form class="form-control form_session" action="index.php?r=dologin" method="post">
                    <div class="my-4">
                        <h3>Iniciar Sessión</h3>
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label-lg" for="user">Correo Electronico</label>
                        <input class="form-control form-control-lg" type="text" name="user" id="mail" placeholder="Correo Electronico" required>
                    </div>
                    <div class="mb-3">
                        <label class="col-form-label-lg" for="password">Contraseña</label>
                        <input class="form-control form-control-lg" type="password" name="pass" id="password" placeholder="Contraseña" required>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary btn-lg " type="submit" value="login">Entrar</button>
                    </div>
                    <div class="mb-3">
                    <a class="" href="?r=registro">No tienes una cuenta Registrate Aqui</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include "footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="srcs/index.js"></script>
</body>

</html>