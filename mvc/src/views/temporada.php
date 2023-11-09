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

</head>

<body>
    <?php include "nav.php"; ?>
    <?php include "ERROR_MANAGMENT.php"; ?>
    <div class="container">
        <div class="row">
            <?php include "menu_gestores.php"; ?>
            <div class="col-12" style="margin-bottom: 200px">
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
                        <div class="mx-auto col-12 col-md-8 col-lg-6">
                            <form class="form-control shadow p-4" action="index.php?r=addtemporada" method="post">
                                <div class="mb-3 p-2">
                                    <div class="col">
                                        <label for="Nombre"> Nombre de la temporada </label>
                                        <input class="form-control" type="text" placeholder="Nombre de temporada" name="temporadaNombre">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-6">
                                            <label for="Nombre"> Fecha de final de temporada </label>
                                            <input class="form-control" type="date" placeholder="Default input" name="fechaini">
                                        </div>
                                        <div class="col-6">
                                            <label for="Nombre"> Fecha de inicio de temporada </label>
                                            <input class="form-control" type="date" placeholder="Default input" name="fechafin">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 p-2">
                                    <button type="submit" class="btn btn-primary">Añadir temporada :3</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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
    <script src="srcs/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>