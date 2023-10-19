<?php 
function ctrlRegistro($request, $response, $container){
  
    $response->setTemplate("registro.php");
    $response->set("container",$container);
  
    return $response;
  }