<?php
function addtemporada($request, $response, $container) {
    $temporadamodel = $container->temporada();
    if($_POST["fechaini"] == null || $_POST["fechafin"] == null || $_POST["temporadaNombre"] == null){
        echo "Algun campo esta vacio";
    }
    if($_POST["fechaini"] == -1 || $_POST["fechafin"] == -1 ){
        echo "Campo fecha no valido";
    }
    if($_POST["fechaini"] > $_POST["fechafin"]){
        echo "La fecha de inicio no puede ser mayor que la fecha de fin";
    }
    $temporada = $temporadamodel->addtemporada($_SESSION["user"]["IDUsuario"],$_POST["fechaini"],$_POST["fechafin"],$_POST["temporadaNombre"]);
  
    $response->redirect("location: index.php?r=gestores_temporadas");
    $response->set("container", $container);
    return $response;
}