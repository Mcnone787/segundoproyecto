<?php

function adtemporadaApartamento($request, $response, $container){
  
    $response->setTemplate("addtemporada_apartamento.php");
    $response->set("container",$container);
    return $response;
  }