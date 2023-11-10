<?php
function gestores_reserva($request, $response, $container)
{
    $reservaModel = $container->reservas();
    $reservas = $reservaModel->getAllReservas();
    $response->setTemplate("gestores_reserva.php");
    $response->set("container", $container);
    $response->set("reservas", $reservas);
    return $response;
}