<?php

function ctrlApartamentos($request, $response, $container) {
    $apartamentosModel = $container->apartamentos();
    $apartamentos = $apartamentosModel->getApartamentos();

    $apartamentosPorPagina = 15;

    if (isset($_GET["pagina"])) {
        $paginaActual = $_GET["pagina"];
    } else {
        $paginaActual = 1;
    }

    $inicio = ($paginaActual - 1) * $apartamentosPorPagina;
    $fin = $inicio + $apartamentosPorPagina;

    $apartamentosPagina = array_slice($apartamentos, $inicio, $apartamentosPorPagina);

    $totalPaginas = ceil(count($apartamentos) / $apartamentosPorPagina);

    $paginaAnterior = $paginaActual - 1;
    $paginaSiguiente = $paginaActual + 1;

    // Validations to ensure you don't go to an incorrect page
    if ($paginaAnterior < 1) {
        $paginaAnterior = 1;
    }
    if ($paginaSiguiente > $totalPaginas) {
        $paginaSiguiente = $totalPaginas;
    }

    // Pass the necessary data to the template
    $response->set("apartamentosPagina", $apartamentosPagina);
    $response->set("totalPaginas", $totalPaginas);
    $response->set("paginaActual", $paginaActual);
    $response->set("paginaAnterior", $paginaAnterior);
    $response->set("paginaSiguiente", $paginaSiguiente);

    $response->setTemplate("apartamentos.php");
    $response->set("container", $container);
    return $response;
}
