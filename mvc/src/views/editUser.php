<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="srcs/style.css">
    <link rel="icon" href="imgs/logo/logo-removebg-preview.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
</head>

<body>
    <?php include "nav.php"; ?>
    <div class="row row-table">
        <?php include "menu_gestores.php"; ?>
        <div class="col-10 p-3" style="height: 100vh;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="mx-auto col-10 col-md-8 col-lg-6">
                        <form class="form-control form_session" action="index.php?r=edituser&id=<?=$id?>" method="post">
                            <div class="my-3">
                                <h3>Editar Usuario</h3>
                            </div>
                            <div class="mb-2">
                                <label class="col-form-label-lg" for="nombre">Nombre</label>
                                <input class="form-control" type="text" name="nombre" id="nombre" value="<?=$nombre?>" required>
                            </div>
                            <div class="mb-2">
                                <label class="col-form-label-lg" for="apellido">Apellido</label>
                                <input class="form-control" type="text" name="apellido" id="apellido" value="<?=$apellidos?>" required>
                            </div>
                            <div class="mb-2">
                                <label class="col-form-label-lg" for="email">Correo Electronico</label>
                                <input class="form-control" type="text" name="email" id="email" value="<?=$email?>" required>
                            </div>
                            <div class="mb-2">
                                <label class="col-form-label-lg" for="contrasena">Contraseña</label>
                                <input class="form-control" type="contrasena" name="contrasena" id="contrasena" value="<?=$contrasena?>" required>
                            </div>
                            <div class="mb-4">
                                <label class="col-form-label-lg" for="rol">Rol actual: <?=$rol?></label>
                                <select class="form-select" name="rol">
                                    <option value="user">user</option>
                                    <option value="gestor">gestor</option>
                                    <option value="admin">admin</option>
                                </select>
                            </div>
                            <div class="mb-2">
                                <button class="btn btn-primary btn-lg" type="submit" value="doedituser">Editar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "footer.php"; ?>
    <script src="srcs/index.js"></script>
</body>

</html>