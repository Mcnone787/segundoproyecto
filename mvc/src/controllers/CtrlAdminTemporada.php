<?php
function ctrlAdminTemporada($request, $response, $container){
    $temporadaModel = $container->temporada();
    $temporada = $temporadaModel->getAllTemporadas();
    $response->set("tasks", $temporada);
    $response->setTemplate("AdminTemporada.php");
    $response->set("container", $container);
    return $response;
}