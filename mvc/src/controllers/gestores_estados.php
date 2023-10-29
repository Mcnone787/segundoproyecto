<?php

function gestores_estados($request, $response, $container)
{

  $response->setTemplate("estados_gestores.php");
  $response->set("container", $container);

  return $response;
}
