<?php
function ctrlReservas($request, $response, $container)
{
    $reservaModel = $container->reservas();
    $reservas = $reservaModel->getReservas($_SESSION["user"]["IDUsuario"]);
    $response->setTemplate("reservas.php");
    $response->set("container", $container);
    $response->set("reservas", $reservas);
    return $response;
}