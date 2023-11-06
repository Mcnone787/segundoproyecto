<?php
function deleteTemporada($request, $response, $container) {
    $temporadamodel = $container->temporada();
    $id = $request->get(INPUT_GET, "id");
    if ($id == null) {
        $response->redirect("location: index.php?r=gestores_temporadas&error=1");
        return;
    }
    if ($id == -1) {
        $response->redirect("location: index.php?r=gestores_temporadas&error=2");
        return;
    }
    if ($id == null && $id == -1) {
        $response->redirect("location: index.php?r=gestores_temporadas&error=3");
        return;
    }
  
    $temporada = $temporadamodel->deletetemporada($id);
  
    $response->redirect("location: index.php?r=gestores_temporadas");
    $response->set("container", $container);
    return $response;
}