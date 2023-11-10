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
    <div class="container" style="margin-bottom:250px;">
        <div class="row" style="margin-top:100px;margin-bottom:100px;">
            <div class="col-5">
                
            </div>
            <div class="col-7">
                <form class="form-control form_session" action="index.php?r=addestados" method="post">
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-12">
                                <label for="Nombre"> Nombre para el estado </label><input class="form-control" type="text" placeholder="Default input" name="nombrestado">
                            </div>

                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="row">
                            <div class="col-6">
                                <label for="Nombre"> Fecha de inicio  del estado </label>
                                <input class="form-control" type="date" placeholder="Default input" name="ini">
                            </div>
                            <div class="col-6">
                                <label for="Nombre"> Fecha de final del estado </label>
                                <input class="form-control" type="date" placeholder="Default input" name="fin">
                            </div>
                            <?php
                            foreach ($apartamentos as $key => $value) {
                                echo "<label><input type='radio' name='apartamento'  value='".$value["ApartamentosID"]."'>".$value["Titulo"]." </label>";
                            }
                            ?>

                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Añadir estado :3</button>
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
    <script src="srcs/index.js"></script>

</body>

</html>