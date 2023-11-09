<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
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
    <div class="container-fluid">
        <div class="row">
            <?php include "menu_gestores.php"; ?>
            <div class="col-12">
            <div class="d-flex justify-content-center align-items-center">
                    <button class="btn btn-outline-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                        </svg>
                    </button>
                    <h3 style="text-align:center;padding:20px;">Detalles reserva sr/sra: <?php echo $_SESSION["user"]["Nombre"] ?></h3>
                </div>
                <div class="col p-3">
                    <div class="border rounded-5 fs-5 p-5 m-5 shadow">
                        <div class="col mb-2">
                            <span class="fw-bold">Nombre del cliente:</span>
                            <span style="float: right"><?= $nombre ?></span>
                        </div>
                        <div class="col mb-2">
                            <span class="fw-bold">Apellidos del cliente:</span>
                            <span style="float: right"><?= $apellidos ?></span>
                        </div>
                        <div class="col mb-2">
                            <span class="fw-bold">Telefono del cliente:</span>
                            <span style="float: right"><?= $telefono ?></span>
                        </div>
                        <div class="col mb-2">
                            <span class="fw-bold">Email del cliente:</span>
                            <span style="float: right"><?= $email ?></span>
                        </div>
                        <div class="col border-top p-3">
                            <a  href="index.php?r=gestores_reserva"><button class="btn btn-danger">atras</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "footer.php" ?>
    <script src="srcs/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="srcs/messages_erros_successful.js"></script>
</body>

</html>