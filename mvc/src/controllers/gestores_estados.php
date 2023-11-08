<?php

function gestores_estados($request, $response, $container)
{
  $estadoModel = $container->estados();
  $estados=$estadoModel->getestadogestor($_SESSION["user"]["IDUsuario"]);

  
  $response->set("estados", $estados);
  $response->setTemplate("estados_gestores.php");
  

  return $response;
}
