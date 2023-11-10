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
    <div class="row">
      <?php include "menu_gestores.php"; ?>
      <div class="col-12 p-3">
        <div class="d-flex justify-content-center align-items-center">
          <button class="btn btn-outline-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
          </button>
          <h3 style="text-align:center;padding:20px;">Editando Temporadas sr/sra: <?php echo $_SESSION["user"]["Nombre"] ?></h3>
        </div>
        <div class="container">
          <div class="row align-items-center">
            <div class="mx-auto col-10 col-md-8 col-lg-6">
              <form class="form-control form_session p-5" action="index.php?r=dotemporadaapartamento&id=<?php echo $id; ?>" method="post">
                <div class="mb-3">
                  <h2>Estas editando el apartamento <?php echo $_GET["Nombre_apartamento"]; ?></h2>
                </div>
                <div class="mb-3">
                  <div class="row">
                    <div class="col-6">
                      <p>
                        <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Añadir temporada ^^</a>
                      </p>
                      <div class="collapse multi-collapse" id="multiCollapseExample1">
                        <div class="card card-body">
                          <?php
                          foreach ($totaltemporada as $i => $task) {
                            if ($task != 1) { ?>
                              <label for="d"><input type="checkbox" name="add<?php echo $task["idtemporada"]; ?>" id=""> <?php echo $task["temporadaNombre"]; ?> <?php echo $task["fechaini"]; ?> <?php echo $task["fechasalida"]; ?>
                              </label><br>
                          <?php }
                          } ?>
                        </div>
                      </div>
                    </div>
                    <div class="col-6">
                      <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Quitar temporada :-:</button>
                      <div class="collapse multi-collapse" id="multiCollapseExample2">
                        <div class="card card-body">
                          <?php
                          foreach ($temporadas_apartamentos as $i => $task) { ?>

                            <label for="d"><input type="checkbox" name="rm<?php echo $task["idtemporada"]; ?>" id=""> <?php echo $task["temporadaNombre"]; ?> <?php echo $task["fechaini"]; ?> <?php echo $task["fechasalida"]; ?> <?php } ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Añadir temporada :3</button>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>