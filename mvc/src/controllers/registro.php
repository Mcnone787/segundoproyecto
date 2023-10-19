<?php 
function ctrlRegistro($request, $response, $container){
  
    $response->setTemplate("registro.php");
  
    return $response;
  }