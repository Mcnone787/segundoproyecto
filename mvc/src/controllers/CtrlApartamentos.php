<?php

function ctrlApartamentos($request, $response, $container)
{
    $apartamentosModel = $container->apartamentos();
    $apartamentos = $apartamentosModel->getApartamentos();

    $apartamentosPorPagina = 12;
    $jsonfichero=file_get_contents("../src/jsons/img.json");
    $jsondecode=json_decode($jsonfichero,true);
    
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

    if ($paginaAnterior < 1) {
        $paginaAnterior = 1;
    }
    if ($paginaSiguiente > $totalPaginas) {
        $paginaSiguiente = $totalPaginas;
    }

    $response->set("apartamentosPagina", $apartamentosPagina);
    $response->set("totalPaginas", $totalPaginas);
    $response->set("paginaActual", $paginaActual);
    $response->set("paginaAnterior", $paginaAnterior);
    $response->set("paginaSiguiente", $paginaSiguiente);
    $response->set("imagenesjson",$jsondecode );
    $response->setTemplate("apartamentos.php");
    $response->set("container", $container);
    return $response;
}
