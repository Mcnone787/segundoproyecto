<?php
function addtemporada($request, $response, $container) {
    $temporadamodel = $container->temporada();
    if($_POST["fechaini"] == null || $_POST["fechafin"] == null || $_POST["temporadaNombre"] == null){
        $response->redirect("location: index.php?r=gestores_temporadas&error=1");
        return;
    }
    if($_POST["fechaini"] == -1 || $_POST["fechafin"] == -1 ){
        $response->redirect("location: index.php?r=gestores_temporadas&error=3");
        return;
    }
    if($_POST["fechaini"] == null || $_POST["fechafin"] == null && $_POST["fechaini"] == -1 || $_POST["fechafin"] == -1 ){
        $response->redirect("location: index.php?r=gestores_temporadas&error=3");
        return;
    }
    if($_POST["fechaini"] > $_POST["fechafin"]){
        $response->redirect("location: index.php?r=gestores_temporadas&errorTemporada=1");
        return;
    }

    $temporadamodel->addtemporada($_SESSION["user"]["IDUsuario"],$_POST["fechaini"],$_POST["fechafin"],$_POST["temporadaNombre"]);
    $response->redirect("location: index.php?r=gestores_temporadas");
    $response->set("container", $container);
    return $response;
}