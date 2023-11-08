<?php
function ctrldetallesreserva($request, $response, $container)
{
    $reservaModel = $container->reservas();
    $reservaID = $request->get(INPUT_GET, "id");
    $reservas = $reservaModel->getReservaDetalle($reservaID);

    $nombre = $reservas[0]["Nombre"];
    $apellidos = $reservas[0]["Apellidos"];
    $telefono = $reservas[0]["Telefono"];
    $email = $reservas[0]["email"];

    $response->setTemplate("detalles_reserva.php");
    $response->set("nombre", $nombre);
    $response->set("apellidos", $apellidos);
    $response->set("telefono", $telefono);
    $response->set("email", $email);
    return $response;

}