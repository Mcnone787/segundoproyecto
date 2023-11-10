<?php
function gestores_reserva($request, $response, $container)
{
    $reservaModel = $container->reservas();
    $reservas = $reservaModel->getReservasPorApartamentos($_SESSION["user"]["IDUsuario"]);

    $response->setTemplate("gestores_reserva.php");
    $response->set("container", $container);
    $response->set("reservas", $reservas);
    return $response;
}