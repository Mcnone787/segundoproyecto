<?php

function ctrleditaparta($request, $response, $container)
{


    $apartamento=$container->apartamentos();
        
        $servicios_apartamentos=$container->servicios_apartamentos();
        $servicios=$servicios_apartamentos->getAll($request->get(INPUT_GET,"id"));

        $Mdelservicio=$container->servicios();
        $totalservicios=$Mdelservicio->getApartamentos();

        
        for($i=0;$i<count($totalservicios);$i++){
            for($i2=0;$i2<count($servicios);$i2++){
                    if($totalservicios[$i]["servicio"]==$servicios[$i2]["servicio"]){
                        $totalservicios[$i]=1;
                    }
            }
        }

    $id = $request->get(INPUT_GET, "id");
    
    if($id == null) {
        $response->redirect("location: index.php?r=gestores_apartamentos&error=1");
        return;
    }
    if($id == -1) {
        $response->redirect("location: index.php?r=gestores_apartamentos&error=2");
        return;
    }
    if($id == null && $id == -1){
        $response->redirect("location: index.php?r=gestores_apartamentos&error=3");
        return;
    }
    
    $informationapartamento = $apartamento->getapartamento($id);
    //variables
    $response->set("informationapartamento", $informationapartamento);
    $response->set("servicios", $servicios);
    $response->set("totalservicios", $totalservicios);
    $response->set("id", $request->get(INPUT_GET, "id"));
    $response->setTemplate("editapartamento.php");

    return $response;
}
