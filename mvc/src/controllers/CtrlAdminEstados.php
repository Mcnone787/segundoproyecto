<?php
function ctrlAdminEstado($request, $response, $container)
{
    $estadoModel = $container->estados();
    $estados = $estadoModel->getAllEstados();
    $response->setTemplate("AdminEstados.php");
    $response->set("estados", $estados);
    return $response;
}