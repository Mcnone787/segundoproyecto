<?php

function gestores_temporadas($request, $response, $container){
    $temporadaModel=$container->temporada();
    $temporadas=$temporadaModel->getTemporadas($_SESSION["user"]["IDUsuario"]);
    $response->set("tasks",$temporadas);

    $response->setTemplate("temporada_gestores.php");
    $response->set("container",$container);
  
    return $response;
  }
