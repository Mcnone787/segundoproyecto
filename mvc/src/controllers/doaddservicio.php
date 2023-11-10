<?php
function doaddservicio($request, $response, $container){
    $servicioMOdel = $container->servicios();
    $servicio = $request->get(INPUT_POST, "servicio");
    

    if ($servicio==null) {
        $response->redirect("Location: index.php?r=ctrladduser&error=1");
        return;
    }
    
    $servicioMOdel->createservice($servicio);
    $response->redirect("Location: index.php?r=index");
}