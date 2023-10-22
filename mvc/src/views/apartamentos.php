<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="srcs/style.css">
    <link rel="icon" href="imgs/logo/favicon/logo-removebg-preview.png" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
</head>

<body>
    <?php include 'nav.php'; ?>
    <div class="container-fluid">
        <div class="row row-cols-3 row-cols-md-5 g-4 my-5 py-3">
            <?php if (isset($apartamentosPagina) && is_array($apartamentosPagina)) : ?>
                <?php foreach ($apartamentosPagina as $apartamento) : ?>
                    <?php
                    $titulo = $apartamento['Titulo'];
                    $descripcion = $apartamento['Descripcion'];
                    $numHabitaciones = $apartamento['num_habita'];
                    $precioAlt = $apartamento['precioALT'];
                    $precioBaj = $apartamento['PrecioBAJ'];
                    ?>
                    <div class="col">
                        <div class="card h-100" style="width: 75%;">
                            <img src="imgs/logo/logo.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $titulo ?></h5>
                                <p class="card-text"><?= $descripcion ?></p>
                                <p class="card-text">Habitaciones: <?= $numHabitaciones ?></p>
                                <h6 class="card-text">Precio Alto: <?= $precioAlt ?>€ - Precio Bajo: <?= $precioBaj ?>€</h6>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <p>No apartments available.</p>
            <?php endif; ?>
        </div>
        <div class="container">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item <?= $paginaAnterior < 1 ? 'disabled' : '' ?>">
                        <a class="page-link" href="?r=apartamentos&pagina=<?= $paginaAnterior ?>">Previous</a>
                    </li>
                    <?php for ($i = 1; $i <= $totalPaginas; $i++) : ?>
                        <li class="page-item <?= $paginaActual == $i ? 'active' : '' ?>">
                            <a class="page-link" href="?r=apartamentos&pagina=<?= $i ?>"><?= $i ?></a>
                        </li>
                    <?php endfor; ?>
                    <li class="page-item <?= $paginaSiguiente > $totalPaginas ? 'disabled' : '' ?>">
                        <a class="page-link" href="?r=apartamentos&pagina=<?= $paginaSiguiente ?>">Next</a>
                    </li>
            </nav>
        </div>
    </div>
    <?php include "footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="srcs/apartamentos.js"></script>
</body>

</html>