<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reservas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="srcs/style.css">
    <link rel="icon" href="imgs/logo/favicon/logo-removebg-preview.png" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
</head>

<body>
    <?php include "nav.php" ?>
    <div class="container" style="height: 100vh">
        <div class="col mb-5">
            <h1>Tus Reservas</h1>
        </div>
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nº</th>
                            <th scope="col">Nº de apartamento</th>
                            <th scope="col">Dia de Entrada</th>
                            <th scope="col">Dia de Salida</th>
                            <th scope="col">Precio</th>
                        </tr>
                    </thead>
                    <tbody data-bs-spy="scroll">
                        <?php foreach ($reservas as $i => $reserva) { ?>
                            <tr>
                                <th scope="row"><?=$i+1?></th>
                                <td><?php echo $reserva["ApartamentosID"]; ?></td>
                                <td><?php echo $reserva["DiaEntrada"]; ?></td>
                                <td><?php echo $reserva["DiaSalida"]; ?></td>
                                <td><?php echo $reserva["Precio"]; ?></td>
                                <td><button id="<?php echo $reserva["ReservaID"]?>" class="btn btn-danger btnDeleteReserva">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                        </svg>
                                </td></button>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal modal-lg fade" id="modalDeleteReserva" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#AAE6D9">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Cancelar Reserva</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h4>Estas seguro de querer cancelar tu Reserva?</h4>
                    </div>
                    <div class="modal-footer" style="background-color:#AAE6D9">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                        <a id="reservaIDhref" ><button type="button" class="btn btn-primary">Confirmar</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="srcs/index.js"></script>
</body>

</html>