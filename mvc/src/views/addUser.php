<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crear Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="srcs/style.css">
    <link rel="icon" href="imgs/logo/logo-removebg-preview.png" type="image/x-icon">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
</head>

<body>
    <?php include "nav.php"; ?>
    <?php include "ERROR_MANAGMENT.php"; ?>
    <div class="row">
        <?php include "menu_gestores.php"; ?>
        <div class="col-12 p-3">
            <div class="d-flex justify-content-center align-items-center">
                <button class="btn btn-outline-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                    </svg>
                </button>
                <h3 style="text-align:center;padding:20px;">sr/sra: <?php echo $_SESSION["user"]["Nombre"] ?></h3>
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="mx-auto col-10 col-md-8 col-lg-6">
                        <form class="form-control form_session" action="index.php?r=doadduser" method="post">
                            <div class="my-3">
                                <h3>Crear Usuario</h3>
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
                                <label class="col-form-label-lg" for="email">Correo Electronico</label>
                                <input class="form-control" type="text" name="email" id="email" placeholder="Correo Electronico" required>
                            </div>
                            <div class="mb-2">
                                <label class="col-form-label-lg" for="password">Contraseña</label>
                                <input class="form-control" type="password" name="password" id="password" placeholder="Contraseña" required>
                            </div>
                            <div class="mb-4">
                                <label class="col-form-label-lg" for="rol">Rol</label>
                                <select class="form-select" name="rol">
                                    <option value="user">user</option>
                                    <option value="gestor">gestor</option>
                                    <option value="admin">admin</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <button class="btn btn-primary btn-lg" type="submit" value="doadduser">Crear</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "footer.php"; ?>
    <script src="srcs/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>