<?php

function ctrlgestores($request, $response, $container){
  
  $response->setTemplate("gestores.php");
  $response->set("container",$container);
  $departamentosModel=$container->apartamentos();
  
  $tasks= $departamentosModel->getAll($_SESSION["user"]["IDUsuario"]);
 
  $response->set("tasks",$tasks);
  return $response;
}