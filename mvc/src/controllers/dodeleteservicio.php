<?php

function dodeleteservicio($request, $response, $container){

    $id = $request->get(INPUT_GET,"id");
    
    $reservaModel = $container->servicios();
    
    
    $reservaModel->deleteservicio($id);
    
    if($_SESSION['user']['Rol'] == 'admin') {
        $response->redirect("location: index.php?r=adminEstados");

    }
}