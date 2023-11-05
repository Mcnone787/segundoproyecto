<?php

function ctrlAdmin($request, $response, $container){
  
  $response->setTemplate("PanelAdmin.php");
  $response->set("container",$container);
  return $response;
}