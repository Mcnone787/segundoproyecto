<?php

function ctrlApartamentos($request, $response, $container) {

    $response->setTemplate("apartamentos.php");
    $response->set("container", $container);
    
    return $response;

}