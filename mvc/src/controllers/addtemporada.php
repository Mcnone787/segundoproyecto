<?php
function addtemporada($request, $response, $container) {
    $temporadamodel = $container->temporada();
  
    $temporada = $temporadamodel->addtemporada($_SESSION["user"]["IDUsuario"],$_POST["fechaini"],$_POST["fechafin"],$_POST["temporadaNombre"]);
  
    $response->redirect("location: index.php?r=gestores_temporadas");
    $response->set("container", $container);
    return $response;
}