<?php
function gestores_reserva($request, $response, $container)
{
    $reservaModel = $container->reservas();
    $reservas = $reservaModel->getAll();
    $response->setTemplate("gestores_reserva.php");
    $response->set("container", $container);
    $response->set("reservas", $reservas);
    return $response;
}