<?php
function ctrladdservicio($request, $response, $container){
    $response->setTemplate("addservicio.php");
    $response->set("container", $container);
}