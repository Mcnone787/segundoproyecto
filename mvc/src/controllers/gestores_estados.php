<?php

function gestores_estados($request, $response, $container)
{
  $estadoModel = $container->estados();

  $response->setTemplate("estados_gestores.php");
  $response->set("container", $container);

  return $response;
}
