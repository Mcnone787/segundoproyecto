<?php

function ctrlApartamentos($request, $response, $container)
{
    $apartamentosModel = $container->apartamentos();
    $apartamentos = $apartamentosModel->getApartamentos();

    $jsonfichero=file_get_contents("../src/jsons/img.json");
    $jsondecode=json_decode($jsonfichero,true);
    
    $response->set("apartamentos",$apartamentos );
    $response->set("imgjsondecode",$jsondecode );
    $response->setTemplate("apartamentos.php");
    $response->set("container", $container);
    return $response;
}
