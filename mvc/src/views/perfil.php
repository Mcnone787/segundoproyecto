<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perfil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="srcs/style.css">
    <link rel="icon" href="imgs/logo/favicon/logo-removebg-preview.png" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
</head>

<body>
    <?php include "nav.php" ?>
    <div class="container rounded mt-5 mb-5" style="height: 100vh">
        <div class="row py-5 justify-content-center">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column border text-center rounded-5 justify-content-center">
                    <img src="imgs/logo/logo.png" alt="logo" class="rounded" width="auto">
                    <span class="font-weight-bold mt-5"><?php echo $nombre ?></span>
                    <span class=""><?php echo $email ?></span>
                    <span class="mb-5">Telefono: <?php echo $telefono ?></span>
                </div>
            </div>
            <div class="col-md-5 border-right">
                <form action="?r=doUpDateUserData" method="post">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Editar Perfil</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <label class="labels">Nombre</label>
                                <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Nombre" value="<?= $nombre ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label class="labels">Apellidos</label>
                                <input class="form-control" type="text" name="apellido" id="apellido" placeholder="Apellidos" value="<?= $apellidos ?>" required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12 mb-2">
                                <label class="labels">Telefóno</label>
                                <input class="form-control" type="text" name="telefono" id="telefono" placeholder="telefono" value="<?= $telefono ?>" required>
                            </div>
                            <div class="col-md-12 mb-2">
                                <label class="labels">Contraseña</label>
                                <input class="form-control" type="password" name="contrasena" id="contrasena" placeholder="contraseña" required>
                            </div>
                            <div class="col-md-12 mb-2">
                                <label class="labels">Email</label>
                                <input class="form-control" type="text" name="email" id="email" placeholder="email" value="<?= $email ?>" required>
                            </div>
                            <div class="col-md-12 mb-2">
                                <label class="labels">Tarjeta de Credito</label>
                                <input class="form-control" type="text" name="debitcard" id="debitcard" placeholder="0000/0000/0000/0000" value="<?= $debitcard ?>" required>
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <button class="btn btn-primary profile-button" type="submit">Guardar Perfil</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include "footer.php" ?>
    <script src="srcs/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>