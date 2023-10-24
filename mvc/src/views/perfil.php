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
    <div class="container rounded mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column text-center justify-content-center">
                        <img src="imgs/logo/logo.png" alt="logo" class="img-thumbnail " width="auto" style="height: auto;">
                        <span class="font-weight-bold"><?php echo $nombre ?></span>
                        <span class="text-black-50"><?php echo $email ?></span>
                        <span class="text-black-50">Telefono: <?php echo $telefono ?></span>
                </div>
            </div>
            <div class="col-md-5 border-right">
                <form  action="?r=doUpDateUserData" method="post">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Editar Perfil</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <label class="labels">Nombre</label>
                                <input class="form-control" type="text" name="nombre" id="nombre" placeholder="Nombre">
                            </div>
                            <div class="col-md-6">
                                <label class="labels">Apellidos</label>
                                <input class="form-control" type="text" name="apellido" id="apellido" placeholder="Apellidos">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12 mb-2">
                                <label class="labels">Telefóno</label>
                                <input class="form-control" type="text" name="telefono" id="telefono" placeholder="telefono">
                            </div>
                            <div class="col-md-12 mb-2">
                                <label class="labels">Contraseña</label>
                                <input class="form-control" type="text" name="contrasena" id="contrasena" placeholder="contraseña">
                            </div>
                            <div class="col-md-12 mb-2">
                                <label class="labels">Email</label>
                                <input class="form-control" type="text" name="email" id="email" placeholder="email">
                            </div>
                            <div class="col-md-12 mb-2">
                                <label class="labels">Tarjeta de Credito</label>
                                <input class="form-control" type="text" name="debitcard" id="debitcard" placeholder="0000/0000/0000/0000">
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
</body>

</html>