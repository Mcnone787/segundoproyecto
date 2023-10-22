<?php

function ctrlApartamentos($request, $response, $container) {

    $apartamentosModel = $container->apartamentos();
    $apartamentos = $apartamentosModel->getApartamentos();

    $response->set("apartamentos", $apartamentos);

    $response->setTemplate("apartamentos.php");
    $response->set("container", $container);
    return $response;
}