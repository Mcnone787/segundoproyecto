<?php

function gestores_apartamentos($request, $response, $container)
{

  $departamentosModel = $container->apartamentos();


  $tasks = $departamentosModel->getAll($_SESSION["user"]["IDUsuario"]);

  $response->set("tasks", $tasks);
  $response->setTemplate("apartamento_gestores.php");
  $response->set("container", $container);

  return $response;
}
