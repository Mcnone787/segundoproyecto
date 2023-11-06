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
    <?php
    if ($_GET["delete"] == "1") {
        include "deletebien.php";
    } ?>
    <div class="container-fluid">
        <div class="row">
        <?php include "menu_gestores.php"; ?>
            <div class="col-10">
                <h3 style="text-align:center;padding:20px;">Lista de Temporadas sr/sra: <?php echo $_SESSION["user"]["Nombre"] ?></h3>
                <div class="m-3">
                    <a href="index.php?r=temporada"> <button class="btn btn-outline-success">Añadir temporada</button></a>
                </div>
                <div class="row row-table">
                    <table id="myTable" class="display border rounded-2" style="width: 100%; margin-bottom: 15%; max-height: 100vh;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Temporada Nombre</th>
                                <th>Fecha Inicio</th>
                                <th>Fecha Salida</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($tasks as $i => $task) { ?>
                                <tr>
                                    <td><?php echo $i + 1 ?></td>
                                    <td><?php echo $task["temporadaNombre"]; ?></td>
                                    <td><?php echo $task["fechaini"]; ?></td>
                                    <td><?php echo $task["fechasalida"]; ?></td>
                                    <td>
                                        <a href="index.php?r=deletetemporada&id=<?php echo $task["idtemporada"];?>">
                                            <button style="display:block;margin-bottom:10px;" class="btn btn-outline-danger">Eliminar</button>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        console.log($("body"))
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
    <?php include "footer.php" ?>
    <script src="srcs/index.js"></script>
    <script src="srcs/table.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="srcs/messages_erros_successful.js"></script>
</body>

</html>