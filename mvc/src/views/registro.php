<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="srcs/style.css">
    <title>Registro | Apartamentos Figueres</title>
    <link rel="icon" href="imgs/logo/favicon/logo-removebg-preview.png" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
</head>

<body>
    <?php include "nav.php"; ?>
    <div class="container">
        <div class="row align-items-center m-5">
            <div class="mx-auto col-10 col-md-8 col-lg-6">
                <form class="form-control form_session" action="index.php?r=doregistro" method="post">
                    <div class="my-3">
                        <h3>Registro</h3>
                    </div>
                    <div class="mb-2">
                        <label class="col-form-label-lg" for="nombre">Nombre</label>
                        <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Nombre" required>
                    </div>
                    <div class="mb-2">
                        <label class="col-form-label-lg" for="apellido">Apellido</label>
                        <input class="form-control" type="text" name="apellido" id="apellido" placeholder="Apellido" required>
                    </div>
                    <div class="mb-2">
                        <label class="col-form-label-lg" for="debit-card">Tarjeta de Debito</label>
                        <input class="form-control" type="text" name="debit-card" id="dbCard" placeholder="0000/0000/0000/0000" required>
                    </div>
                    <div class="mb-2">
                        <label class="col-form-label-lg" for="telefono">Telefono</label>
                        <input class="form-control" type="text" name="telefono" id="telefono" placeholder="+34" required>
                    </div>
                    <div class="mb-2">
                        <label class="col-form-label-lg" for="email">Correo Electronico</label>
                        <input class="form-control" type="text" name="email" id="email" placeholder="Correo Electronico" required>
                    </div>
                    <div class="mb-4">
                        <label class="col-form-label-lg" for="password">Contraseña</label>
                        <input class="form-control" type="password" name="password" id="password" placeholder="Contraseña" required>
                    </div>
                    <div class="mb-2">
                        <button class="btn btn-primary btn-lg" type="submit" value="DoRegistrar">Registrar</button>
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