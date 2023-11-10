<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="srcs/style.css">
    <link rel="icon" href="imgs/logo/logo-removebg-preview.png" type="image/x-icon">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">


</head>

<body>
    <?php include "nav.php"; ?>
    <?php include "ERROR_MANAGMENT.php"; ?>
    <div class="container" style="margin-bottom:200px;">
        <?php include "menu_gestores.php"; ?>
        <div class="row">
            <div class="d-flex justify-content-center align-items-center">
                <button class="btn btn-outline-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                    </svg>
                </button>
                <h3 style="text-align:center;padding:20px;">Lista de Reservas sr/sra: <?php echo $_SESSION["user"]["Nombre"] ?></h3>
            </div>
            <div class="col-12">
                <form class="form-control form_session p-5" action="index.php?r=doanadiraparta&id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-6">
                                <label for="Nombre"> Titulo </label><input class="form-control" type="text" placeholder="Default input" name="Titulo">
                            </div>
                            <div class="col-6">
                                <label for="Nombre"> CP </label>
                                <input class="form-control" type="text" placeholder="Default input" name="CP">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-6">
                                <label for="Laltidud"> Laltidud </label><input class="form-control" type="text" placeholder="Default input" name="Laltitud">
                            </div>
                            <div class="col-6">
                                <label for="Longitud"> Longitud </label>
                                <input class="form-control" type="text" placeholder="Default input" name="Longitud">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Descripcion del apartamento</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descripcion"><?php echo  $informationapartamento["Descripcion"]; ?></textarea>
                            </div>
                        </div>
                        <div class="col-3"></div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label for="Laltidud"> m2 </label><input class="form-control" type="text" placeholder="Default input" name="m2">
                        </div>
                        <div class="col-6">
                            <label style="visibility:hidden;">d</label>
                            <div id="accordion">
                                <h3>Añadir servicio al apartamento</h3>
                                <div>
                                    <?php
                                    foreach ($totalservicios as $i => $task) {
                                        if ($task != 1) { ?>
                                            <input type="checkbox" name="add<?php echo $task["idservicios"]; ?>" id=""><label for="d"> <?php echo $task["servicio"]; ?> </label><br>
                                    <?php }
                                    } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label for="Laltidud"> precioALT </label><input class="form-control" name="precioalt" type="text" placeholder="Default input">
                        </div>
                        <div class="col-6">
                            <label for="Longitud">PrecioBAJ </label>
                            <input class="form-control" type="text" placeholder="Default input" name="preciobaj">
                        </div>
                    </div>
                    <div class="row m-3">
                        <div class="col-6" style="margin:0 auto;">
                            <label for="Laltidud"> Numero habitaciones </label><input class="form-control" name="numhabita" type="text" placeholder="Default input" value="<?php echo  $informationapartamento["num_habita"]; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3" style="margin:0 auto; ">
                                <div>
                                    <h3 style="text-align:center;">Añadir imagenes del apartamento</h3>
                                </div>
                                <button type="button" class="btn btn-success mb-3" id="addimg" style="float:right;">Añadir imagen</button>
                                <div id="imgs">
                                    <input class="form-control" name="fichero_usuario[]" type="file" id="formFileMultiple">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <?php include "footer.php"; ?>
    <script>
        $(function() {
            $("#accordion").accordion({
                collapsible: true
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="srcs/index.js"></script>
    <script src="srcs/addmoreimg.js"></script>
</body>

</html>