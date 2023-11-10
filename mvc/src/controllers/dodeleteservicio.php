<?php

function dodeleteservicio($request, $response, $container){

    $id = $request->get(INPUT_GET,"id");
    
    $reservaModel = $container->servicios();
    
    
    $reservaModel->deleteservicio($id);
    
    $response->redirect("Location: index.php?r=index");
}