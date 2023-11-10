<?php
function ctrlAdminReserva($request, $response, $container)
{
    $reservaModel = $container->reservas();
    $reservas = $reservaModel->getAllReservas();
    $response->setTemplate("AdminReserva.php");
    $response->set("reservas", $reservas);
    return $response;
}