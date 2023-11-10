<?php
function ctrlserviciosAdmin($request, $response, $container)
{


    $servicioModel = $container->servicios();
    $servicios = $servicioModel->getApartamentos();
    $response->set("tasks", $servicios);
    $response->set("container", $container);
    $response->setTemplate("serviciosAdmin.php");
    return $response;

}
