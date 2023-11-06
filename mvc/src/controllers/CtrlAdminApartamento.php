<?php
function ctrlAdminApartamento($request, $response, $container){
    $apartamentosModel = $container->apartamentos();
    $apartamentos = $apartamentosModel->getApartamentos();
    $response->set("tasks", $apartamentos);
    $response->setTemplate("AdminApartamento.php");
    $response->set("container", $container);
    return $response;
}