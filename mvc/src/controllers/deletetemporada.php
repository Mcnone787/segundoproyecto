<?php
function deleteTemporada($request, $response, $container) {
    $temporadamodel = $container->temporada();
  
    $temporada = $temporadamodel->deletetemporada($_GET["id"]);
  
    $response->redirect("location: index.php?r=gestores_temporadas");
    $response->set("container", $container);
    return $response;
}