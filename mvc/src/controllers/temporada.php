<?php

function temporada($request, $response, $container){
  
    $response->setTemplate("temporada.php");
    $response->set("container",$container);
    return $response;
  }