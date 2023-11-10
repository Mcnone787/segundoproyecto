<?php
function doaddservicio($request, $response, $container){
    $servicioMOdel = $container->servicios();
    $servicio = $request->get(INPUT_POST, "servicio");
    

    if ($servicio==null) {
        $response->redirect("Location: index.php?r=ctrladduser&error=1");
        return;
    }
    
    $servicioMOdel->createservice($servicio);
    if($_SESSION['user']['Rol'] == 'admin') {
        $response->redirect("location: index.php?r=adminEstados");

    } else{
        $response->redirect("location: index.php?r=getores_apartamentos");
    }
}